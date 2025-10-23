<?php
require_once("../../bdd/bdd.php");

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $stmt = $bdd->prepare("DELETE FROM chauffeur WHERE id = ?");
    $stmt->execute([$id]);


    header('Location: ../../index.php?page=chauffeur');
    exit();
} else {
    echo "Aucun ID fourni.";
}
?>