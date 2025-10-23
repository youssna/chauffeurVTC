<?php
include('../../bdd/bdd.php');
include('../../modele/utilisateur/utilisateurModel.php');

if (
    !empty($_POST['nom']) &&
    !empty($_POST['prenom']) &&
    !empty($_POST['email']) &&
    !empty($_POST['motdepasse'])
) {
    $utilisateur = new Utilisateur($bdd);
    $utilisateur->ajouterUtilisateur(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['motdepasse']
    );

    header('Location: ../../index.php?page=connexion');
    exit;
} else {
    echo "⚠️ Tous les champs sont obligatoires.";
}
?>