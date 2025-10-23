<?php
class Utilisateur
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function ajouterUtilisateur($nom, $prenom, $email, $motdepasse)
    {

        $hash = password_hash($motdepasse, PASSWORD_DEFAULT);

        $req = $this->bdd->prepare("
            INSERT INTO utilisateur (nom, prenom, email, motdepasse)
            VALUES (:nom, :prenom, :email, :motdepasse)
        ");

        $req->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':motdepasse' => $hash
        ]);
    }
}
?>