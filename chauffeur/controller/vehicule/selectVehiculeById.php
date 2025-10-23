<?php 
include ('bdd/bdd.php');
include ('modele/vehicule/vehiculeModel.php');


$vehicule = new Vehicule($bdd);

$VehiculeById = $vehicule->VehiculeById();

?>