<?php 
include('../../modele/chauffeur/chauffeurModel.php');
include('../../bdd/bdd.php');

// Vérifie si une action a été envoyée
if (isset($_POST['action'])) {

    // Instancie le contrôleur
    $chauffeurController = new ChauffeurController($bdd);

    switch ($_POST['action']) {

        case 'ajouter':
            // Vérifie que tous les champs sont remplis
            if (
                !empty($_POST['nom']) &&
                !empty($_POST['prenom']) &&
                !empty($_POST['age']) &&
                !empty($_POST['experience']) &&
                isset($_POST['disponibilite'])
            ) {
                // Appel de la méthode d’ajout
                $chauffeurController->ajouterChauffeur(
                    $_POST['nom'],
                    $_POST['prenom'],
                    $_POST['age'],
                    $_POST['experience'],
                    $_POST['disponibilite']
                );

                // Redirection après succès
                header('Location: ../../index.php?page=chauffeur');
                exit;
            } else {
                echo "⚠️ Tous les champs doivent être remplis.";
            }
            break;

        case 'update':
            // TODO : Code de mise à jour (à compléter plus tard)
            break;

        case 'supprimer':
            // TODO : Code de suppression (à compléter plus tard)
            break;

        default:
            header('Location: ../../index.php?page=accueil');
            exit;
    }
}

// =======================
// CLASSE CHAUFFEURCONTROLLEUR
// =======================
class ChauffeurController
{
    private $chauffeurModel;

    public function __construct($bdd)
    {
        $this->chauffeurModel = new Chauffeur($bdd);
    }

    // Ajouter un chauffeur
    public function ajouterChauffeur($nom, $prenom, $age, $experience, $disponibilite)
    {
        $this->chauffeurModel->ajouterChauffeur($nom, $prenom, $age, $experience, $disponibilite);
    }

    // Mettre à jour un chauffeur
    public function updateChauffeur($id, $nom, $prenom, $age, $experience, $disponibilite)
    {
        $this->chauffeurModel->updateChauffeur($id, $nom, $prenom, $age, $experience, $disponibilite);
    }

    // Supprimer un chauffeur
    public function deleteChauffeur($id)
    {
        $this->chauffeurModel->deleteChauffeur($id);
    }
}
?>