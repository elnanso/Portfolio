<?php
session_start();

if(isset($_POST)){

    $largeur = $_POST['largeur'];

    for($i=0;$i<$largeur;$i++){
        $tab[$i]=rand(0,100);
    }

    $_SESSION['tab'] = $tab;
    header('Location:tab.php');
    exit;
}
?>