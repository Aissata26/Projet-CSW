<?php 
include_once 'header.php';
?>
<body>
    <header>
        <?php include_once 'nav.php'; ?>
    </header>

    <main class="background-A">
        <section class="text-light">
            <div class="container">
                <div class="row py-5 align-items-center">
                    <div class="col-md-6 py-2">
                        <h1 class="fs-1 fw-bolder text-light mb-3">
                            DÉMÉNAGEZ EN TOUTE CONFIANCE
                        </h1>
                        <p class="fs-6 text-light mb-4" style="max-width: 420px;">
                            Trouvez des déménageurs de confiance, comparez les offres
                            et organisez votre déménagement en quelques clics.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-lg px-4 text-light" style="border-radius: 999px; border: none; background: linear-gradient(135deg,#3b82f6,#1d4ed8); box-shadow: 0 4px 12px rgba(15,23,42,0.4);">
                                Créer une annonce
                            </a>

                            <a href="#" class="btn btn-lg px-4 text-light" style="border-radius: 999px; border: 1px solid #22c55e; background: rgba(15,23,42,0.4);">
                                Voir les annonces
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 py-4 text-center"><img src="../photo/photoc.png" alt="photo de camion" class="img-fluid" style="max-height: 320px;"></div>
                </div>
            </div>
        </section>
        <section class="p-4">
            <div class="container text-light bg rounded-4 shadow-sm">
                <div class="row">
                    <h2 class="text-center my-4">Comment ça marche</h2>
                </div>

                <div class="row text-center">

                    <div class="col-12 col-md-4 mb-4">
                        <div class="mb-3">
                            <img src="../photo/photoa.png" alt="message">
                        </div>
                        <p class="fw-semibold mb-1">1. Créez une annonce</p>
                        <p class="mb-0">Définissez la date, le trajet et le type de logement.</p>
                    </div>

                    <div class="col-12 col-md-4 mb-4">
                        <div class="mb-3">
                            <img src="../photo/photob.png" alt="proposition">
                        </div>
                        <p class="fw-semibold mb-1">2. Recevez des propositions</p>
                        <p class="mb-0">Les déménageurs vous envoient leurs prix et services.</p>
                    </div>

                    <div class="col-12 col-md-4 mb-4">
                        <div class="mb-3">
                            <img src="../photo/photof.png" alt="validation">
                        </div>
                        <p class="fw-semibold mb-1">3. Choisissez vos déménageurs</p>
                        <p class="mb-0">Discutez, validez et déménagez en toute sérénité.</p>
                    </div>

                </div>
            </div>
        </section>
        <section class="py-4">
            <div class="container text-light">
                <div class="row">
                    <h2 class="text-center py-4">ANNONCES RÉCENTES</h2>
                </div>

                <div class="row text-light">
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card bg my-3 w-100 h-100 border-0 rounded-4 shadow-sm">
                            <div class="card-body d-flex flex-column">

                                <h5 class="card-title fw-bolder fs-4 mb-2">
                                    Déménagement Paris → Lyon
                                </h5>

                                <p class="card-text mb-1">
                                    <strong>Date :</strong> 15 octobre 2025
                                    <span class="text-muted">
                                        | <strong>Heure :</strong> 09h00
                                    </span>
                                </p>
                                <p class="card-text mb-1">
                                    <strong>Départ :</strong>
                                    Appartement, 3ᵉ étage, avec ascenseur – Paris
                                </p>
                                <p class="card-text mb-1">
                                    <strong>Arrivée :</strong>
                                    Appartement, 2ᵉ étage – Lyon
                                </p>
                                <p class="card-text mb-3">
                                    <strong>Volume estimé :</strong> 18 m³
                                </p>

                                <div class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                    <p class="card-text mb-0 text-muted small">
                                        Publiée le 20/09/2025
                                    </p>
                                    <a href="#" class="btn btn-sm px-3 text-light" style=" border-radius: 999px; border: none; background: linear-gradient(135deg,#22c55e,#16a34a);  ">
                                        Voir les détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card bg my-3 w-100 h-100 border-0 rounded-4 shadow-sm">
                            <div class="card-body d-flex flex-column">

                                <h5 class="card-title fw-bolder fs-4 mb-2">
                                    Déménagement Marseille → Nice
                                </h5>

                                <p class="card-text mb-1">
                                    <strong>Date :</strong> 20 octobre 2025
                                    <span class="text-muted">
                                        | <strong>Heure :</strong> 14h00
                                    </span>
                                </p>
                                <p class="card-text mb-1">
                                    <strong>Départ :</strong>
                                    Studio, 2ᵉ étage, sans ascenseur – Marseille
                                </p>
                                <p class="card-text mb-1">
                                    <strong>Arrivée :</strong>
                                    Studio, 1ᵉʳ étage – Nice
                                </p>
                                <p class="card-text mb-3">
                                    <strong>Volume estimé :</strong> 8 m³
                                </p>

                                <div class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                    <p class="card-text mb-0 text-muted small">
                                        Publiée le 21/09/2025
                                    </p>
                                    <a href="#" class="btn btn-sm px-3 text-light" style=" border-radius: 999px; border: none; background: linear-gradient(135deg,#22c55e,#16a34a);">
                                        Voir les détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex">
                        <div class="card bg my-3 w-100 h-100 border-0 rounded-4 shadow-sm">
                            <div class="card-body d-flex flex-column">

                                <h5 class="card-title fw-bolder fs-4 mb-2">
                                    Déménagement Bordeaux → Toulouse
                                </h5>

                                <p class="card-text mb-1">
                                    <strong>Date :</strong> 1ᵉʳ octobre 2025
                                    <span class="text-muted">
                                        | <strong>Heure :</strong> 08h30
                                    </span>
                                </p>
                                <p class="card-text mb-1">
                                    <strong>Départ :</strong>
                                    Maison 4 pièces – Bordeaux
                                </p>
                                <p class="card-text mb-1">
                                    <strong>Arrivée :</strong>
                                    Maison, RDC – Toulouse
                                </p>
                                <p class="card-text mb-3">
                                    <strong>Volume estimé :</strong> 25 m³
                                </p>

                                <div class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                    <p class="card-text mb-0 text-muted small">
                                        Publiée le 21/09/2025
                                    </p>
                                    <a href="#" class="btn btn-sm px-3 text-light" style=" border-radius: 999px; border: none; background: linear-gradient(135deg,#22c55e,#16a34a); ">
                                        Voir les détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a href="#" class="btn btn-primary my-4 px-4 py-2" style="border-radius: 999px;">
                            Voir toutes les annonces
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>     
</body>
<?php include_once 'footer.php'; ?> 
