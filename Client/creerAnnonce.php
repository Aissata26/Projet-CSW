<?php 
session_start();
include_once '../Visiteur/header.php';
include_once '../fonction.php';
include_once 'nav1.php';
?>
<body class="background-A">

<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-10">

      <section class="bg-light p-3 rounded form-box mb-5">

        <div class="form-box-content">

          <form method="POST" action="../fonction.php">

            <div id="carouselExample" class="carousel slide carousel-fade">

              <div class="slide-header-sticky">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-9">
                    <div class="row">
                      <div class="col-1">
                        <p class="border rounded-circle text-center border-black mt-3 bg-primary text-white step-bullet" data-step="0">1</p>
                      </div>
                      <div class="col-1">
                        <p class="text-center text-secondary mt-3">›</p>
                      </div>
                      <div class="col-1">
                        <p class="border rounded-circle text-center border-black mt-3 step-bullet" data-step="1">2</p>
                      </div>
                      <div class="col-1 p-0">
                        <p class="text-center text-secondary mt-3">›</p>
                      </div>
                      <div class="col-1">
                        <p class="border rounded-circle text-center border-black mt-3 step-bullet" data-step="2">3</p>
                      </div>
                      <div class="col-1 p-0">
                        <p class="text-center text-secondary mt-3">›</p>
                      </div>
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

                <div class="carousel-item active">
                  <div class="container my-5">

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
                        <label for="nb_demenageurs" class="form-label">Nombres de déménageurs</label>
                        <input type="number" class="form-control" id="nb_demenageurs" name="nbs" min="1" placeholder="1">
                      </div>

                      <div class="col-12 col-md-4">
                        <label for="date1" class="form-label">Date</label>
                        <input type="date" class="form-control padding" name="dd" id="date1">
                      </div>

                      <div class="col-12 col-md-4">
                        <label for="heure1" class="form-label">Heure</label>
                        <input type="time" class="form-control padding" name="hd" id="heure1">
                      </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                      <button type="button" class="btn btn-primary" data-bs-target="#carouselExample" data-bs-slide="next">Suivant</button>
                    </div>

                  </div>
                </div>

                <div class="carousel-item">
                  <div class="container my-5">

                    <h5 class="mb-2">Départ</h5>

                    <div class="mb-3">
                      <label for="ville_depart" class="form-label">Ville de départ</label>
                      <input type="text" class="form-control" id="ville_depart" placeholder="Ex.Rouen">
                    </div>

                    <div class="mb-3">
                      <label for="adresse_depart" class="form-label">Adresse</label>
                      <input type="text" class="form-control" id="adresse_depart" placeholder="N° et rue">
                    </div>

                    <div class="row g-2">
                      <div class="col-12 col-md-6">
                        <label for="type_depart" class="form-label">Type de logement</label>
                        <select id="type_depart" class="form-select">
                          <option value="">Choisir…</option>
                          <option>Appartement</option>
                          <option>Maison</option>
                          <option>Studio</option>
                        </select>
                      </div>

                      <div class="col-6 col-md-3">
                        <label for="etage_depart" class="form-label">Étage</label>
                        <input type="number" class="form-control" id="etage_depart" min="0" placeholder="0">
                      </div>

                      <div class="col-6 col-md-3">
                        <label for="ascenseur_depart" class="form-label">Ascenseur</label>
                        <select id="ascenseur_depart" class="form-select">
                          <option value="">—</option>
                          <option>Oui</option>
                          <option>Non</option>
                        </select>
                      </div>
                    </div>

                    <h5 class="mt-4 mb-2">Arrivée</h5>

                    <div class="mb-3">
                      <label for="ville_arrivee" class="form-label">Ville d’arrivée</label>
                      <input type="text" class="form-control" id="ville_arrivee" placeholder="Ex. Paris">
                    </div>

                    <div class="mb-3">
                      <label for="adresse_arrivee" class="form-label">Adresse</label>
                      <input type="text" class="form-control" id="adresse_arrivee" placeholder="N° et rue">
                    </div>

                    <div class="row g-2">
                      <div class="col-12 col-md-6">
                        <label for="type_arrivee" class="form-label">Type de logement</label>
                        <select id="type_arrivee" class="form-select">
                          <option value="">Choisir…</option>
                          <option>Appartement</option>
                          <option>Maison</option>
                          <option>Studio</option>
                        </select>
                      </div>

                      <div class="col-6 col-md-3">
                        <label for="etage_arrivee" class="form-label">Étage</label>
                        <input type="number" class="form-control" id="etage_arrivee" min="0" placeholder="0">
                      </div>

                      <div class="col-6 col-md-3">
                        <label for="ascenseur_arrivee" class="form-label">Ascenseur</label>
                        <select id="ascenseur_arrivee" class="form-select">
                          <option value="">—</option>
                          <option>Oui</option>
                          <option>Non</option>
                        </select>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                      <button type="button" class="btn btn-outline-secondary" data-bs-target="#carouselExample" data-bs-slide="prev">Précédent</button>
                      <button type="button" class="btn btn-primary" data-bs-target="#carouselExample" data-bs-slide="next">Suivant</button>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="container my-5">

                    <div class="mb-3">
                      <label for="volume" class="form-label">Volume estimé (en m³)</label>
                      <input type="number" class="form-control" id="volume" min="0" step="0.5"
                             placeholder="Ex. 12">
                    </div>

                    <div class="mb-3">
                      <label for="objets" class="form-label">Objets principaux </label>
                      <textarea id="objets" class="form-control" rows="4"
                                placeholder="Ex. lit, canapé, frigo, 20 cartons..."></textarea>
                    </div>

                    <div class="mb-3">
                      <label for="photos" class="form-label">Ajouter des photos</label>
                      <input type="file" class="form-control" id="photos" multiple>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                      <button type="button" class="btn btn-outline-secondary" data-bs-target="#carouselExample" data-bs-slide="prev">Précédent</button>
                      <button type="button" class="btn btn-primary" data-bs-target="#carouselExample" data-bs-slide="next">Suivant</button>
                    </div>

                  </div>
                </div>

                <div class="carousel-item">
                  <div class="container my-5">

                    <div class="mb-4 p-3 border rounded bg-white">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0">Informations générales</h5>
                        <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="0">
                          Modifier
                        </button>
                      </div>
                      <p><strong>Titre :</strong> Déménagement T2 Rouen → Paris</p>
                      <p><strong>Description :</strong> Appartement T2, meubles, électroménager…</p>
                      <p><strong>Nombre de déménageurs :</strong> 2</p>
                      <p><strong>Date :</strong> 15 mars 2025</p>
                      <p><strong>Heure :</strong> 09:00</p>
                    </div>

                    <div class="mb-4">
                      <div class="row">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                          <div class="p-3 border rounded bg-white h-100">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <h5 class="mb-0">Départ</h5>
                              <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="1">
                                Modifier
                              </button>
                            </div>
                            <p class="mb-1"><strong>Ville :</strong> Rouen</p>
                            <p class="mb-1"><strong>Adresse :</strong> 12 rue des Lilas</p>
                            <p class="mb-1"><strong>Type :</strong> Appartement</p>
                            <p class="mb-1"><strong>Étage :</strong> 3ᵉ</p>
                            <p class="mb-0"><strong>Ascenseur :</strong> Oui</p>
                          </div>
                        </div>

                        <div class="col-12 col-md-6">
                          <div class="p-3 border rounded bg-white h-100">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <h5 class="mb-0">Arrivée</h5>
                              <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="1">
                                Modifier
                              </button>
                            </div>
                            <p class="mb-1"><strong>Ville :</strong> Paris</p>
                            <p class="mb-1"><strong>Adresse :</strong> 5 avenue de la République</p>
                            <p class="mb-1"><strong>Type :</strong> Maison</p>
                            <p class="mb-1"><strong>Étage :</strong> RDC</p>
                            <p class="mb-0"><strong>Ascenseur :</strong> Non</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mb-4 p-3 border rounded bg-white">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0">Volume & objets</h5>
                        <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="2">
                          Modifier
                        </button>
                      </div>
                      <p><strong>Volume :</strong> 12m³</p>
                      <p><strong>Objets :</strong> lit, canapé, frigo, 20 cartons…</p>
                      <p><strong>Photos :</strong></p>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                      <button type="button" class="btn btn-outline-secondary" data-bs-target="#carouselExample" data-bs-slide="prev">Précédent</button>
                      <button type="submit" class="btn btn-success">Publier l’annonce</button>
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

    if (titles[index]) {
      titleEl.textContent = titles[index];
    }

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

</body>

<?php 
include_once '../Visiteur/footer.php';
?>
