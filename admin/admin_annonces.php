<?php 
include_once '../Visiteur/header.php';
include_once 'nav1.php';
?>
<body class="background-A">

<main class="container py-4">

  <div class="row">
    <h2 class="text-center text-light py-4">Gestion des annonces</h2>
  </div>

  <div class="row justify-content-center">
    <div class="col-12 col-lg-10">

      <section class="bg-light p-4 rounded shadow-sm mb-4">
        <p class="text-muted small mb-3">
          Liste des annonces publiées par les clients. Vous pouvez les consulter ou les supprimer.
        </p>
        <div class="card mb-3 bg-white shadow-sm border-0">
          <div class="card-body">

            <h5 class="card-title fw-bold mb-2 d-flex justify-content-between align-items-center">
              <span>Déménagement Rouen → Paris</span>
              <span class="badge bg-primary">En ligne</span>
            </h5>

            <p class="mb-1 text-muted small">
              Client : <strong>Aissata Diallo</strong> • Publiée le 10/03/2025
            </p>

            <p class="card-text mb-1">
              <strong>Date :</strong> 15 mars 2025
              <span class="text-muted"> | Heure : 09h00</span>
            </p>
            <p class="card-text mb-1">
              <strong>Départ :</strong> Appartement, 3ᵉ étage, avec ascenseur – Rouen
            </p>
            <p class="card-text mb-2">
              <strong>Arrivée :</strong> Maison, RDC – Paris
            </p>

            <div class="d-flex justify-content-end gap-2 border-top pt-3 mt-3">
              <a href="../Client/details_annonce.php?id=1"
                 class="btn btn-outline-secondary btn-sm">
                Voir les détails
              </a>
              <form method="post" action="../fonction.php" class="m-0">
                <input type="hidden" name="annonce_id" value="1">
                <button type="submit"
                        name="admin_supprimer_annonce"
                        class="btn btn-outline-danger btn-sm">
                  Supprimer
                </button>
              </form>

            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include_once '../Visiteur/footer.php'; ?>
