<?php 
session_start();
include_once '../Visiteur/header.php';
include_once 'nav1.php';
echo $_SESSION['id_ann'];
include_once '../fonction.php';
$annonce=get_annonce();
$an=null;
foreach($annonce as $ann)
{
  if($ann['id']=$_SESSION['id_ann'])
  {
    $an=$ann;
    
    break;

  }
}
?>
<body class="background-A">

<main class="container py-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-9">

      <div class="bg-light rounded py-3 px-3 mb-4 shadow-sm">
        <h2 class="text-center fw-semibold text-uppercase mb-1">
          Détail de l’annonce
        </h2>
        <p class="text-center text-muted mb-0">
          Récapitulatif du déménagement et proposition de prix
        </p>
      </div>

      <div class="row g-3">
        <div class="col-12 col-lg-6">
          <div class="card shadow-sm h-100 bg-light">
            <div class="card-body">

              <h5 class="fw-bold mb-2 d-flex justify-content-between align-items-center">
                <span><?php echo($an['titreannonce']);?></span>
                <span class="badge bg-primary">Disponible</span>
              </h5>

              <p class="mb-2">
                <strong>Date :</strong> <?php echo($an['date_creation']);?>
                <span class="text-muted"> | Heure : <?php echo($an['heur']);?></span>
              </p>

              <p class="mb-2">
                <strong>Description :</strong> <?php echo($an['description']);?>
              </p>

              <p class="mb-3">
                <strong>Nombre de déménageurs souhaités :</strong> <?php echo($an['nombrededemenagement']);?>
              </p>

              <hr class="my-3">

              <h6 class="fw-semibold mb-2">Départ</h6>
              <p class="mb-1"><strong>Ville :</strong> <?php echo($an['ville_depart']);?></p>
              <p class="mb-1"><strong>Adresse :</strong> <?php echo($an['adresse_depart']);?></p>
              <p class="mb-1"><strong>Type :</strong> <?php echo($an['type_logement_depart']);?></p>
              <p class="mb-1"><strong>Étage :</strong> <?php echo($an['etage_depart']);?>ᵉ</p>
              <p class="mb-3"><strong>Ascenseur :</strong> <?php echo($an['Ascenseur_depart']);?></p>

              <hr class="my-3">

              <h6 class="fw-semibold mb-2">Arrivée</h6>
              <p class="mb-1"><strong>Ville :</strong> <?php echo($an['ville_arrivee']);?></p>
              <p class="mb-1"><strong>Adresse :</strong> <?php echo($an['address_arrivee']);?></p>
              <p class="mb-1"><strong>Type :</strong> <?php echo($an['type_logement_arrivee']);?></p>
              <p class="mb-1"><strong>Étage :</strong> <?php echo($an['etage_arrivee']);?></p>
              <p class="mb-3"><strong>Ascenseur :</strong> <?php echo($an['ascenseur_arrivee']);?></p>

              <hr class="my-3">

              <h6 class="fw-semibold mb-2">Volume & objets</h6>
              <p class="mb-1"><strong>Volume estimé :</strong> <?php echo($an['volume']);?>m³</p>
              <p class="mb-0">
                <strong>Objets principaux :</strong> <?php echo($an['objets_principaux']);?>
              </p>

            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="card shadow-sm h-100 bg-light">
            <div class="card-body d-flex flex-column">

              <h5 class="fw-bold mb-3">Votre proposition</h5>

              <form class="w-100 mb-3" action="../fonction.php" method="POST">

                <div class="mb-3">
                  <label class="form-label">Montant proposé (€)</label>
                  <input  type="number" name="prix"  class="form-control" placeholder="Ex : 280">
                </div>

                <div class="mb-3">
                  <label class="form-label">Message pour le client</label>
                  <textarea class="form-control" name="message" rows="3" splaceholder="Ex : Je viens avec un camion 20 m³ et deux déménageurs."></textarea>
                </div>

                <div class="d-flex flex-column flex-md-row gap-2 mt-3">
                  <button type="submit" id="proposition"name="proposition"class="btn btn-primary btn-sm flex-fill">
                    Envoyer la proposition
                  </button>
                </div>

              </form>

              <p class="text-muted small mb-0 text-center">
                Vous pourrez échanger avec le client depuis la page “Mes déménagements”.
              </p>

            </div>
          </div>
        </div>

      </div>

      <div class="mt-3">
        <a href="annonces_disponibles.php" class="btn btn-link btn-sm p-0 text-light">
          ← Retour aux annonces disponibles
        </a>
      </div>

    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  let var=document.getElementById('')
</script>

</body>

<?php include_once '../Visiteur/footer.php'; ?>