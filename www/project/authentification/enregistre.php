<?php 

require("connection_db.php");

if(isset($_POST) && $_SERVER["REQUEST_METHOD"] == "POST") {

    $user_login = $_POST["log"];
    $mdp = $_POST["mdp"];
    $mail = $_POST["mail"];


    $req = "INSERT INTO users (login, mdp, mail) VALUES ('" 
    . $user_login . "','" . $mdp ."','" . $mail ."');";


    if ($conn->query($req) === TRUE) {
        header("Location: login.php?status=success");
        
    } else {
        $error = urlencode($conn->error);
        header("Location: login.php?status=fail&erreur=".$error);
    }
    exit;

}

?>