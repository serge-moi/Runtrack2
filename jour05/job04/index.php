<?php

function calcule($a, $operation, $b){
    if($operation == "+"){
        $resultat = $a + $b;
    } else if($operation == "-"){
        $resultat = $a - $b;
    } else if ($operation == "*"){
        $resultat =  $a * $b;
    } else if ($operation == "/"){
        $resultat = $a / $b;
    } else if ($operation == "%"){
        $resultat = $a % $b;
    } else {
        echo "null";
    }
    return $resultat;
};
$a = 2;
$operation = "+";
$b = 15;
echo calcule($a, $operation, $b);







?>