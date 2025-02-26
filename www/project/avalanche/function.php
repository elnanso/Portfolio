<?php

function print_tableau($pi_tab){
    $nbr_ligne = 100;
    $tab_html = "<table><tbody>";

    for($i = $nbr_ligne; $i > 0; $i--){ //iteration de lignes 
        $tab_html .= '<tr>';
        foreach($pi_tab as $valeur_col){ // une seul ligne 
            
            if($i <= $valeur_col ){ // si la hauteur de ligne $i est égale ou inférieur a la valeur de colonne $valeur_col, on colorie
                $tab_html .= "<td style='background-color:white;'></td>";
            }
            else {
                $tab_html.= "<td style='background-color:black;'></td>";
            }
        }
        $tab_html .= '</tr>';

    }
    $tab_html .= '</tbody></table>';

    echo $tab_html;
}

?>