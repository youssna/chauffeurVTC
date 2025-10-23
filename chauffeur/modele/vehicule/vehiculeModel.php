<?php
class Vehicule
{
    private $bdd;

    function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    // READ : récupérer tous les véhicules
    public function allVehicule()
    {
        $req = $this->bdd->prepare('SELECT * FROM vehicule');
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    // CREATE : ajouter un véhicule
    public function ajouterVehicule($model, $immatriculation, $couleur, $nbplace)
    {
        $req = $this->bdd->prepare('
            INSERT INTO vehicule (model, immatriculation, couleur, nbplace)
            VALUES (:model, :immatriculation, :couleur, :nbplace)
        ');
        $req->execute([
            ':model' => $model,
            ':immatriculation' => $immatriculation,
            ':couleur' => $couleur,
            ':nbplace' => $nbplace
        ]);
    }
}
?>