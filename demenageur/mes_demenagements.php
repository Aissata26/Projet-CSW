<?php 
session_start();
include_once '../Visiteur/header.php';
include_once 'nav1.php';
include_once '../fonction.php';
?>
<body class="background-A">

<main class="container py-4">

  <div class="row">
    <h2 class="text-center text-light py-4">MES DÉMÉNAGEMENTS</h2>
  </div>
  <?php if(isset($_SESSION['proposition'])){?>

  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-9">

      <div class="card mb-4 shadow-sm bg-light">
        <div class="card-body">

          <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h5 class="fw-bold mb-1">
              Déménagement Rouen → Paris
            </h5>

            <span class="badge bg-warning text-dark px-3 py-2">
              À confirmer
            </span>
          </div>

          <p class="mb-2 mt-2">
            <strong>Date :</strong> 15 mars 2025
            <span class="text-muted"> | Heure : 09h00</span>
          </p>

          <p class="mb-1">
            <strong>Départ :</strong> Appartement, 3ᵉ étage, avec ascenseur – Rouen
          </p>

          <p class="mb-1">
            <strong>Arrivée :</strong> Maison, RDC – Paris
          </p>

          <p class="mb-3">
            <strong>Votre prix proposé :</strong> 280 €
          </p>

          <hr>

          <div class="text-end">
            <button  class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#chatClient1">
              Discuter avec le client
            </button>
          </div>

        </div>
      </div>

    </div>
  </div>
  <?php }?>

</main>

<div class="modal fade" id="chatClient1" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header text-white" style="background: linear-gradient(to right, #0A1A39, #123A75);">
        <h5 class="modal-title">
          Discussion avec le client
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="d-flex mb-3">
          <div class="me-2">
            <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center" style="width:40px;height:40px;">
              C
            </div>
          </div>

          <div class="p-3 bg-light border rounded">
            Bonjour, pouvez-vous confirmer la disponibilité ?
          </div>
        </div>

        <div class="d-flex justify-content-end mb-3">
          <div class="p-3 text-white rounded" style="background: linear-gradient(to right, #0A1A39, #123A75); max-width:75%;">
            Oui, je suis bien disponible à cette date.
          </div>

          <div class="ms-2">
            <div class="rounded-circle bg-dark text-white d-flex justify-content-center align-items-center" style="width:40px;height:40px;">
              D
            </div>
          </div>
        </div>

        <hr>

        <form>
          <textarea class="form-control mb-2" rows="2"
                    placeholder="Écrivez votre message..."></textarea>

          <div class="text-end">
            <button type="submit" class="btn text-white" style="background: linear-gradient(to right, #0A1A39, #123A75);">
              Envoyer
            </button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

<?php include_once '../Visiteur/footer.php'; ?>
