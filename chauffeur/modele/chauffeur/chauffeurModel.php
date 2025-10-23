<?php

class Chauffeur
{

private $bdd;
	function __construct($bdd)
	{
		$this->bdd = $bdd;
	}


//CRUD

//READ
public function allChauffeurs()
{
	//la requete SQL
	$req = $this->bdd->prepare('select * from chauffeur');
	//execute notre requete à la BDD
	$req->execute();
	//recupere les information provenant de la BDD
	return $req->fetchAll();
}

public function ajouterChauffeur($nom, $prenom, $age, $experience, $disponible)
{
	$req = $this->bdd->prepare("INSERT INTO chauffeur (nom, prenom, age, experience, disponible) VALUES 
		(:nom, :prenom, :age, :experience, :disponible)");

	$req->bindParam(':nom' , $nom);
	$req->bindParam(':prenom' , $prenom);
	$req->bindParam(':age' , $age);
	$req->bindParam(':experience' , $experience);
	$req->bindParam(':disponible' , $disponible);

	return $req->execute();
}
}


