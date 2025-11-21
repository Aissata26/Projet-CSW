<?php 
include_once '../Visiteur/header.php';
include_once 'nav1.php';
?>
<body class="background-A">

<main class="container py-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-8">
      <div class="card shadow-sm border-0 rounded-4 overflow-hidden bg-light">

        <div class="text-center py-4"
             style="background: linear-gradient(135deg,#0A1A39,#123A75); color:white;">
          <h4 class="fw-bold mb-1">Modifier mon profil déménageur</h4>
          <p class="mb-0" style="opacity:0.9;">Mettez à jour vos informations</p>
        </div>

        <div class="p-4">
          <form method="post" action="#">

            <div class="mb-3">
              <label class="form-label">Prénom</label>
              <input type="text" class="form-control" name="prenom" value="Aissata">
            </div>

            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom" value="Diallo">
            </div>

            <div class="mb-3">
              <label class="form-label">Adresse email</label>
              <input type="email" class="form-control" name="email" value="demenageur@example.com">
            </div>

            <div class="mb-3">
              <label class="form-label">Téléphone</label>
              <input type="text" class="form-control" name="telephone" value="06 00 00 00 00">
            </div>

            <div class="mb-3">
              <label class="form-label">Date de naissance</label>
              <input type="date" class="form-control" name="date_naissance" value="2000-01-01">
            </div>

            <hr class="my-4">

            <div class="d-flex flex-column flex-md-row gap-2 mb-3">
              <button type="submit" class="btn btn-primary btn-sm flex-fill" style="border-radius:30px;">
                Enregistrer
              </button>

              <a href="profil.php" class="btn btn-outline-secondary btn-sm flex-fill" style="border-radius:30px;">
                Annuler
              </a>
            </div>

            <a href="profil.php" class="btn btn-link btn-sm p-0">
              ← Retour au profil
            </a>

          </form>
        </div>

      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include_once '../Visiteur/footer.php'; ?>
