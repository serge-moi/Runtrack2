<?php

$nombre = 0;

while($nombre <= 100){
    if($nombre <= 20){
        echo "<i>$nombre</i>";
        echo "<br/>";
    } else if ($nombre == 42) {
        echo "LaPlateforme_";
        echo "<br/>";
    } else if ($nombre >= 25 && $nombre <= 50){
        echo "<u>$nombre</u>";
        echo "<br/>";
    } else {
        echo $nombre;
        echo "<br/>";
    }
    $nombre++;
}

?>