<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once 'Visiteur/header.php';
$script;
    try
    {
        $pdo= new PDO("mysql:host=localhost;dbname=tableaux","root","");
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
function get_annonce()
{
    global $pdo;
    $annonceStatement = $pdo->prepare('select * from annonce');
    $annonceStatement->execute();
    $annonce=$annonceStatement->fetchAll();
    return $annonce;
}
function add_utilisateur($nom,$prenom,$email,$chiffrement,$categorie,$telephone,$anniversaire)
{
  global $pdo;
  $utilisateurStatement=$pdo->prepare("INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `motdepasse`, `role`, `telephone`, `dateanniverssaire`) VALUES (:nom, :prenom, :email, :chiffrement, :categorie, :telephone, :anniverssaire);");
  $utilisateurStatement->execute(['nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'chiffrement'=>$chiffrement,'categorie'=>$categorie,'telephone'=>$telephone,'anniverssaire'=>$anniversaire]);
}
function add_annonce($idclient, $date, $ville_depart, $ville_arrivee, $volume, $titreannonce, $description, $nb_demenageurs, $heure, $adresse_depart, $type_depart, $etage_depart, $ascenseur_depart, $adresse_arrivee, $type_arrivee, $etage_arrivee, $ascenseur_arrivee, $objets, $date_creation) 
{
  global $pdo;
  $utilisateurStatement = $pdo->prepare("INSERT INTO `annonce` (`id_client`, `date_demenagement`, `ville_depart`, `ville_arrivee`, `volume`, `titreannonce`, `description`, `nombrededemenagement`, `heur`, `adresse_depart`, `type_logement_depart`, `etage_depart`, `Ascenseur_depart`, `address_arrivee`, `type_logement_arrivee`, `etage_arrivee`, `ascenseur_arrivee`, `objets_principaux`, `date_creation`) VALUES (:id_client, :date_demenagement, :ville_depart, :ville_arrivee, :volume, :titreannonce, :description, :nombrededemenagement, :heur, :adresse_depart, :type_logement_depart, :etage_depart, :Ascenseur_depart, :address_arrivee, :type_logement_arrivee, :etage_arrivee, :ascenseur_arrivee, :objets_principaux, :date_creation);");
  $utilisateurStatement->execute(['id_client'=>$idclient, 'date_demenagement'=>$date, 'ville_depart'=>$ville_depart, 'ville_arrivee'=>$ville_arrivee, 'volume'=>$volume, 'titreannonce'=>$titreannonce, 'description'=>$description, 'nombrededemenagement'=>$nb_demenageurs, 'heur'=>$heure, 'adresse_depart'=>$adresse_depart, 'type_logement_depart'=>$type_depart, 'etage_depart'=>$etage_depart, 'Ascenseur_depart'=>$ascenseur_depart, 'address_arrivee'=>$adresse_arrivee, 'type_logement_arrivee'=>$type_arrivee, 'etage_arrivee'=>$etage_arrivee, 'ascenseur_arrivee'=>$ascenseur_arrivee, 'objets_principaux'=>$objets, 'date_creation'=>$date_creation]);
}
function add_photo($id_annonce, $url)
{
  global $pdo;
  $photoStatement = $pdo->prepare("INSERT INTO `photos` (`id_annonce`, `url`) VALUES (:id_annonce, :url);");
  $photoStatement->execute(['id_annonce'=>$id_annonce,'url'=>$url]);
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
              unset($_SESSION['erreur2']);
              if(password_verify($_POST['password'],$utilisateur['motdepasse']))
              {
                unset($_SESSION['erreur']);
               header("location: Client/client.php");
               $_SESSION['id']=$utilisateur['id'];
               exit();
              }
              else
              {
                $_SESSION['erreur']="Veuillez entrer un mot de passe correcte";
              }
            }
            else
            {
              $_SESSION['erreur2']="Veuillez entrer un mail valide";

            }
          }
          if(isset($_SESSION['erreur2']) || isset($_SESSION['erreur']))
          {
            header("location: Visiteur/index.php");
            exit();
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
        if(strip_tags($_POST['categorie'])===1)
        {
          $categorie="Client";
        }
        else
        {
          $categorie="Déménageur";
        }
        $motdepasse=strip_tags($_POST['motdepasse']);
        $telephone=strip_tags($_POST['telephone']);
        $chiffrement=password_hash($motdepasse,PASSWORD_BCRYPT);
        add_utilisateur($nom,$prenom,$email,$chiffrement,$categorie,$telephone,$anniversaire);
        $_SESSION['success']="réussis";
        header("location: Visiteur/index.php");
        

       
    }
    else
    {
      $_SESSION['erreur1']="les mots de passe sont pas identiques";
      $_SESSION['nom']=$_POST['nom'];
      $_SESSION['prenom']=$_POST['prenom'];
      $_SESSION['anniverssaire']=$_POST['anniverssaire'];
      $_SESSION['email']=$_POST['email'];
      $_SESSION['telephone']=$_POST['telephone'];
      $_SESSION['categorie']=$_POST['categorie'];
      
      header("location: Visiteur/index.php");
      exit();
    }

  }
}
function get_annonce()
{
  $annonces=get_annonce();

foreach($annonces as $annonce)
          {
            if($annonce['id_client']===$_SESSION['id'])
            {
                 $annoncee=$annonce;   
            }
          }
          return $annoncee;
}
if(isset($_POST['publier']))
{
  $idclient          = $_SESSION['id'];
$date              = $_POST['dd'];
$ville_depart      = $_POST['vd'];
$ville_arrivee     = $_POST['va'];
$volume            = $_POST['volume'];   
$titreannonce      = $_POST['ta'];      
$description       = $_POST['dr'];   
$nb_demenageurs    = $_POST['nbs'];
$heure             = $_POST['hd'];
$adresse_depart    = $_POST['ad'];
$type_depart       = $_POST['td'];
$etage_depart      = $_POST['ed'];
$ascenseur_depart  = $_POST['asd'];
$adresse_arrivee   = $_POST['aa'];
$type_arrivee      = $_POST['tla'];       
$etage_arrivee     = $_POST['ea'];
$ascenseur_arrivee = $_POST['asa'];
$objets            = $_POST['op'];
$date_creation     = date("Y-m-d H:i:s");
 add_annonce($idclient, $date, $ville_depart, $ville_arrivee, $volume, $titreannonce, $description, $nb_demenageurs, $heure, $adresse_depart, $type_depart, $etage_depart, $ascenseur_depart, $adresse_arrivee, $type_arrivee, $etage_arrivee, $ascenseur_arrivee, $objets, $date_creation);

$annonces=get_annonce();

foreach($annonces as $annonce)
          {
            if($annonce['id_client']===$_SESSION['id'])
            {
                 $annoncee=$annonce;   
            }
          }


 for ($i = 0; $i < count($_FILES['photo']['name']); $i++) {
    $tmpName = $_FILES['photo']['tmp_name'][$i];
    $name = $_FILES['photo']['name'][$i];
    move_uploaded_file($tmpName, 'fichier/' . basename($name));
    add_photo($annoncee['id'],'fichier/' . basename($name));
}
  header("location: Client/client.php");
      exit();

}


?>