<?php

//ajoout de l'header 
include('view/commun/header.php');

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil' ;
//debut du body
switch ($page) {
	case 'accueil':
		include('view/accueil.php');
		break;

	case 'chauffeur':
		include('view/chauffeur.php');
		break;

	case 'vehicule':
		include('view/vehicule.php');
		break;
    case 'chauffeurById':
        include ('view/chauffeur/chauffeurById.php');
        break;
    
    case 'vehiculeById':
        include ('view/vehicule/vehiculeById.php');
        break;

    case 'ajouterVehicule':
        include ('view/vehicule/ajouterVehicule.php');
        break;
    
    case 'ajouterChauffeur':
        include ('view/chauffeur/ajouterChauffeur.php');
        break;

    case 'inscription':
        include ('view/utilisateur/inscription.php');
        break;
		

	default:

	include('view/accueil.php');
	break;

}


//fin du body


//ajout du footer 
include('view/commun/footer.php');

?>