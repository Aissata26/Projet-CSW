<?php 
include_once '../Visiteur/header.php';
include_once 'nav1.php';
?>
<body class="background-A">

<main class="container py-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-7">

      <section class="rounded-4 shadow-lg overflow-hidden bg-light">

        <div class="px-4 py-3 background-C text-white d-flex justify-content-between align-items-center">
          <div>
            <h3 class="mb-1">Mon profil</h3>
            <p class="mb-0" style="font-size:0.85rem;">
              Informations de votre compte Move<span class="titre-color">UP</span>.
            </p>
          </div>

          <div class="rounded-circle d-flex align-items-center justify-content-center"
               style="width:48px;height:48px;background-color:rgba(255,255,255,0.18);">
            <span class="fw-bold fs-6 text-white">AD</span>
          </div>
        </div>

        <div class="px-4 py-4">

          <div class="mb-4 p-3 border rounded bg-white">

            <p class="mb-2"><strong>Nom complet :</strong><br> Aissata Diallo</p>
            <p class="mb-2"><strong>Email :</strong><br> aissata@example.com</p>
            <p class="mb-2"><strong>Téléphone :</strong><br> 06 00 00 00 00</p>
            <p class="mb-0"><strong>Date de naissance :</strong><br> 01/01/2000</p>

          </div>

          <div class="d-flex flex-column flex-md-row gap-2 mb-3">

            <a href="modifierProfil.php" class="btn btn-primary btn-sm flex-fill">
              Modifier profil
            </a>

            <a href="modifierMotDePasse.php" class="btn btn-outline-primary btn-sm flex-fill">
              Mot de passe
            </a>

          </div>

          <button type="button" class="btn btn-outline-danger btn-sm w-100 mb-3"">
            Supprimer mon compte
          </button>

          <a href="client.php" class="btn btn-outline-secondary btn-sm">
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
