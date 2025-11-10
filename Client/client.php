<?php 
include_once '../Visiteur/header.php';
include_once 'nav.php';
?>
<body class="background-A">
    <div class="row">
        <h2 class="text-center py-4 ">MES ANNONCES</h2>
    </div>
    <div class="card mb-3 shadow-sm bg-light">
        <div class="card-body">
            <h5 class="card-title fw-bolder mb-2">
                Déménagement Rouen -> Paris
            </h5>
            <p class="card-text mb-2">
                Date: 15 mars 2025
                <span class="text-muted"> 
                    | Statut : En ligne
                </span>
            </p>
            <p class="mb-0">3 propositions reçues</p>
            <div class="d-flex justify-content-end gap-2 border-top pt-3 mt-3">
                <a href="#" class="btn btn-outline-secondary btn-sm">Voir les détails</a>
                <a href="#" class="btn btn-outline-primary btn-sm">Modifier</a>
                <a href="#" class="btn btn-outline-danger btn-sm">Supprimer</a>
            </div>
            <p class="mt-3 text-center">
                <a class="btn btn-link p-0 " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Voir les propositions
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        

                    </div>
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
               </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
</body>
<?php 
include_once '../Visiteur/footer.php';
?>