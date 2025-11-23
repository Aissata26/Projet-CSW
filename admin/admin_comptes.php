<?php 
include_once '../Visiteur/header.php';
include_once 'nav.php';
?>
<body class="background-A">

<main class="container py-4">

  <div class="row">
    <h2 class="text-center text-light py-4">Gestion des comptes</h2>
  </div>

  <div class="row justify-content-center">
    <div class="col-12 col-lg-10">

      <section class="bg-light p-4 rounded shadow-sm mb-4">

        <p class="text-muted small mb-3">
          Vous pouvez désactiver ou réactiver les comptes des clients et des déménageurs.
        </p>

        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Rôle</th>
                <th>Email</th>
                <th>Statut</th>
                <th class="text-end">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Aissata Diallo</td>
                <td><span class="badge bg-secondary">Client</span></td>
                <td>aissata@example.com</td>
                <td><span class="badge bg-success">Actif</span></td>
                <td class="text-end">
                  <form method="post" action="../fonction.php" class="d-inline m-0">
                    <input type="hidden" name="user_id" value="10">
                    <button type="submit"
                            name="admin_desactiver_compte"
                            class="btn btn-outline-danger btn-sm"
                            style="border-radius:30px;">
                      Désactiver
                    </button>
                  </form>
                </td>
              </tr>

              <tr>
                <td>Déménageur Express</td>
                <td><span class="badge bg-info text-dark">Déménageur</span></td>
                <td>demenageur@example.com</td>
                <td><span class="badge bg-danger">Désactivé</span></td>
                <td class="text-end">
                  <form method="post" action="../fonction.php" class="d-inline m-0">
                    <input type="hidden" name="user_id" value="20">
                    <button type="submit" name="admin_reactiver_compte" class="btn btn-outline-success btn-sm" style="border-radius:30px;">
                      Réactiver
                    </button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </section>

    </div>
  </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include_once '../Visiteur/footer.php'; ?>
</body>
