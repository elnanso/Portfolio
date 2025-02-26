<?php
require('connection_db.php');


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = $_GET['id_contact'];

  
    $req = "DELETE FROM contact WHERE id = ".$id.";";

  
    if ($conn->query($req) === TRUE) {
        header('Location: home.php');
        exit();
    } else {
        echo "Erreur de suppression : " . $conn->error;
    }
}

?>
