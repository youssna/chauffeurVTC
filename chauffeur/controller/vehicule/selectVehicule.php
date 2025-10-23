<?php
include('bdd/bdd.php');
include('modele/vehicule/vehiculeModel.php');

// Instancier la classe Vehicule (sensible à la casse)
$vehicule = new Vehicule($bdd);

// Appeler la méthode pour récupérer tous les véhicules
$allVehicule = $vehicule->allVehicule(); // retourne un tableau d'objets
?>