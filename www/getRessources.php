<?php
$whitelist = ['127.0.0.1', 'localhost', '172.20.0.1']; 

$urlDualBoot = "/ressources/doc-local/docDualBoot.pdf";
$urlAvalanche = "/schoolproject/avalanche/index.php";
$urlSpaceInvader = "/schoolproject/dungeoncrawler/index.html";
$urlPuissance4 = "/schoolproject/puissance4/index.html";

$param=$_GET["nomPage"];
$urlCible = null;

if ($param == "DualBoot"){
    $urlCible = $urlDualBoot;
}
else if($param == "Avalanche") {
    $urlCible = $urlAvalanche;
}
else if ($param == "SpaceInvader"){
    $urlCible = $urlSpaceInvader;
}
else if ($param == "Puissance4"){
    $urlCible = $urlPuissance4;
}


if ($urlCible != null) {
    $response['redirect_url'] = $urlCible;
} else {
    $response['redirect_url'] = "/RessourceNonDispo.html";
}

header('Content-Type: application/json');
echo json_encode($response);


?>
