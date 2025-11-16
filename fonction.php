<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once 'Visiteur/header.php';
$script;
    try
    {

        $pdo= new PDO("mysql:host=localhost;dbname=tableaux","root","root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
function get_utilisateur()
{
    global $pdo;
    $utilisateurStatement = $pdo->prepare('select * from utilisateur');
    $utilisateurStatement->execute();
    $utilisateurs=$utilisateurStatement->fetchAll();
    return $utilisateurs;

}
function add_utilisateur($nom,$prenom,$email,$chiffrement,$categorie,$telephone,$anniversaire)
{
  global $pdo;
  $utilisateurStatement=$pdo->prepare("INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `motdepasse`, `role`, `telephone`, `dateanniverssaire`) VALUES (:nom, :prenom, :email, :chiffrement, :categorie, :telephone, :anniverssaire);");
  $utilisateurStatement->execute(['nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'chiffrement'=>$chiffrement,'categorie'=>$categorie,'telephone'=>$telephone,'anniverssaire'=>$anniversaire]);
}

function traitement_con()
{
  $utilisateurs=get_utilisateur();
    if(isset($_POST['connexion']))
      {
         if(empty($_POST['email'])|| empty($_POST['password']))
         {
            $_SESSION['erreur']="Veuillez remplir tous les champs";
            header("location: Visiteur/index.php");
            exit();
         }
         else
        {
          foreach($utilisateurs as $utilisateur)
          {
            if($utilisateur['email']===$_POST['email'])
            {
              if($utilisateur['motdepasse']===$_POST['password'])
              {
               header("location: Client/client.php");
               exit();
              }
              else
              {
                $_SESSION['erreur']="Veuillez entrer un mot de passe correcte";
                header("location: Visiteur/index.php");
                exit();
              }
            }
            else
            {
              $_SESSION['erreur']="Veuillez entrer un mail valide";
              header("location: Visiteur/index.php");
              exit();
            }
          }
        }
      }
}
function traitement_ins()
{
  if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['anniverssaire']) || empty($_POST['email']) || empty($_POST['categorie']) || empty($_POST['motdepasse']) || empty($_POST['motdepasse1']))
  {
    $_SESSION['erreur1']="Veuillez remplir tous les champs";
    header("location: Visiteur/index.php");
    exit();
  }
  else
  {
    if($_POST['motdepasse']===$_POST['motdepasse1'])
    {
        $nom=strip_tags($_POST['nom']);
        $prenom=strip_tags($_POST['prenom']);
        $anniversaire=strip_tags($_POST['anniverssaire']);
        $email=strip_tags($_POST['email']);
        $categorie=strip_tags($_POST['categorie']);
        $motdepasse=strip_tags($_POST['motdepasse']);
        $telephone=strip_tags($_POST['telephone']);
        $chiffrement=password_hash($motdepasse,PASSWORD_BCRYPT);
        add_utilisateur($nom,$prenom,$email,$chiffrement,$categorie,$telephone,$anniversaire);
        $_SESSION['success']="inscription réeussis";
        header("location: Visiteur/index.php");
        

       
    }
    else
    {
      $_SESSION['erreur1']="les mots de passe sont pas identiques";
      $_SESSION['nom']=$_POST['nom'];
      $_SESSION['prenom']=$_POST['prenom'];
      $_SESSION['anniverssaire']=$_POST['anniverssaire'];
      $_SESSION['email']=$_POST['email'];
      $_SESSION['categorie']=$_POST['categorie'];
      
      header("location: Visiteur/index.php");
      exit();
    }

  }
}
  if(isset($_POST['connexion']))
      {
        traitement_con();
      }
  elseif(isset($_POST['inscription']))
  {
    traitement_ins();
  }



?>