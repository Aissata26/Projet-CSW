<?php 
include_once '../Visiteur/header.php';
include_once 'nav.php';
?>
<body class="background-A">
  <main class="container py-4">
    <div class="row">
      <h2 class="text-center text-light py-4">MES ANNONCES</h2>
    </div>

    <div class="card mb-3 bg-light shadow-sm">
      <div class="card-body">

        <h5 class="card-title fw-bold mb-2 d-flex justify-content-between align-items-center">
          <span>Déménagement Rouen → Paris</span>
          <span class="badge bg-primary">En ligne</span>
        </h5>
        <p class="card-text mb-2">
          <strong>Date :</strong> 15 mars 2025
          <span class="text-muted"> | Heure : 09h00</span>
        </p>
        <p class="card-text mb-1">
          <strong>Départ :</strong> Appartement, 3ᵉ étage, avec ascenseur – Rouen
        </p>
        <p class="card-text mb-1">
          <strong>Arrivée :</strong> Maison, RDC – Paris
        </p>
        <p class="card-text mb-2">
          <strong>Volume estimé :</strong> 12 m³
        </p>

        <p class="mb-0">
          <strong>1 proposition reçue</strong>
        </p>

        <div class="d-flex justify-content-end gap-2 border-top pt-3 mt-3">
          <a href="details_annonce.php" class="btn btn-outline-secondary btn-sm">Voir les détails</a>
          <a href="#" class="btn btn-outline-danger btn-sm">Supprimer</a>
        </div>

        <div class="mt-3">
          <a class="btn btn-link p-0" data-bs-toggle="collapse" href="#props-1" role="button"
             aria-expanded="false" aria-controls="props-1">
            ▼ Voir les propositions des déménageurs
          </a>
        </div>

        <div class="collapse mt-2" id="props-1">
          <div class="card border-0 bg-light">
            <div class="card-body">

              <div class="border rounded-3 p-3 mb-3">
                <div class="d-flex justify-content-between flex-wrap">
                  <div class="me-3">
                    <div class="fw-semibold">
                      Déménageur Express — <strong>280 €</strong>
                    </div>
                    <div class="text-muted small">
                      Camion 20 m³, 2 personnes. Expérience : 4 ans.
                    </div>
                  </div>

                  <div class="d-flex flex-column flex-md-row gap-2 mt-2 mt-md-0">
                    <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#chatDem1">
                      Discuter / Questions
                    </button>
                    <button class="btn btn-success btn-sm">Accepter</button>
                    <button class="btn btn-outline-danger btn-sm">Refuser</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

  </main>

<div class="modal fade" id="chatDem1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header text-white" style="background: linear-gradient(to right, #0A1A39, #06177aff); box-shadow: 0 2px 6px rgba(0,0,0,0.4);">
        <h5 class="modal-title">Discussion avec “Déménageur Express”</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="d-flex mb-3">
          <div class="me-2">
            <span class="bg-secondary text-white rounded-circle d-inline-flex justify-content-center align-items-center" style="width:40px;height:40px;">
              D
            </span>
          </div>
          <div class="p-3 rounded bg-light border">
            <div class="fw-bold small">Déménageur</div>
            Bonjour, y a-t-il des objets très fragiles (téléviseur, vitrine…) ?
          </div>
        </div>

        <div class="d-flex justify-content-end mb-3">
          <div class="p-3 rounded text-white me-2" style="background: linear-gradient(to right, #0A1A39, #123A75); box-shadow: 0 2px 6px rgba(0,0,0,0.4); max-width:75%;">
            <div class="fw-bold small">Vous</div>
            Oui, il y a une télévision et une table en verre.
          </div>
          <div>
            <span class="bg-dark text-white rounded-circle d-inline-flex justify-content-center align-items-center" style="width:40px;height:40px;">
              V
            </span>
          </div>
        </div>

        <hr>

        <form>
          <label class="form-label fw-semibold">Votre message</label>
          <textarea class="form-control mb-2" rows="2" placeholder="Écrivez votre message..."></textarea>

          <div class="text-end">
            <button type="submit"class="btn text-white" style="background: linear-gradient(to right, #0A1A39, #123A75);box-shadow: 0 2px 6px rgba(0,0,0,0.4);">
              Envoyer
            </button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include_once '../Visiteur/footer.php'; ?>
