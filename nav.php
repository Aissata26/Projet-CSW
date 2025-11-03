<?php 
include_once 'header.php';
?>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light background align">
  <div class="container-fluid">
    <a class="navbar-brand text-light fw-bold fs-2" href="#">MOVE<span class="titre-color">UP</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item">
          <a class="nav-link mx-lg-5 text-light dynamique " aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <!-- link -->
          <a  href="#"class="mx-lg-5 text-light dynamique " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              connexion
          </a>
          <!-- Modal -->
          <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content btn-outline-primary ">
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
                  <form class="justify-content-center">
                    <div class="mb-3">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre@email.com">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
                    </div>
                    <button type="submit" class="btn btn-primary">Connexion</button></div>
                  </form>
                </div>
                <div class="modal-footer">
                  <p>Pas encore de compte ? <a href="#">Créer un compte</p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link mx-lg-5 text-light dynamique" href="#" >
            Inscription
          </a>
        </li>
          
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
