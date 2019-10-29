<?php

$nombre = 0;

while($nombre <= 1337){
    echo $nombre;
    echo "<br/>";
    if($nombre == 42){
        echo "<u><b>42</b></u>";
        echo "<br/>";
    }
    $nombre ++;
}

?>