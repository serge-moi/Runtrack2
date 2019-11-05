<?php

function leetspeak($str){
    $i = 0;
    while($i < strlen($str)){
        switch($str[$i]){
            case "A": 
            $str[$i] = "4";
            break;
            case "B": 
            $str[$i] = "8";
            break;
            case "E": 
            $str[$i] = "3";
            break;
            case "G": 
            $str[$i] = "6";
            break;
            case "L":
            $str[$i] = "1";
            break;
            case "S":
            $str[$i] = "5";
            break;
            case "T":
            $str[$i] = "7";
            break;
        }
    $i++;
    }
    return $str;
}


$str = leetspeak("A B C D E F G H I J Q L M N O P Q R S T U V W X Y Z");

echo $str;

?>