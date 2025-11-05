<?php 
include_once 'header.php';
include_once 'fonction.php';
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
          <a  href="#"class="mx-lg-5 text-light dynamique nav-link " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              connexion 
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link mx-lg-5 text-light dynamique" href="#" >
            Inscription
          </a>
        </li>
      </ul>
          
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php connexion()?>
</body>

