<?php 
include_once '../Visiteur/header.php';
include_once 'nav1.php';
?>
<body class="background-A">

<main class="container py-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <div class="card shadow-sm border-0 rounded-4 overflow-hidden bg-light">

        <div class="text-center py-4"
             style="background: linear-gradient(135deg,#0A1A39,#123A75); color:white;">
          <h4 class="fw-bold mb-1">Modifier mon mot de passe</h4>
          <p class="mb-0" style="opacity:0.9;">
            Sécurisez votre compte déménageur MoveUP
          </p>
        </div>

        <div class="p-4">
          <form method="post" action="#">

            <div class="mb-3">
              <label for="mdp_actuel" class="form-label">Mot de passe actuel</label>
              <input type="password" class="form-control" id="mdp_actuel" name="mdp_actuel" placeholder="Entrez votre mot de passe actuel">
            </div>

            <div class="mb-3">
              <label for="nouveau_mdp" class="form-label">Nouveau mot de passe</label>
              <input type="password" class="form-control" id="nouveau_mdp" name="nouveau_mdp" placeholder="Entrez un nouveau mot de passe">
            </div>

            <div class="mb-3">
              <label for="confirmer_mdp" class="form-label">Confirmer le nouveau mot de passe</label>
              <input type="password" class="form-control" id="confirmer_mdp" name="confirmer_mdp" placeholder="Confirmez le nouveau mot de passe">
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
