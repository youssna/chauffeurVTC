<main>
  <div class="form-card">
    <h2>Ajouter un Chauffeur</h2>

    <form action="controller/chauffeur/chauffeurController.php" method="POST">
      <label for="nom">Nom :</label>
      <input type="text" name="nom" id="nom" required>

      <label for="prenom">Prénom :</label>
      <input type="text" name="prenom" id="prenom" required>

      <label for="age">Âge :</label>
      <input type="number" name="age" id="age" min="18" required>

      <label for="experience">Expérience (années) :</label>
      <input type="number" name="experience" id="experience" min="0" required>

      <label for="disponibilite">Disponible :</label>
      <select name="disponibilite" id="disponibilite" required>
        <option value="oui">Oui</option>
        <option value="non">Non</option>
      </select>

      <input type="hidden" name="action" value="ajouter">
      <button type="submit" class="btn-submit">Ajouter le chauffeur</button>
    </form>
  </div>
</main>