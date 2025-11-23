<?php 
session_start();
include_once '../Visiteur/header.php';
include_once 'nav .php';
include_once '../fonction.php';
$annonce=get_annonce();
$i=0;
?>
<body class="background-A">
<?php foreach($annonce as $ann){  $_SESSION['id_ann']=$ann['id']?>
<section class="container py-4">
  <div class="row">
    <?php if($i==0){?><h2 class="text-center text-light py-4">ANNONCES DISPONIBLES</h2> <?php $i++;}?>
  </div>

  <div class="card mb-3 bg-light shadow-sm">
    <div class="card-body">

      <h5 class="card-title fw-bold mb-2 d-flex justify-content-between align-items-center">
        <span><?php echo $ann['titreannonce'];?></span>
        <span class="badge bg-primary">Nouveau</span>
      </h5>

      <p class="card-text mb-1">
        <strong>Date :</strong> <?php echo($ann['date_creation']);?>
      </p>
      <p class="card-text mb-1">
        <strong>Départ :</strong> <?php echo($ann['ville_depart']);?>
      </p>
      <p class="card-text mb-1">
        <strong>Arrivée :</strong> <?php echo($ann['ville_arrivee']);?>
      </p>
      <p class="card-text mb-2">
        <strong>Volume estimé :</strong> <?php echo($ann['volume']);?>
      </p>
      
      <div class="d-flex justify-content-end border-top pt-3 mt-2">
        <a href="details_annonce.php?id=1" class="btn btn-primary btn-sm">
          Voir l’annonce / Proposer un prix
        </a>
      </div>
    </div>
  </div>
</section>
<?php }?>
</body>

<?php 
include_once '../Visiteur/footer.php';
?>
