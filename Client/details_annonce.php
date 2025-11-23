<?php 
include_once '../Visiteur/header.php';
include_once 'nav1.php';
include_once '../fonction.php';
$annonce=get_annonces();
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
              <h4 class="mb-1"><?php echo($annonce['titreannonce']);?></h4>
              <p class="mb-0 text-muted"></strong> <?php echo($annonce['date_creation']);?> • <?php echo($annonce['heur']);?></p>
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
            <p class="mb-1"><strong>Titre :</strong><?php echo($annonce['titreannonce']);?></p>
            <p class="mb-1"><strong>Description :</strong> <?php echo($annonce['description']);?></p>
            <p class="mb-1"><strong>Nombre de déménageurs souhaités :</strong> <?php echo($annonce['nombrededemenagement']);?></p>
            <p class="mb-1"><strong>Date :</strong> </strong> <?php echo($annonce['date_creation']);?></p>
            <p class="mb-0"><strong>Heure du déménagement :</strong> <?php echo($annonce['heur']);?></p>
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
                <p class="mb-1"><strong>Ville :</strong> <?php echo($annonce['ville_depart']);?></p>
                <p class="mb-1"><strong>Adresse :</strong> <?php echo($annonce['adresse_depart']);?></p>
                <p class="mb-1"><strong>Type de logement :</strong> <?php echo($annonce['type_logement_depart']);?></p>
                <p class="mb-1"><strong>Étage :</strong> <?php echo($annonce['etage_depart']);?>ᵉ</p>
                <p class="mb-0"><strong>Ascenseur :</strong> <?php echo($annonce['Ascenseur_depart']);?></p>
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
                <p class="mb-1"><strong>Ville :</strong> <?php echo($annonce['ville_arrivee']);?></p>
                <p class="mb-1"><strong>Adresse :</strong>  <?php echo($annonce['address_arrivee']);?></p>
                <p class="mb-1"><strong>Type de logement :</strong> <?php echo($annonce['type_logement_arrivee']);?></p>
                <p class="mb-1"><strong>Étage :</strong> <?php echo($annonce['etage_arrivee']);?></p>
                <p class="mb-0"><strong>Ascenseur :</strong> <?php echo($annonce['ascenseur_arrivee']);?></p>
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
            <p class="mb-1"><strong>Volume estimé :</strong> <?php echo($annonce['volume']);?> m³</p>
            <p class="mb-0"><strong>Objets principaux :</strong> <?php echo($annonce['objets_principaux']);?></p>
            <div class="mb-2">
              <strong>Photos :</strong><br>
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

 <div class="carousel-inner">
    <?php 
    $photos = get_photo();  
    $i = 0;

    foreach ($photos as $photo) {
        $active = ($i === 0) ? "active" : "";
        ?>
        
        <div class="carousel-item <?php echo $active; ?>">
            <img src="<?php echo $photo['url']; ?>" class="d-block w-100" alt="photo">
        </div>

        <?php
        $i++;
    }
    ?>
</div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
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
</body>
<?php include_once '../Visiteur/footer.php'; 
?>
