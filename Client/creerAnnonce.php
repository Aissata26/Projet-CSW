<?php 
session_start();
include_once '../fonction.php';

 
include_once '../Visiteur/header.php';

include_once 'nav1.php';

?>

<body class="background-A">

<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-10">

      <section class="bg-light p-3 rounded form-box mb-5">

        <div class="form-box-content">

        <form method="POST" action="../fonction.php" enctype="multipart/form-data">

          <div id="carouselExample" class="carousel slide carousel-fade">

            <div class="slide-header-sticky">

              <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                  <div class="row">

                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black mt-3 bg-primary text-white step-bullet" data-step="0">1</p>
                    </div>
                    <div class="col-1"><p class="text-center text-secondary mt-3">›</p></div>

                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black mt-3 step-bullet" data-step="1">2</p>
                    </div>
                    <div class="col-1 p-0"><p class="text-center text-secondary mt-3">›</p></div>

                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black mt-3 step-bullet" data-step="2">3</p>
                    </div>
                    <div class="col-1 p-0"><p class="text-center text-secondary mt-3">›</p></div>

                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black mt-3 step-bullet" data-step="3">4</p>
                    </div>

                  </div>
                </div>
              </div>

              <h2 id="step-title" class="text-center mt-4 titre-color me-5">
                Informations générales
              </h2>

            </div>

            <div class="carousel-inner">

              <div class="carousel-item active " id="slide1">
                <div class="container my-5" id="mot">
                  <div id="message">

                  </div>
                  <div class="mb-3">
                    <label for="titre1" class="form-label">Titre de l’annonce</label>
                    <input type="text" class="form-control" id="titre1" name="ta" placeholder="Déménagement T2 Rouen → Paris">
                  </div>

                  <div class="mb-3">
                    <label for="desc1" class="form-label">Description rapide</label>
                    <textarea class="form-control" id="desc1" rows="3" name="dr" placeholder="Ex. Appartement T2, meubles, électroménager."></textarea>
                  </div>

                  <div class="row mb-3">
                    <div class="col-12 col-md-4">
                      <label class="form-label">Nombres de déménageurs</label>
                      <input type="number" class="form-control" name="nbs" min="1" placeholder="1">
                    </div>

                    <div class="col-12 col-md-4">
                      <label class="form-label">Date</label>
                      <input type="date" class="form-control padding" name="dd">
                    </div>

                    <div class="col-12 col-md-4">
                      <label class="form-label">Heure</label>
                      <input type="time" class="form-control padding" name="hd">
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mt-4">
                    <button type="button" class="btn btn-primary" id ="suivant1"name="suivant1" data-bs-target="" data-bs-slide="next">
                      Suivant
                    </button>
                  </div>

                </div>
              </div>

              <div class="carousel-item" id="slide2">
                <div class="container my-5">
                  <div id="message1">

                  </div> 
                  <h5 class="mb-2">Départ</h5>

                  <div class="mb-3">
                    <label class="form-label">Ville de départ</label>
                    <input type="text" class="form-control" name="vd" placeholder="Rouen">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Adresse</label>
                    <input type="text" class="form-control" name="ad" placeholder="N° et rue">
                  </div>

                  <div class="row g-2">
                    <div class="col-12 col-md-6">
                      <label class="form-label">Type de logement</label>
                      <select class="form-select" name="td">
                        <option value="">Choisir…</option>
                        <option>Appartement</option>
                        <option>Maison</option>
                        <option>Studio</option>
                      </select>
                    </div>

                    <div class="col-6 col-md-3">
                      <label class="form-label">Étage</label>
                      <input type="number" class="form-control" name="ed" min="0" placeholder="0">
                    </div>

                    <div class="col-6 col-md-3">
                      <label class="form-label">Ascenseur</label>
                      <select class="form-select" name="asd">
                        <option value="">—</option>
                        <option>Oui</option>
                        <option>Non</option>
                      </select>
                    </div>
                  </div>

                  <h5 class="mt-4 mb-2">Arrivée</h5>

                  <div class="mb-3">
                    <label class="form-label">Ville d’arrivée</label>
                    <input type="text" class="form-control" name="va" placeholder="Paris">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Adresse</label>
                    <input type="text" class="form-control" name="aa" placeholder="N° et rue">
                  </div>

                  <div class="row g-2">
                    <div class="col-12 col-md-6">
                      <label class="form-label">Type de logement</label>
                      <select class="form-select" name="tla">
                        <option value="">Choisir…</option>
                        <option>Appartement</option>
                        <option>Maison</option>
                        <option>Studio</option>
                      </select>
                    </div>

                    <div class="col-6 col-md-3">
                      <label class="form-label">Étage</label>
                      <input type="number" class="form-control" name="ea" min="0" placeholder="0">
                    </div>

                    <div class="col-6 col-md-3">
                      <label class="form-label">Ascenseur</label>
                      <select class="form-select" name="asa">
                        <option value="">—</option>
                        <option>Oui</option>
                        <option>Non</option>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-secondary" data-bs-target="#carouselExample" data-bs-slide="prev">Précédent</button>
                    <button type="button" class="btn btn-primary" name="suivant2" id="suivant2" data-bs-target="" data-bs-slide="next">Suivant</button>
                  </div>

                </div>
              </div>

              <div class="carousel-item " id="slide3">
                <div class="container my-5">
                  <div id="message2">

                  </div>

                  <div class="mb-3">
                    <label class="form-label">Volume estimé (m³)</label>
                    <input type="number" class="form-control" id="volume" name='volume' min="0" step="0.5" placeholder="12">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Objets principaux</label>
                    <textarea class="form-control"id="op" name="op" rows="4" placeholder="lit, canapé, frigo..."></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Photos</label>
                    <input type="file" class="form-control" name="photo[]" id="photo" multiple>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-secondary" data-bs-target="#carouselExample" data-bs-slide="prev">Précédent</button>
                    <button type="button" class="btn btn-primary" data-bs-target="" id="suivant3" data-bs-slide="next">Suivant</button>
                  </div>

                </div>
              </div>

              <div class="carousel-item ">
                <div class="container my-5">

                  <div class="mb-4 p-3 border rounded bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h5 class="mb-0">Informations générales</h5>
                      <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="0">Modifier</button>
                    </div>
                    <span id="message3">  
                    </span>
                  </div>

                  <div class="mb-4">
                    <div class="row" id="message4">
                    </div>
                  </div>

                  <div class="mb-4 p-3 border rounded bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h5 class="mb-0">Volume & objets</h5>
                      <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="2">Modifier</button>
                    </div>
                    <span id="message5">
                    </span>
                  </div>

                  <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-secondary" data-bs-target="#carouselExample" data-bs-slide="prev">Précédent</button>
                    <button type="submit" class="btn btn-success"  name="publier">Publier l’annonce</button>
                  </div>

                </div>
              </div>

            </div>

          </div>

        </form>

      </div>

    </section>

  </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
const titles = [
  'Informations générales',
  'Logements & trajet',
  'Volume & photos',
  'Récapitulatif'
];

const titleEl = document.getElementById('step-title');
const stepBullets = document.querySelectorAll('.step-bullet');
const carousel = document.getElementById('carouselExample');

if (carousel) {
  carousel.addEventListener('slid.bs.carousel', function (event) {
    const index = event.to;

    if (titles[index]) titleEl.textContent = titles[index];

    stepBullets.forEach(b => {
      if (parseInt(b.getAttribute('data-step')) === index) {
        b.classList.add('bg-primary', 'text-white');
      } else {
        b.classList.remove('bg-primary', 'text-white');
      }
    });
  });
}

document.querySelectorAll('.goToSlide').forEach(btn => {
  btn.addEventListener('click', function() {
    const index = this.getAttribute('data-target');
    const c = bootstrap.Carousel.getOrCreateInstance(carousel);
    c.to(index);
  });
});
</script>
<script>
  let bouton=document.getElementById("suivant1");
  bouton.addEventListener("click",function()
{   let cmpt=0;
    let variable = document.querySelectorAll("#slide1 input");
    let variable1 = document.querySelectorAll("#slide1 textarea");
     for(let i=0 ; i< variable.length; i++)
     {
      if(variable[i].value ==="")
      {
        cmpt=1;
        let parentElement=document.getElementById("message");
        let p='<p class="text-danger"> Veuillez Remplir tout les champs</p>';
        
        parentElement.innerHTML=p;
         break;

      }
      
     }
     let titreannonce=variable[0].value;
     let nombredemenagement=variable[1].value;
     let Date=variable[2].value;
     let heur=variable[3].value;
     for(let i=0 ; i< variable1.length; i++)
     {
      if(variable1[i].value ==="")
      {
        let parentElement=document.getElementById("message");
        let p='<p class="text-danger"> Veuillez Remplir tout les champs</p>';
        cmpt=1;
        parentElement.innerHTML=p;
         break;

      }
     
     }
     
     let desc_rap=variable1[0].value;
     if(cmpt === 0)
      {
         bouton.setAttribute("data-bs-target","carouselExample")
         const c = bootstrap.Carousel.getOrCreateInstance(carousel);
          c.next();
      }
     let parentElement1=document.getElementById("message3");
          let p1= `<p><strong>Titre :</strong>${titreannonce}</p>
                      <p><strong>Description :</strong>${desc_rap}</p>
                      <p><strong>Nombre de déménageurs :</strong>${nombredemenagement}</p>
                      <p><strong>Date :</strong>${Date}</p>
                      <p><strong>Heure :</strong>${heur}</p>`;
                      parentElement1.innerHTML=p1;

})
let bouton1=document.getElementById("suivant2");
  bouton1.addEventListener("click",function()
{   
    let cmpt=0;
    let variable = document.querySelectorAll("#slide2 input");
     for(let i=0 ; i< variable.length; i++)
     {
      if(variable[i].value ==="")
      {
        cmpt=1;
        let parentElement=document.getElementById("message1");
        let p='<p class="text-danger"> Veuillez Remplir tout les champs</p>';
        
        parentElement.innerHTML=p;
         break;

      }
     
     }
     let variable1 = document.querySelectorAll("#slide2 select");
     for(let i=0 ; i< variable1.length; i++)
     {
      if(variable1[i].value ==="")
      {
        cmpt=1;
        let parentElement=document.getElementById("message1");
        let p='<p class="text-danger"> Veuillez Remplir tout les champs</p>';
        
        parentElement.innerHTML=p;
         break;

      }
     
     }
     let vd=variable[0].value;
     let ad=variable[1].value;
     let td=variable1[0].value;
     let ed=variable[2].value;
     let asd=variable1[1].value;
     let va=variable[3].value;
     let aa=variable[4].value;
     let ta=variable1[2].value;
     let ea=variable[5].value;
     let asa=variable1[3].value;
     let parentElement1=document.getElementById("message4");
     let p1= `<div class="col-12 col-md-6 mb-3 mb-md-0">
                        <div class="p-3 border rounded bg-white h-100">
                          <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="mb-0">Départ</h5>
                            <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="1">Modifier</button>
                          </div>
                          <span >
                          <p><strong>Ville :</strong>${vd}</p>
                          <p><strong>Adresse :</strong>${ad}</p>
                          <p><strong>Type :</strong>${td}</p>
                          <p><strong>Étage :</strong>${ed}</p>
                          <p><strong>Ascenseur :</strong>${asd}</p>
                        </div>
                      </div>

                      <div class="col-12 col-md-6">
                        <div class="p-3 border rounded bg-white h-100">
                          <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="mb-0">Arrivée</h5>
                            <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="1">Modifier</button>
                          </div>

                          <p><strong>Ville :</strong>${va}</p>
                          <p><strong>Adresse :</strong>${aa}</p>
                          <p><strong>Type :</strong>${ta}</p>
                          <p><strong>Étage :</strong>${ea}</p>
                          <p><strong>Ascenseur :</strong>${asa}</p>
                        </div>
                      </div>`;
                      parentElement1.innerHTML=p1;
     if(cmpt === 0)
      {
         bouton1.setAttribute("data-bs-target","carouselExample")
         const c = bootstrap.Carousel.getOrCreateInstance(carousel);
          c.next();
      }


})
let bouton2=document.getElementById("suivant3");
  bouton2.addEventListener("click",function()
{
    let cmpt=0;
    let variable = document.querySelector("#slide3 input[type='number']");
      if(variable.value ==="0")
      {
        cmpt=1;
        let parentElement=document.getElementById("message2");
        let p='<p class="text-danger"> Veuillez Remplir tout les champs</p>';
        
        parentElement.innerHTML=p;

      }
     let variable1 = document.querySelector("#slide3 textarea");
      if(variable1.value ==="")
      {
        cmpt=1;
        let parentElement=document.getElementById("message2");
        let p='<p class="text-danger"> Veuillez Remplir tout les champs</p>';
        parentElement.innerHTML=p;

      }
      let variable2 = document.querySelector("#slide3 input[type='file']");
      if(variable2.files.length ===0)
      {
        cmpt=1;
        let parentElement=document.getElementById("message2");
        let p='<p class="text-danger"> Veuillez Remplir tout les champs</p>';
        
        parentElement.innerHTML=p;

      }
      let v=variable.value;
      let op=variable1.value;
      let photo=variable2.files;
      let parentElement1=document.getElementById("message5");
      let p1=`<p><strong>Volume :</strong> ${v}</p>
                      <p><strong>Objets :</strong> ${op}</p>
                      <p><strong>Photos :</strong></p>
                      <div id="carouselphoto" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">`;
    for( let i=0;i<photo.length;i++)
    {
      let activeClass = (i === 0) ? 'active' : '';
      let imgURL = URL.createObjectURL(photo[i]);
      p1+=`
    <div class="carousel-item ${activeClass}">
      <img src="${imgURL}" class="d-block w-100" alt="photo ${i}">
    </div>`;
    }
   p1+=`
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselphoto" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselphoto" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>`;
parentElement1.innerHTML=p1;


     if(cmpt === 0)
      {
         bouton2.setAttribute("data-bs-target","#carouselExample")
         const c = bootstrap.Carousel.getOrCreateInstance(carousel);
          c.next();

          
      
      }

})
</script>


</body>

<?php include_once '../Visiteur/footer.php'; 
?>