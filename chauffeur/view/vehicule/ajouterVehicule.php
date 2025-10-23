<main>
  <div class="form-card">
    <h2>Ajouter un Véhicule</h2>

    <form action="controller/vehicule/vehiculeController.php" method="POST">
      <label for="model">Modèle :</label>
      <input type="text" name="model" id="model" required>

      <label for="immatriculation">Immatriculation :</label>
      <input type="text" name="immatriculation" id="immatriculation" required>

      <label for="couleur">Couleur :</label>
      <input type="text" name="couleur" id="couleur" required>

      <label for="nbplace">Nombre de places :</label>
      <input type="number" name="nbplace" id="nbplace" min="1" required>

      <button type="submit" class="btn-submit">Ajouter le véhicule</button>
    </form>
  </div>
</main>