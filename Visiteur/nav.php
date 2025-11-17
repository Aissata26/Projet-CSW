<?php 
  session_start();
include_once 'header.php';
include_once '../fonction.php';
 $message1="";
?>
 <?php 
  traitement_con();
 
 ?> 
<body>
    <nav class="navbar navbar-expand-lg navbar-dark background">
    <div class="container-fluid">
    <a class="navbar-brand text-light fw-bold fs-2" href="#">MOVE<span class="titre-color">UP</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item">
          <a class="nav-link mx-lg-5 text-light dynamique " aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <!-- link -->
          <a  href="#"class="mx-lg-5 text-light dynamique nav-link active" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              connexion 
          </a>
        </li>
        <li class="nav-item ">
          <!-- link -->
          <a  class="nav-link mx-lg-5 text-light dynamique" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
           Inscription
          </a>
        </li>
      </ul>   
    </div>
  </div>
</nav>
<!-- modal connexion -->
<div class="modal fade  " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <form class="justify-content-center"  method="POST" action="../fonction.php">
                            <div class="mb-3 text-start text-danger">
                               <p id="mes"><?php if(isset($_SESSION['erreur'])){echo $_SESSION['erreur'];}?><?php if(isset($_SESSION['success'])){echo $_SESSION['success'];} if(isset($_SESSION['erreur2'])){echo $_SESSION['erreur2'];}?></p>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Votre@email.com">
                            </div>
                            <div class="mb-3 ">
                                <input type="password" class="form-control" id="pwd" name="password" placeholder="*********">
                            </div>
                            <div class="text-end">
                                <a href="#" >Mot de passe oublié?</a>
                            </div>
                              <button type="submit" class="btn btn-primary" name="connexion" id="connexion">Connexion</button>
                            </div>
                        </form>
                        <div class="text-center text-light border-top p-3">
                            <p class="">Pas encore de compte ? <a href="#">Créer un compte</a></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- modal inscription -->
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
    <div class="modal-content  background--blanc-crem text-center border-0">
      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="row text-center">
        <h1 class="text-color-bleufoncé fs-2">Inscription</h1>
      </div>
      <div class="row text-center">
        <p class="text-couleur-blanc-creme">Remplissez le formulaire ci-dessous pour créer votre compte</p>
      </div>
      <div class="modal-body">
        <form class="justify-content-center"  method="POST" action="../fonction.php">
          <div class="mb-3 text-start">
            <p class="text-danger"><?php if(isset($_SESSION['erreur1'])){echo $_SESSION['erreur1'];}?></p>
            <label for="text1" class="form-label fs-5 text-light">Nom</label>
            <input type="text" class="form-control" id="text1" aria-label="default input example" name="nom" placeholder="DIALLO" value="<?php if(isset($_SESSION['nom'])){echo $_SESSION['nom'];}?>">
          </div>
          <div class="mb-3 text-start">
            <label for="text2" class="form-label fs-5 text-light">Prenom</label>
            <input type="text" class="form-control" aria-label="default input example" id="text2" name="prenom" placeholder="Aissata" value="<?php if(isset($_SESSION['prenom'])){echo $_SESSION['prenom'];}?>">
          </div>
          <div class="mb-3 text-start">
            <label for="text3" class="form-label fs-5 text-light">Date de naissance</label>
            <input type="date" class="form-control" aria-label="default input example" id="text3" name="anniverssaire" placeholder="2000/01/01" value="<?php if(isset($_SESSION['anniverssaire'])){echo $_SESSION['anniverssaire'];}?>">
          </div>
          <div class="mb-3 text-start">
            <label for="exampleFormControlInput1" class="form-label text-light fs-5 ">Address Email</label>
            <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>">
          </div>
          <div class="mb-3 text-start">
            <label for="catégorie" class="form-label text-light fs-5 ">Catégorie</label>
            <select class="form-select" aria-label="Default select example" name="categorie">
              <option>---</option>
              <option value="1" <?php if(isset($_SESSION['categorie'])){if($_SESSION['categorie']==='1'){echo 'selected';}}?>>Client</option>
              <option value="2" <?php if(isset($_SESSION['categorie'])){if($_SESSION['categorie']==='2'){echo 'selected';}}?>>Déménageur</option>
            </select>
          </div>
          <div class="mb-3 text-start">
            <label for="telephone" class="form-label text-light fs-5 ">telephone</label>
            <input type="number" class="form-control " placeholder="000000000" name="telephone" value="<?php if(isset($_SESSION['telephone'])){echo $_SESSION['telephone'];}?>">
          </div>
          <div class="mb-3 text-start">
            <label for="inputPassword" class="form-label fs-5  text-light">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword" name="motdepasse" placeholder="*********">
          </div>
          <div class="mb-3 text-start">
            <label for="inputPassword1" class="form-label fs-5  text-light">Confirmé mot de passe</label>
            <input type="password" class="form-control" id="inputPassword1" name="motdepasse1" placeholder="*********">
          </div>
          <button type="submit" class="btn btn-primary" name="inscription">Inscription</button></div>
        </form>
        <div class="text-center text-light border-top p-3">
          <p class="">Vous avez déjà un compte? <a href="#">Se connecter</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
<?php if(isset($_SESSION['erreur'])) { ?>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    myModal.show();
</script>
<?php unset($_SESSION['erreur2']); } ?>
<?php if(isset($_SESSION['erreur2'])) { ?>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    myModal.show();
</script>
<?php unset($_SESSION['erreur2']); } ?>
<?php if(isset($_SESSION['erreur1'])) { ?>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop1'));
    myModal.show();
</script>
<?php unset($_SESSION['erreur1']); } ?>
<?php if(isset($_SESSION['success'])) { ?>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    myModal.show();
</script>
<?php unset($_SESSION['success']); } ?>
