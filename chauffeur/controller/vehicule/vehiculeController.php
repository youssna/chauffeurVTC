<?php
include('../../bdd/bdd.php');
include('../../modele/vehicule/vehiculeModel.php');

if (
    !empty($_POST['model']) &&
    !empty($_POST['immatriculation']) &&
    !empty($_POST['couleur']) &&
    !empty($_POST['nbplace'])
) {
    // Instanciation de la classe Vehicule
    $vehicule = new Vehicule($bdd);


    $vehicule->ajouterVehicule(
        $_POST['model'],
        $_POST['immatriculation'],
        $_POST['couleur'],
        $_POST['nbplace']
    );


    header('Location: ../../index.php?page=vehicule');
    exit;
} 
?>