<?php 
include_once '../Visiteur/header.php';
include_once 'nav1.php';
?>
<body class="background-B">
  <section class="bg-light w mt-4">
    <form>
      <div id="carouselExample" class="carousel slide" >
        <div class="carousel-inner">

          
          <div class="carousel-item ">
            <div class="container my-5">
              <div class="row">
                <div class="col-8">
                  <div class="row">
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">1</p>
                    </div>
                    <div class="col-1">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">2</p>
                    </div>
                    <div class="col-1 p-0">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">3</p>
                    </div>
                    <div class="col-1 p-0">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">4</p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <h2 class="h2 p-5">Informations générales</h2>
              </div>
              <div class="mb-3">
                <label for="titre1" class="form-label">Titre de l’annonce</label>
                <input type="text" class="form-control" id="titre1" placeholder="Déménagement T2 Rouen → Paris">
              </div>

              <div class="mb-3">
                <label for="desc1" class="form-label">Description rapide</label>
                <textarea class="form-control" id="desc1" rows="3" placeholder="Ex. Appartement T2, meubles, électroménager."></textarea>
              </div>

              <div class="mb-3">
                <label for="date1" class="form-label">Date de Déménagement</label>
                <input type="date" class="form-control padding" id="date1">
              </div>

              <div class="mb-3">
                <label for="heure1" class="form-label">Heure de début</label>
                <input type="time" class="form-control padding" id="heure1">
              </div>

              <div class="d-flex justify-content-end mt-4">
                <button type="button" class="btn btn-primary" id="next1">Suivant</button>
              </div>
            </div>
          </div>

          
          <div class="carousel-item ">
            <div class="container my-5">
              <div class="row">
                <div class="col-8">
                  <div class="row">
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">1</p>
                    </div>
                    <div class="col-1">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">2</p>
                    </div>
                    <div class="col-1 p-0">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">3</p>
                    </div>
                    <div class="col-1 p-0">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">4</p>
                    </div>
                  </div>
                </div>
              </div>

              <div>
                <h2 class="text-center mt-4 titre-color me-5">Logements & trajet</h2>
              </div>

              <div>
                <h5 class="mb-2">Départ</h5>
              </div>

              <div class="mb-3">
                <label for="ville_depart" class="form-label">Ville de départ</label>
                <input type="text" class="form-control" id="ville_depart" placeholder="Ex.Rouen">
              </div>

              <div class="mb-3">
                <label for="addresse_depart" class="form-label">Adresse</label>
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

              <div>
                <h5 class="mb-2">Arrivée</h5>
              </div>

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
                <button type="button" class="btn btn-outline-secondary" id="prev2">Précédent</button>
                <button type="button" class="btn btn-primary" id="next2">Suivant</button>
              </div>
            </div>
          </div>

          
          <div class="carousel-item ">
            <div class="container my-5">
              <div class="row">
                <div class="col-8">
                  <div class="row">
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">1</p>
                    </div>
                    <div class="col-1">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">2</p>
                    </div>
                    <div class="col-1 p-0">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">3</p>
                    </div>
                    <div class="col-1 p-0">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">4</p>
                    </div>
                  </div>
                </div>
              </div>

              <div>
                <h2 class="text-center mt-4 titre-color me-5">Volume & photos</h2>
              </div>

              <div class="mb-3">
                <label for="volume" class="form-label">Volume estimé (en m³)</label>
                <input type="number" class="form-control" id="volume" min="0" step="0.5" placeholder="Ex. 12">
              </div>

              <div class="mb-3">
                <label for="objets" class="form-label">Objets principaux (facultatif)</label>
                <textarea id="objets" class="form-control" rows="4" placeholder="Ex. lit 140, canapé, frigo, 20 cartons..."></textarea>
              </div>

              <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-outline-secondary" id="prev3">Précédent</button>
                <button type="button" class="btn btn-primary" id="next3">Suivant</button>
              </div>
            </div>
          </div>

    
          <div class="carousel-item active">
            <div class="container my-5">
              <div class="row">
                <div class="col-8">
                  <div class="row">
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">1</p>
                    </div>
                    <div class="col-1">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">2</p>
                    </div>
                    <div class="col-1 p-0">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">3</p>
                    </div>
                    <div class="col-1 p-0">
                      <p class="text-center text-secondary">›</p>
                    </div>
                    <div class="col-1">
                      <p class="border rounded-circle text-center border-black">4</p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <h2 class="text-center mt-4 titre-color me-5">Récapitulatif</h2>
              </div>
              <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-outline-secondary" id="prev4">Précédent</button>
                <button type="submit" class="btn btn-success">Publier l’annonce</button>
              </div>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </form>
  </section>
</body>
<?php 
include_once '../Visiteur/footer.php';
?>
