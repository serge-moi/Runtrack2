<?php

$str = "on nest pas le meilleur quand on le croit mais quand on le sait";

$dic = ["consonnes" => ["b", "c", "d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"], "voyelles" => ["a","e","i","o","u","y"]];


$i = 0;
$c = 0;
$v = 0;


while($i < strlen($str)){
    while($dic["consonnes"] <= $str[$i]){
        echo $c++;
    }
    while($dic["voyelles"] == $str[$i]){
        echo $v++;
    }
    echo $c;
    echo $v;
    $i++;
}



?>