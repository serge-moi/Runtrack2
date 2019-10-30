<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = ["a", "e", "i", "o", "u", "y"];

$i = 0;

while($i < strlen($str)){
    if($str[$i] == in_array($str[$i], $voyelles)){
        echo $str[$i];
    }
    $i ++;
}
?>