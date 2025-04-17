<?php
$whitelist = ['127.0.0.1', 'localhost', '172.20.0.1']; 

$urlArbitrage = "/ressources/ARBITRAGE-SECU-KO-REINVEST-DIFF-INVEST/TICKET-ARBITRAGE.html";
$urlOutilAdmin = "/ressources/OUTILS-ADMIN/TICKET-OUTILS-ADMIN.html";
$urlEspaceClient = "/ressources/ESPACE-CLIENT-KO-AFFILIATION-NON-DISPO/TICKET-ESPACECLIENT.html";
$urlContreOrdre = "/ressources/CONTRE-ORDRE/ContreOrdre.html";

$param=$_GET["nomPage"];
$urlCible = null;

if ($param == "Arbitrage"){
    $urlCible = $urlArbitrage;
}
else if($param == "OutilAdmin") {
    $urlCible = $urlOutilAdmin;
}
else if ($param == "EspaceClient"){
    $urlCible = $urlEspaceClient;
}
else if ($param == "ContreOrdre"){
    $urlCible = $urlContreOrdre;
}

function getIp(): string
{
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_X_REAL_IP'])) {
        return $_SERVER['HTTP_X_REAL_IP'];
    }
    
    if (isset($_SERVER['REMOTE_ADDR'])) {
        return $_SERVER['REMOTE_ADDR'];
    }

    return null;
}

$ip = getIp();

$local = in_array($ip, $whitelist);

if ($local) {
    $response['redirect_url'] = $urlCible;
} else {
    $response['redirect_url'] = "/RessourceNonDispo.html";
}

header('Content-Type: application/json');
echo json_encode($response);


?>
