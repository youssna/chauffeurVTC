<?php include('controller/vehicule/selectVehicule.php'); ?>

<main>
  <h2>Liste des véhicules</h2>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Modèle</th>
          <th>Immatriculation</th>
          <th>Couleur</th>
          <th>Nb places</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($allVehicule)): ?>
          <?php foreach ($allVehicule as $vehicule): ?>
            <tr>
              <td><?= htmlspecialchars($vehicule->ID); ?></td>
              <td><?= htmlspecialchars($vehicule->model); ?></td>
              <td><?= htmlspecialchars($vehicule->immatriculation); ?></td>
              <td><?= htmlspecialchars($vehicule->couleur); ?></td>
              <td><?= htmlspecialchars($vehicule->nbplace); ?></td>
              <td>
                <a href="controller/vehicule/supprimerVehicule.php?id=<?= $vehicule->ID; ?>"
                   class="btn-delete">
                   Supprimer
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="6" style="text-align:center;">Aucun véhicule trouvé</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</main>