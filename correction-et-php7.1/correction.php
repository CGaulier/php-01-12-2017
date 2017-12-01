<?php
/**
 * Created by PhpStorm.
 * User: Clemence
 * Date: 01/12/2017
 * Time: 11:31
 */

define("LIST_VOYELLES",["A","a","E","e","I","i","O","o","U","u","Y","y"]);

/** La fonction echoVoyelles va envoyer QUE les voyelles de la cahine qui lui est passé en parametre
 * @param string $chaine
@return void */


function echoVoyelles ($chaine) : void  /** void dis qu'il n'y aura aucun retour */

{
$longeurChaine = strlen($chaine);
for ($i=0;$i<$longeurChaine-1;$i++){

    if(in_array($chaine[$i],LIST_VOYELLES)){
        echo $chaine[$i];
    }
}

}