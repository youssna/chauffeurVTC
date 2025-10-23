<?php
try {
    $user = "root"; 
    $pass = "root";
    $bdd = new PDO('mysql:host=localhost;dbname=vtc_', $user, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("SET NAMES utf8"); 

} catch(PDOException $e) {
    die("Erreur ! : " . $e->getMessage());
}
?>