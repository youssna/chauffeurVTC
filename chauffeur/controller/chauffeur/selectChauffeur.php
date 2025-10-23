<?php

include('bdd/bdd.php');
include('modele/chauffeur/chauffeurModel.php');

//instancier la class chauffeur (type Object)
$chauffeur = new Chauffeur($bdd);
//appel de la function allChauffeur du model et stock dans la var $AllChauffeur
$allChauffeur = $chauffeur->allChauffeurs ();

?>
