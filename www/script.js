async function loadRSSFeed() {
    const rssUrl = 'https://www.pack-solutions.com/feed/';
    const apiUrl = `https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(rssUrl)}`;

    try {
        const response = await fetch(apiUrl);
        const data = await response.json();

        if (data.status === "ok") {
            const items = data.items;
            const rssContainer = document.getElementById('rss-items');


            items.slice(0, 5).forEach(item => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `<a href="${item.link}" target="_blank">${item.title}</a>`;
                rssContainer.appendChild(listItem);
            });
        } else {
            console.error("Impossible de charger le flux RSS");
        }
    } catch (error) {
        console.error("Erreur lors de la récupération du flux RSS : ", error);
    }
}


document.addEventListener('DOMContentLoaded', loadRSSFeed);



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
 