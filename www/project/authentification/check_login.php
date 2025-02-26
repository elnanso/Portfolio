<?php 

require("connection_db.php");

if($_SERVER['REQUEST_METHOD']== 'POST'){

    $log = $_POST['log'];
    $mdp = $_POST['mdp'];


    $req = "SELECT * FROM users WHERE login ='" . $log . "' AND mdp ='" . $mdp . "';";

    $result = $conn->query($req);

    if($result->num_rows > 0){
        for($i=0; $i < $result->num_rows; $i++){
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['id'] = $row['id'];
            header('Location: home.php');
        }
    }
    else {
        echo "echec, le login ou mot de passe saisie n'existe pas";
    }


}

?>