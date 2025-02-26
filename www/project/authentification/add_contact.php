<?php
session_start();

require('connection_db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_SESSION['id'])) {
        $user_id = intval($_SESSION['id']);
    } else {
        echo "Erreur : l'utilisateur n'est pas connecté.";
        exit();
    }

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];


    $req = "INSERT INTO contact (user_id, nom, prenom, mail) VALUES ($user_id, '$nom', '$prenom', '$mail')";


    if ($conn->query($req) === TRUE) {
        header('Location: home.php');
    } else {
        echo "Erreur lors de l'ajout du contact : " . $conn->error;
    }
}


$conn->close();
?>
