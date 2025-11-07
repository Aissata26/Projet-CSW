<?php 
include_once 'header.php';
?>
<body>
    <header>
        <?php
        include_once 'nav.php'
        ?>
    </header>
    <main>
        <section class="background text-light">
            <div class="container justify-content-center align-items-center">
                <div class="row py-5">
                    <div class="col-md-6 py-2">        
                        <h1 class="fs-1 fw-bolder text-light">DÉMÉNAGEZ EN TOUTE CONFIANCE</h1>
                        <P class="fs-6 text-light">Trouvez les meilleurs déménageurs près de chez vous.</p>
                        <div class="d-flex gap-3 flex-nowrap">
                            <a href="#" class="btn btn-outline-primary no-outline rounded-1 text-light btn-lg ">Créer une demande</a>
                            <a href="#" class="btn btn-outline-success no-outline rounded-1 text-light btn-lg px-5">Voir les offres</a>
                        </div>
                    </div>
                    <div class="col-md-6 py-4">
                        <img src="../photo/photoc.png" alt="photo de camion" class="img-fluid">
                    </div>
                </div>
            </dib>
        </section>
        <section class="background p-4">
            <div class="container text-light bg">
                <div class="row ">
                    <h2 class="text-center my-4">Comment ça mache</h2>
                </div>
                <div class="row ">
                    <div class="col-12 col-md-4">
                        <div class="text-center my-2">
                            <img src="photo/photoa.png" alt="message">
                        </div>
                        <p class="text-center">1.créez une annonce</p>
                        <p class="text-center">Définissez les détails de votre déménagement.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="text-center my-2">
                            <img src="../photo/photob.png" alt="proposition">
                        </div>
                        <p class="text-center">2.Recevez des propositions</p>
                        <p class="text-center">Comparez les offres des déménageurs.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="text-center my-2">
                            <img src="../photo/photof.png" alt="validation">
                        </div>
                        <p class="text-center">3.Choisissez vos déménageurs</p>
                        <p class="text-center">Sélectionnez des pesonnes de confiance.<p>
                    </div>
                </div>
            </div>
        </section>
        <section class="background py-4">
            <div class="container text-light ">
                <div class="row">
                    <h2 class="text-center py-4">ANNONCES RÉCENTES</h2>
                </div>
                <div class="row text-light">
                    <div class="col-12 col-lg-4">
                        <div class="card position-relative bg my-4">
                            <div class="card-body">
                                <div class="text-end">
                                    <p class="d-inline-block m-3 px-2 py-1 border border-3 border-primary bg-primary  transparent-bleu">Moyen T2/T3</p>
                                </div>
                                <div class="row">
                                    <h5 class="card-title fw-bolder fs-4">Paris-Lyon</h5>
                                    <p class="card-text">Date: 15 octobre 2025</p>
                                    <p class="card-text">Déménagement d'un T2 au 3e étage avec ascenceur</p>
                                    <div class="d-flex justify-content-between align-items-center border-top">
                                        <p class="card-text">Publié le 20/09/2025</p>
                                        <a href="#" class="btn btn-success d-inline-block m-3 px-1 border-3 border-success bg-success transparent-green">Voir les détails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card position-relative bg my-4">
                            <div class="card-body">
                                <div class="text-end">
                                    <p class="d-inline-block m-3 px-2 py-1 border border-3 border-primary bg-primary  transparent-bleu">Moyen T2/T3</p>
                                </div>
                                <div class="row">
                                    <h5 class="card-title fw-bolder fs-4">Marseille - Nice</h5>
                                    <p class="card-text">Date: 20 octobre 2025</p>
                                    <p class="card-text">studio au 2e étage sans ascenceur</p>
                                    <div class="d-flex justify-content-between align-items-center border-top">
                                        <p class="card-text">Publié le 21/09/2025</p>
                                        <a href="#" class="btn btn-success d-inline-block m-3 px-1 border-3 border-success bg-success transparent-green">Voir les détails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card position-relative bg my-4">
                            <div class="card-body">
                                <div class="text-end">
                                    <p class="d-inline-block m-3 px-2 py-1 border border-3 border-primary bg-primary  transparent-bleu">Moyen T2/T3</p>
                                </div>
                                <div class="row">
                                    <h5 class="card-title fw-bolder fs-4">Bordeaux - Toulouse</h5>
                                    <p class="card-text">Date: 1 octobre 2025</p>
                                    <p class="card-text">Maison 4 pièces avec beaucoup</p>
                                    <div class="d-flex justify-content-between align-items-center border-top">
                                        <p class="card-text">Publié le 21/09/2025</p>
                                        <a href="#" class="btn btn-success d-inline-block m-3 px-1 border-3 border-success bg-success transparent-green">Voir les détails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a href="#" class="btn btn-primary my-4 py-2">voire toutes les annonces</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once 'footer.php'?>
</body>
                    
        
