<?php 
include_once '../Visiteur/header.php';
include_once 'nav1.php';
$utilisateur=get_utilisateure();
?>
<body class="background-A">

<main class="container py-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">

      <section class="rounded-4 shadow-sm overflow-hidden bg-light">

        <!-- Bandeau haut -->
        <div class="px-4 py-3"
             style="background: linear-gradient(135deg, #0A1A39, #123A75); color:#fff;">
          <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div class="mb-2">
              <p class="mb-1 text-uppercase"
                 style="font-size:0.7rem;letter-spacing:1px;opacity:0.8;">
                Profil MOVE<span class="titre-color">UP</span> – <?php echo $utilisateur['role'];?>
              </p>
              <h2 class="mb-0 fw-bold" style="font-size:1.5rem;">
                <?php echo $utilisateur['prenom'];?> <?php echo $utilisateur['nom'];?>
              </h2>
              <p class="mb-1" style="font-size:0.9rem;opacity:0.9;">
                <?php echo $utilisateur['email'];?>
              </p>
            </div>

            <div class="mb-2 text-end">
              <div class="rounded-circle d-flex align-items-center justify-content-center ms-auto"
                   style="width:58px;height:58px;background:rgba(255,255,255,0.16);">
                <span class="fw-semibold" style="font-size:1rem;">AD</span>
              </div>
            </div>

          </div>
        </div>

        <!-- Contenu -->
        <div class="px-4 py-4">

          <h6 class="mb-1 fw-semibold">Informations personnelles</h6>
          <hr class="mt-2 mb-3">

          <div class="mb-3">
            <span class="text-muted small d-block">Nom</span>
            <span class="fw-semibold"><?php echo $utilisateur['nom'];?></span>
          </div>

          <div class="mb-3">
            <span class="text-muted small d-block">Prénom</span>
            <span class="fw-semibold"><?php echo $utilisateur['prenom'];?></span>
          </div>

          <div class="mb-3">
            <span class="text-muted small d-block">Date de naissance</span>
            <span class="fw-semibold"><?php echo $utilisateur['dateanniverssaire'];?></span>
          </div>

          <div class="mb-3">
            <span class="text-muted small d-block">Adresse email</span>
            <span class="fw-semibold"><?php echo $utilisateur['email'];?></span>
          </div>

          <div class="mb-3">
            <span class="text-muted small d-block">Catégorie</span>
            <span class="fw-semibold"><?php echo $utilisateur['role'];?></span>
          </div>

          <div class="mb-4">
            <span class="text-muted small d-block">Téléphone</span>
            <span class="fw-semibold"><?php echo $utilisateur['role'];?></span>
          </div>

          <hr class="my-4">

          <div class="d-flex flex-column flex-md-row gap-2 mb-3">
            <a href="modifierProfil.php"
               class="btn btn-primary btn-sm flex-fill"
               style="border-radius:30px;">
              Modifier mes informations
            </a>

            <a href="modifierMotDePasse.php"
               class="btn btn-outline-primary btn-sm flex-fill"
               style="border-radius:30px;">
              Modifier mon mot de passe
            </a>
          </div>

          <button type="button"
                  class="btn btn-outline-danger btn-sm w-100 mb-3"
                  style="border-radius:30px;">
            Supprimer mon compte
          </button>

          <a href="client.php"
             class="btn btn-link btn-sm p-0">
            ← Retour à mes annonces
          </a>

        </div>

      </section>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include_once '../Visiteur/footer.php'; ?>
