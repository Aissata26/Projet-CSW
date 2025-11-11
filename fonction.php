<?php 
    try
    {
        $pdo= new PDO("mysql:host=localhost;dbname=bdd_7_13","root","");
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

    $utilisateurs=get_utilisateur();
   if ( isset($_POST['email']) && isset($_POST['password']) )
   {
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        echo('Il faut un email valide');
    }
    else
    {
      if(empty($_POST['password']) || trim($_POST['password']) === '')
      {
        echo('Il faut un mot de passe valide');
      }
      else
      {
          foreach($utilisateurs as $utilisateur)
         {
            if($utilisateur['email'] === $_POST['email'])
            {
                if($utilisateur['motdepasse'] === $_POST['password'])
                {
                    header("Location: Client/client.php");
                    exit();
                }
                else
                {
                    $message1="mot de passe invalide";
                }
            }
            else
            {
                $message="Email invalide";

            }
         }
      }
    }
}
      
  
     


/*function connexion ()
{
       echo ' <div class="modal fade  " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content background--blanc-crem border-0  text-center">
                    <div class="modal-header border-0">    
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row text-center">
                        <h1 class="text-color-bleufoncé fs-2">Connexion</h1>
                    </div>
                    <div class="row text-center">
                        <p class="text-couleur-blanc-creme">Connectez-vous à votre compte</p>
                    </div>
                    <div class="modal-body">
                        <form class="justify-content-center"  method="POST" action="fonction.php">
                            <div class="mb-3">
                                <p><?php echo($message);?></p>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Votre@email.com">
                            </div>
                            <div class="mb-3">
                            <p><?php echo($message1);?></p>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="*********">
                            </div>
                            <div class="text-end">
                                <a href="#" >Mot de passe oublié?</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Connexion</button></div>
                        </form>
                        <div class="text-center text-light border-top p-3">
                            <p class="">Pas encore de compte ? <a href="#">Créer un compte</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>';
}*/


?>