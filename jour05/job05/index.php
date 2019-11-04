<?php



function occurrences($str, $char){
    $taille = strlen($str);
    $i= 0;
    $compteur = 0;
    while($i < $taille){
        if($str[$i] == $char){
            $compteur++;
        }
        $i++;
    }
    return $compteur;
}

$str = "À la radio, il y a un poulet, à la radio, il y a un poulet ...";
$char = "e";

echo occurrences($str, $char);











?>