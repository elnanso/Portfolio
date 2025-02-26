$(document).ready(function() {

    tab = create_tab();
    joueur = create_joueur();

    print_tab(tab, joueur);

    
});

var tab;
var joueur;
var listes_combinaisons_win = generate_win_liste();

function joue(tab, joueur, id_cellulle){

    //console.log(tab);
    var tab_id = id_cellulle.split('_');
    var index_colonnes = tab_id[1];

    //ça joue
    for(var i = 0; i < tab.length;i++){ // boucle sur chaque ligne 

        if(tab[i][index_colonnes] == null || tab[i][index_colonnes] == 'undefined'){
            tab[i][index_colonnes] = joueur;
            break;
        }
    }

    print_tab(tab, joueur);
}

function rand(){

    var float_number = Math.random()*100;
    var int_number = Math.round(float_number);

    return int_number
}

function create_joueur(){

    // joueur 1 pair
    // joueur 2 impair

    var alea = rand();
    var joueur;

    if (alea%2 == 0){
        joueur = 1;
    }
    else {
        joueur = 2;
    }

    return joueur;

}

function print_joueur(joueur){

    var message = '<h2> Au tour du joueur n°' + joueur + ' </h2>';
    $('#joueur').html(message);

}

function create_tab() {

    var nbr_lignes = 6;
    var nbr_colonnes = 7;
 
    tab = new Array(nbr_lignes);

    for(var i = 0; i < nbr_lignes; i++){

        tab[i] = new Array(nbr_colonnes);

    }

    return tab;
}

function print_tab(pi_tab, joueur) {

    var nbr_lignes = pi_tab.length; 
    var nbr_colonnes = pi_tab[0].length;
    //console.log('nbr_lignes : ' + nbr_lignes);
    //console.log('nbr_colonnes : ' + nbr_colonnes);

    var tab_html = '<table>';

    
    for(var i = nbr_lignes-1; i >= 0 ; i--){ // 6 itérations, 6 lignes 
        
        tab_html += '<tr>';

        for(var j = 0; j < nbr_colonnes; j++){ // 7 itérations, 7 colonnes 

            if(pi_tab[i][j] == 1){ // joueur 1, rouge

                var id = i + '_' + j;
                tab_html += "<td id='"+ id +"' style='background-color:red;'>";
                //console.log('blue');
                
            }
            else if(pi_tab[i][j] == 2){ //joueur 2, bleu
                var id = i + '_' + j;
                tab_html += "<td id='"+ id +"' style='background-color:blue;'>";
                //console.log('blue');
            }
            else { // si pas set, pi_tab[i][j] == 'undefined' || pi_tab[i][j] == null noir
                var id = i + '_' + j;
                tab_html += "<td id='"+ id +"'>";
            }

        }

        tab_html += '</tr>';
    }

    tab_html += '</table>';

    print_joueur(joueur);

    $('#P4').html(tab_html); // change le contenu de la div id = P4

    //verif si un gagnant existe 
    if(check_win(tab,joueur) === true){

            //console.log(`Joueur ${joueur} WIN !!`);
            // alert(`Joueur ${joueur} WIN !!`);
            // alert("saye");
           console.log(`Joueur ${joueur} WIN !!`);  
           $('#joueur').html(`<h1> Joueur ${joueur} WIN !!! lessssssgo </h1>`);
    }
    
    if(joueur == 1){
        joueur = 2;
    }
    else {
        joueur = 1;
    }


    $('td').click(function(){ joue(tab,joueur,this.id); });

}


function debug_tab(tab_debug){
    var ligne = tab_debug.length;
    var colonne = tab_debug[0].length;
    var message = '<p>';
    for(var i = ligne-1; i >= 0  ; i--){
        message += '<br> ------------------------------<br>';
        for(var j = 0; j < colonne ; j++){
            message += '| '+ i + '_' + j + ' : ' + tab_debug[i][j]+ ' |';
        }

    }
    message += '</p>'
    $("#debug").html(message);
}

function generate_win_liste(){

    tab_vide = create_tab();
    liste_combinaisons = [];
    nbr_lignes = tab_vide.length;
    nbr_cols = tab_vide[0].length;

    var c = 0;
    
    //victoire horizontale (x)
    for(var i=nbr_lignes-1; i>=0 ;i--){// toutes les lignes
        for(var j=0; j<=nbr_cols-4 ;j++){// 4 colonnes, max win possible depuis index 3
            liste_combinaisons.push([`${i}_${j}`,
                                     `${i}_${j+1}`,
                                     `${i}_${j+2}`,
                                     `${i}_${j+3}`]);
                                     c+=1;
            
        }
    }
    console.log(`nbr combinaison horizontale : ${c}`);
    
    //console.log(liste_combinaisons.length); 
            
    c = 0;
    //combinaisons verticale
    for(var i=nbr_lignes-4; i>=0 ;i--){// 3 lignes, max win possible depuis index 2
        for(var j=0; j<=nbr_cols-1 ;j++){// toutes les colonnes
            liste_combinaisons.push([`${i}_${j}`,
                                     `${i+1}_${j}`,
                                     `${i+2}_${j}`,
                                     `${i+3}_${j}`]);
                                     c+=1;
            
            
        }
    }

    console.log(`nbr combinaison verticale : ${c}`);
                
    c = 0;
    //combinaisons diagonale vers la droite
    for(var i=0; i<= nbr_lignes-4 ;i++){// 3 lignes, max win possible depuis index 2
        for(var j=0; j<=nbr_cols- 4;j++){// 4 colonnes, max win possible depuis index 3
            liste_combinaisons.push([`${i}_${j}`,
                                     `${i+1}_${j+1}`,
                                     `${i+2}_${j+2}`,
                                     `${i+3}_${j+3}`]);   
                                     c+=1;        
            /*console.log([`${i}_${j}`,
                `${i+1}_${j+1}`,
                `${i+2}_${j+2}`,
                `${i+3}_${j+3}`]);*/
        }
    }

    console.log(`nbr diagonale droite : ${c}`);

    //combinaisons diagonale vers la gauche
    c = 0;
    for(var i=nbr_lignes-1; i>= 3;i--){// 3 lignes, max win possible depuis index 3 en partant du haut
        
        for(var j=0; j<=nbr_cols- 4;j++){// 4 colonnes, max win possible depuis index 3
            //console.log('-----\n'+ [`${i}_${j}`]);
            liste_combinaisons.push([`${i}_${j}`,
                                     `${i-1}_${j+1}`,
                                     `${i-2}_${j+2}`,
                                     `${i-3}_${j+3}`]);
                                     c+=1;  
            console.log([`${i}_${j}`,
                `${i-1}_${j+1}`,
                `${i-2}_${j+2}`,
                `${i-3}_${j+3}`]);
        }
    }
    console.log(`nbr diagonale gauche : ${c}`);
                
    return liste_combinaisons
    //

}

function check_win(pi_tab,joueur){

    var nbr_combi_win = listes_combinaisons_win.length;
    var count;

    console.log('------------------------------------------');

    for (var n = 0; n<nbr_combi_win; n++){ //pour chaque combinaison gagnante
    
        count = 0;
        console.log(`${listes_combinaisons_win[n]} -> n° ${n}`);
           
        for(var cell=0 ; cell<=listes_combinaisons_win[n].length-1 ; cell++){ //chaque cellule ligne_colonne de la combinaison
 
            var couple = listes_combinaisons_win[n][cell].split("_");
            var ligne = couple[0];
            var cols = couple[1];
            console.log(`${ligne}_${cols} == ${pi_tab[ligne][cols]}`);
             if(pi_tab[ligne][cols] == joueur){
                count+=1;
            }
            
        }

        console.log(`count = ${count}`);

        if(count==4){
            console.log('return true');
            return true;
        }

    }
    return false;

}

/* 

7    
6    
5    
4
3
2    
1  2  3  4  5  6

*/


