<?php 
include_once '../Visiteur/header.php';
include_once 'nav.php';
?>
<body class="background-A">
  <main class="container py-4">
    <div class="row">
      <h2 class="text-center text-light py-4">MON PROFIL</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-4">
              <img src="https://via.placeholder.com/88x88.png?text=👤" alt="Avatar"
                   class="rounded-circle me-3" width="88" height="88">
              <div>
                <h5 class="mb-1">Aïssata Adama Diallo</h5>
                <span class="badge bg-primary">Client vérifié</span>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6">
                <label class="form-label text-muted small m-0">Email</label>
                <p class="mb-0">aissata@example.com</p>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label text-muted small m-0">Téléphone</label>
                <p class="mb-0">06 35 44 57 42</p>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label text-muted small m-0">Ville</label>
                <p class="mb-0">Rouen, France</p>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label text-muted small m-0">Membre depuis</label>
                <p class="mb-0">Septembre 2024</p>
              </div>
            </div>

            <div class="d-flex flex-wrap gap-2 border-top pt-3 mt-4">
              <a href="#" class="btn btn-outline-primary">Modifier</a>
              <a href="#" class="btn btn-outline-secondary">Changer le mot de passe</a>
              <a href="#" class="btn btn-outline-danger ms-auto">Supprimer le compte</a>
            </div>
          </div>
        </div>

        <!-- Optionnel : bloc préférences notifications (lecture seule pour l'instant) -->
        <div class="card shadow-sm mt-3">
          <div class="card-body">
            <h6 class="mb-3">Préférences</h6>
            <div class="d-flex flex-column gap-2">
              <div><span class="badge bg-success me-2">Activé</span> Notifications email pour nouvelles propositions</div>
              <div><span class="badge bg-success me-2">Activé</span> Rappels la veille du déménagement</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <?php include_once '../Visiteur/footer.php'; ?>
</body>
