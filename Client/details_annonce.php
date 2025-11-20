<?php 
include_once '../Visiteur/header.php';
include_once 'nav1.php';
?>
<body class="background-A">

  <main class="container mt-4">
    <div class="row">
      <h2 class="text-center text-light py-4">Détails de l’annonce</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-10">

        <section class="bg-light p-4 rounded shadow-sm mb-4">

          <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
              <h4 class="mb-1">Déménagement Rouen → Paris</h4>
              <p class="mb-0 text-muted">15 mars 2025 • 09h00</p>
            </div>
            <span class="badge bg-primary">En ligne</span>
          </div>

          <div class="mb-4 p-3 border rounded bg-white">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h5 class="mb-0">Informations générales</h5>
              <a href="creerAnnonce.php?step=1" class="btn btn-sm btn-outline-primary">
                Modifier
              </a>
            </div>
            <p class="mb-1"><strong>Titre :</strong> Déménagement T2 Rouen → Paris</p>
            <p class="mb-1"><strong>Description :</strong> Appartement T2, meubles, électroménager…</p>
            <p class="mb-1"><strong>Nombre de déménageurs souhaités :</strong> 2</p>
            <p class="mb-1"><strong>Date :</strong> 15 mars 2025</p>
            <p class="mb-0"><strong>Heure du déménagement :</strong> 09:00</p>
          </div>

          <div class="row mb-4">
            <div class="col-12 col-md-6 mb-3 mb-md-0">
              <div class="p-3 border rounded bg-white h-100">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h5 class="mb-0">Départ</h5>
                  <a href="creerAnnonce.php?step=2" class="btn btn-sm btn-outline-primary">
                    Modifier
                  </a>
                </div>
                <p class="mb-1"><strong>Ville :</strong> Rouen</p>
                <p class="mb-1"><strong>Adresse :</strong> 12 rue des Lilas</p>
                <p class="mb-1"><strong>Type de logement :</strong> Appartement</p>
                <p class="mb-1"><strong>Étage :</strong> 3ᵉ</p>
                <p class="mb-0"><strong>Ascenseur :</strong> Oui</p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="p-3 border rounded bg-white h-100">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h5 class="mb-0">Arrivée</h5>
                  <a href="creerAnnonce.php?step=2" class="btn btn-sm btn-outline-primary">
                    Modifier
                  </a>
                </div>
                <p class="mb-1"><strong>Ville :</strong> Paris</p>
                <p class="mb-1"><strong>Adresse :</strong> 5 avenue de la République</p>
                <p class="mb-1"><strong>Type de logement :</strong> Maison</p>
                <p class="mb-1"><strong>Étage :</strong> RDC</p>
                <p class="mb-0"><strong>Ascenseur :</strong> Non</p>
              </div>
            </div>
          </div>

          <div class="mb-4 p-3 border rounded bg-white">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h5 class="mb-0">Volume & objets</h5>
              <a href="creerAnnonce.php?step=3" class="btn btn-sm btn-outline-primary">
                Modifier
              </a>
            </div>
            <p class="mb-1"><strong>Volume estimé :</strong> 12 m³</p>
            <p class="mb-0"><strong>Objets principaux :</strong> lit, canapé, frigo, 20 cartons…</p>
            <div class="mb-2">
              <strong>Photos :</strong><br>
            </div>
          </div>
          

          <div class="d-flex justify-content-between">
            <a href="client.php" class="btn btn-outline-secondary">
              ← Retour à mes annonces
            </a>
          </div>

        </section>

      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include_once '../Visiteur/footer.php'; ?>
</body>
