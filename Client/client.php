<?php 
include_once '../Visiteur/header.php';
include_once 'nav.php';
?>
<body class="background-A">
  <main class="container py-4">
    <div class="row">
      <h2 class="text-center text-light py-4">MES ANNONCES</h2>
    </div>
    <div class="card mb-3 shadow-sm bg-light">
      <div class="card-body">
        <h5 class="card-title fw-bold mb-2">
          Déménagement Rouen → Paris
          <span class="badge bg-primary ms-2">En ligne</span>
        </h5>
        <p class="card-text mb-2">
          <strong>Date :</strong> 15 mars 2025
          <span class="text-muted"> | Statut : En ligne</span>
        </p>
        <p class="mb-0"><strong>1 proposition reçue</strong></p>
        <div class="d-flex justify-content-end gap-2 border-top pt-3 mt-3">
          <a href="#" class="btn btn-outline-secondary btn-sm">Voir les détails</a>
          <a href="#" class="btn btn-outline-primary btn-sm">Modifier</a>
          <a href="#" class="btn btn-outline-danger btn-sm">Supprimer</a>
        </div>
        <div class="mt-3">
          <a class="btn btn-link p-0" data-bs-toggle="collapse" href="#props-1" role="button"
             aria-expanded="false" aria-controls="props-1">
            ▼ Voir la proposition
          </a>
        </div>
        <div class="collapse mt-2" id="props-1">
          <div class="card border-0 bg-light">
            <div class="card-body">
              <div class="border rounded-3 p-3 mb-3">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="me-3">
                    <div class="fw-semibold">Déménageur Express — <strong>280 €</strong></div>
                    <div class="text-muted small">“Camion 20 m³, 2 personnes.”</div>
                  </div>
                  <div class="d-flex gap-2 mt-2 mt-md-0">
                    <button class="btn btn-outline-secondary btn-sm">Discuter</button>
                    <button class="btn btn-success btn-sm">Accepter</button>
                    <button class="btn btn-outline-danger btn-sm">Refuser</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include_once '../Visiteur/footer.php'; ?>
</body>
