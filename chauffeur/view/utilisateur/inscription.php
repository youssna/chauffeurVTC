<main>
  <div class="form-card">
    <h2>Créer un compte</h2>

    <form action="controller/utilisateur/utilisateurController.php" method="POST">
      <label for="nom">Nom :</label>
      <input type="text" name="nom" id="nom" required>

      <label for="prenom">Prénom :</label>
      <input type="text" name="prenom" id="prenom" required>

      <label for="email">Email :</label>
      <input type="email" name="email" id="email" required>

      <label for="motdepasse">Mot de passe :</label>
      <input type="password" name="motdepasse" id="motdepasse" required>

      <button type="submit" class="btn-submit">S'inscrire</button>

      <p style="text-align:center; color: var(--text-muted); margin-top: 10px;">
  Déjà inscrit ? <a href="index.php?page=connexion" style="color: var(--accent); text-decoration:none;">Connectez-vous</a>
</p>
    </form>
  </div>
</main>