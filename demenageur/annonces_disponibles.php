<?php 
include_once '../Visiteur/header.php';
include_once 'nav .php';
?>
<body class="background-A">
  <main class="container py-4">
    <div class="row">
      <h2 class="text-center text-light py-4">ANNONCES DISPONIBLES</h2>
    </div>
    <div class="card mb-3 bg-light">
      <div class="card-body">
        <h5 class="card-title fw-bold mb-2">
            Déménagement Rouen → Paris
        </h5>
        <p class="card-text mb-1">
            <strong>Date :</strong> 15 mars 2025
        </p>
        <p class="card-text mb-1">
            <strong>Départ :</strong> Appartement, 3ᵉ étage, avec ascenseur – Rouen
        </p>
        <p class="card-text mb-2">
            <strong>Arrivée :</strong> Maison, RDC – Paris
        </p>
        <p class="card-text mb-3">
            <strong>Volume estimé :</strong> 12 m³
        </p>
        <div class="d-flex justify-content-end border-top pt-3 mt-2">
            <a href="details_annonce.php?id=1" class="btn btn-primary btn-sm">
                Voir / Proposer un prix
            </a>
        </div>
      </div>
    </div>
  </main>
</body>
<?php 
include_once '../Visiteur/footer.php';
?>
