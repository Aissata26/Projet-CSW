<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once 'Visiteur/header.php';
$erreur=["message1"=>""];
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
function add_utilisateur()
{
  global $pdo;
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
               header("location: ../Client/client.php");
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

}
  if(isset($_POST['connexion']))
      {
        traitement_form();
      }   



?>