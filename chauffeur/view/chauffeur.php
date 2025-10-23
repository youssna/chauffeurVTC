<?php include('controller/chauffeur/selectChauffeur.php'); ?>

<main>
  <h2>Liste des chauffeurs</h2>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Âge</th>
          <th>Expérience (ans)</th>
          <th>Disponibilité</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($allChauffeur)): ?>
          <?php foreach ($allChauffeur as $chauffeur): ?>
            <tr>
              <td><?= htmlspecialchars($chauffeur['id']); ?></td>
              <td><?= htmlspecialchars($chauffeur['nom']); ?></td>
              <td><?= htmlspecialchars($chauffeur['prenom']); ?></td>
              <td><?= htmlspecialchars($chauffeur['age']); ?></td>
              <td><?= htmlspecialchars($chauffeur['experience']); ?></td>
              <td><?= htmlspecialchars($chauffeur['disponible']); ?></td>
              <td>
                <a 
                  href="controller/chauffeur/supprimerChauffeur.php?id=<?= urlencode($chauffeur['id']); ?>" 
                  class="btn-delete">
                  Supprimer
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="7" style="text-align:center;">Aucun chauffeur trouvé</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</main>