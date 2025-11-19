<?php 
session_start();
include_once '../Visiteur/header.php';
include_once '../fonction.php';
include_once 'nav1.php';
verf();
verf1();
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

              <div class="carousel-item <?php if(!isset($_SESSION['B'])) echo 'active'; ?>">
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
                    <button type="submit" class="btn btn-primary" name="suivant1">
                      Suivant
                    </button>
                  </div>

                </div>
              </div>

              <div class="carousel-item <?php if(isset($_SESSION['B'])) { echo 'active'; unset($_SESSION['B']); } ?>">
                <div class="container my-5">

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
                      <select class="form-select" name="ad2">
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
                      <select class="form-select" name="ta">
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
                    <button type="submit" class="btn btn-primary" name="suivant2">Suivant</button>
                  </div>

                </div>
              </div>

              <div class="carousel-item <?php if(isset($_SESSION['c'])) { echo 'active'; unset($_SESSION['c']); } ?>">
                <div class="container my-5">

                  <div class="mb-3">
                    <label class="form-label">Volume estimé (m³)</label>
                    <input type="number" class="form-control" id="volume" min="0" step="0.5" placeholder="12">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Objets principaux</label>
                    <textarea class="form-control" rows="4" placeholder="lit, canapé, frigo..."></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Photos</label>
                    <input type="file" class="form-control" multiple>
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
                      <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="0">Modifier</button>
                    </div>

                    <p><strong>Titre :</strong> —</p>
                    <p><strong>Description :</strong> —</p>
                    <p><strong>Nombre de déménageurs :</strong> —</p>
                    <p><strong>Date :</strong> —</p>
                    <p><strong>Heure :</strong> —</p>
                  </div>

                  <div class="mb-4">
                    <div class="row">

                      <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <div class="p-3 border rounded bg-white h-100">
                          <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="mb-0">Départ</h5>
                            <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="1">Modifier</button>
                          </div>

                          <p><strong>Ville :</strong> —</p>
                          <p><strong>Adresse :</strong> —</p>
                          <p><strong>Type :</strong> —</p>
                          <p><strong>Étage :</strong> —</p>
                          <p><strong>Ascenseur :</strong> —</p>
                        </div>
                      </div>

                      <div class="col-12 col-md-6">
                        <div class="p-3 border rounded bg-white h-100">
                          <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="mb-0">Arrivée</h5>
                            <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="1">Modifier</button>
                          </div>

                          <p><strong>Ville :</strong> —</p>
                          <p><strong>Adresse :</strong> —</p>
                          <p><strong>Type :</strong> —</p>
                          <p><strong>Étage :</strong> —</p>
                          <p><strong>Ascenseur :</strong> —</p>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 p-3 border rounded bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h5 class="mb-0">Volume & objets</h5>
                      <button type="button" class="btn btn-sm btn-outline-primary goToSlide" data-target="2">Modifier</button>
                    </div>

                    <p><strong>Volume :</strong> —</p>
                    <p><strong>Objets :</strong> —</p>
                    <p><strong>Photos :</strong> —</p>
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

</body>

<?php include_once '../Visiteur/footer.php'; ?>
