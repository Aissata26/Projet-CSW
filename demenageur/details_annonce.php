<?php 
include_once '../Visiteur/header.php';
include_once 'nav1.php';
?>
<body class="background-A">

<main class="container py-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-9">

      <div class="bg-light rounded py-3 px-3 mb-4 shadow-sm">
        <h2 class="text-center fw-semibold text-uppercase mb-1">
          Détail de l’annonce
        </h2>
        <p class="text-center text-muted mb-0">
          Récapitulatif du déménagement et proposition de prix
        </p>
      </div>

      <div class="row g-3">
        <div class="col-12 col-lg-6">
          <div class="card shadow-sm h-100 bg-light">
            <div class="card-body">

              <h5 class="fw-bold mb-2 d-flex justify-content-between align-items-center">
                <span>Déménagement Rouen → Paris</span>
                <span class="badge bg-primary">Disponible</span>
              </h5>

              <p class="mb-2">
                <strong>Date :</strong> 15 mars 2025
                <span class="text-muted"> | Heure : 09h00</span>
              </p>

              <p class="mb-2">
                <strong>Description :</strong> Appartement, meubles, électroménager, cartons…
              </p>

              <p class="mb-3">
                <strong>Nombre de déménageurs souhaités :</strong> 2
              </p>

              <hr class="my-3">

              <h6 class="fw-semibold mb-2">Départ</h6>
              <p class="mb-1"><strong>Ville :</strong> Rouen</p>
              <p class="mb-1"><strong>Adresse :</strong> 12 rue des Lilas</p>
              <p class="mb-1"><strong>Type :</strong> Appartement</p>
              <p class="mb-1"><strong>Étage :</strong> 3ᵉ</p>
              <p class="mb-3"><strong>Ascenseur :</strong> Oui</p>

              <hr class="my-3">

              <h6 class="fw-semibold mb-2">Arrivée</h6>
              <p class="mb-1"><strong>Ville :</strong> Paris</p>
              <p class="mb-1"><strong>Adresse :</strong> 5 avenue de la République</p>
              <p class="mb-1"><strong>Type :</strong> Maison</p>
              <p class="mb-1"><strong>Étage :</strong> RDC</p>
              <p class="mb-3"><strong>Ascenseur :</strong> Non</p>

              <hr class="my-3">

              <h6 class="fw-semibold mb-2">Volume & objets</h6>
              <p class="mb-1"><strong>Volume estimé :</strong> 12 m³</p>
              <p class="mb-0">
                <strong>Objets principaux :</strong> lit, canapé, frigo, 20 cartons…
              </p>

            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="card shadow-sm h-100 bg-light">
            <div class="card-body d-flex flex-column">

              <h5 class="fw-bold mb-3">Votre proposition</h5>

              <form class="w-100 mb-3">

                <div class="mb-3">
                  <label class="form-label">Montant proposé (€)</label>
                  <input  type="number"  class="form-control" placeholder="Ex : 280">
                </div>

                <div class="mb-3">
                  <label class="form-label">Message pour le client</label>
                  <textarea class="form-control" rows="3" splaceholder="Ex : Je viens avec un camion 20 m³ et deux déménageurs."></textarea>
                </div>

                <div class="d-flex flex-column flex-md-row gap-2 mt-3">
                  <button type="button" class="btn btn-primary btn-sm flex-fill">
                    Envoyer la proposition
                  </button>
                </div>

              </form>

              <p class="text-muted small mb-0 text-center">
                Vous pourrez échanger avec le client depuis la page “Mes déménagements”.
              </p>

            </div>
          </div>
        </div>

      </div>

      <div class="mt-3">
        <a href="annonces_disponibles.php" class="btn btn-link btn-sm p-0 text-light">
          ← Retour aux annonces disponibles
        </a>
      </div>

    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

<?php include_once '../Visiteur/footer.php'; ?>