<?php

$server = "db";
$user = "root";
$mdp = "rootmariadb";
$db = "ma-database";

// Initialisation de la connexion
$conn = new mysqli($server, $user, $mdp, $db);
//mysqli_connect($server, $user, $mdp, $db);

// Gère les erreurs
if (!$conn) {
    die("Connection échouée : " . mysqli_connect_error());
}

?>
