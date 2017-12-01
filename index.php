<?php
/**
 * Created by PhpStorm.
 * User: Clemence
 * Date: 01/12/2017
 * Time: 09:38
 */
/**
 * effet de bord : echo par exemple, ou un affichage avec &
 *https://github.com/CGaulier/php-01-12-2017.git
 */
$ch="Coucou tu veux voir ma planete";
/**  $tab c'est mes voyelles à comparer */
$tab = array('a', 'e', 'i', 'o', 'u', 'y');

function voyelles($stre, $tab){
    $verif =false;
    /** $length je reccup la longueur de ma chaine */
$length = strlen($stre);
    for ($i=0;$i<$length-1;$i++){
        /** dans ce for je lui dis que je veux mon index $i prendra comme limite la taille de ma chaine le -1 permet de PARCOURIR touuut LE TABLEAU */
        if(in_array($stre[$i],$tab)) {
            /** Dans if je lui demande de comparer chaque index de ma chaine avec mon tableau de voyelles avec in_array
             * puis il affiche la sous chaine (pas les numero donc) qui correspondent à la comparaison*/
            echo(mb_substr($stre, $i, 1));
            $verif=true;
        }
}
if($verif ==false){
    echo('Cest de la merde');
}
}


voyelles($ch,$tab);
