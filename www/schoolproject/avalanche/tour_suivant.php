<?php 
session_start();
$tab = $_SESSION['tab'];
$length = count($tab);
$changement = false;

for($i = 0; $i < $length-1 ;$i++){
    $key_col_actuel = $i;
    $key_col_voisine = $i+1;

    $col_actuel = $tab[$key_col_actuel];
    $col_voisine = $tab[$key_col_voisine];

    if(($col_actuel-$col_voisine)>=2){ //col_actuel plus grande 
        $new_col_actuel = $col_actuel - 1;
        $new_col_voisine = $col_voisine + 1;
        $changement = true;
    }
    else if (($col_voisine-$col_actuel)>=2) { //col_voisine plus grande 
        $new_col_actuel = $col_actuel + 1;
        $new_col_voisine = $col_voisine - 1;
        $changement = true;
    }
    else { //si pas de diff 
        $new_col_actuel = $col_actuel;
        $new_col_voisine = $col_voisine;
    }
    $tab[$key_col_actuel] = $new_col_actuel;
    $tab[$key_col_voisine] = $new_col_voisine;
}

$_SESSION['tab'] = $tab;
$_SESSION['changement'] = $changement;
header('Location:tab.php');
exit;
?>