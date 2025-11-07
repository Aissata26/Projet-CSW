<?php 
include_once '../Visiteur/header.php';
include_once 'nav.php';
?>
<body class="background-B">
    <section class=" bg-light  w  mt-4 ">
   
<div id="carouselExample" class="carousel slide">
    
  <div class="carousel-inner">
     <div class="container my-5">
        <div class="row">
            <div class="col-8">
              <div class="row">  
                <div class="col-1">
                    <p class="border rounded-circle text-center border-black">1</p>
                </div>
                <div class="col-1">
                    <p class="text-center " >></p>
                </div>
                <div class="col-1">
                    <p class="border rounded-circle text-center border-black">2</p>
                </div>
                <div class="col-1 p-0">
                    <p class="text-center ">></p>
                </div>
                <div class="col-1">
                    <p class="border rounded-circle text-center border-black">3</p>
                </div>
                <div class="col-1 p-0">
                    <p class="text-center ">></p>
                </div>
                <div class="col-1">
                    <p class="border rounded-circle text-center border-black">4</p>
                </div>
            </div>
        </div> 
    </div>
    <div class="carousel-item  ">
        <div>
            <h2 class="text-center mt-4 titre-color me-5">Informations générales</h2>
        </div>
        <form>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre de l’annonce</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Déménagement T2 Rouen → Paris">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description rapide</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="date" class="form-control  padding" id="exampleFormControlInput1" >
        </div>
</form>
    </div>
    <div class="carousel-item active">
      <div>
            <h2 class="text-center mt-4 titre-color me-5">Informations générale</h2>
        </div>
        <form>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre de l’annonce</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Déménagement T2 Rouen → Paris">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description rapide</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="date" class="form-control  padding" id="exampleFormControlInput1" >
        </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev bg-primary" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next bg-primary" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
</body>
<?php 
include_once '../Visiteur/footer.php';
?>