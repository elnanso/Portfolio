
document.addEventListener("DOMContentLoaded", function() {

    setupWorkRessources();
    




});

function setupWorkRessources(){
    //Arbitrage 
    const DivArbitrage = document.getElementById("DivArbitrage");
    DivArbitrage.addEventListener("click", function() {
        sendGetRequest("Arbitrage");
    });
    //Outils Admin 
    const DivOutilAdmin = document.getElementById("DivOutilAdmin");
    DivOutilAdmin.addEventListener("click", function() {
        sendGetRequest("OutilAdmin");
    });
    //Espace Client 
    const DivEspaceClient = document.getElementById("DivEspaceClient");
    DivEspaceClient.addEventListener("click", function() {
        sendGetRequest("EspaceClient");
    });
}

function sendGetRequest(nomPage) {
    fetch('verifIP.php?nomPage=' + nomPage, {
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        if (data.redirect_url) {
            window.location.href = data.redirect_url;
        } else {
            console.error("Aucune URL de redirection trouvée");
        }
    })
    .catch(error => {
        console.error('Erreur lors de l\'envoi de la requête GET:', error);
    });
}

function getCard (input_card){

    console.log('sss');
    // tab de cartes
    const les_cartes = document.querySelectorAll('.card');

    // initialise toutes les cartes a 'caché'
    les_cartes.forEach(une_carte => {
        une_carte.classList.remove('card-visible');
        une_carte.classList.add('card-cache');
    });
    
    //initialise la carte a afficher
    const carteSelectionne = document.getElementById(input_card);
    
    // si elle est initialisé, alors on l'affiche
    if (carteSelectionne) {
        carteSelectionne.classList.remove('card-cache');
        carteSelectionne.classList.add('card-visible');
    }
}