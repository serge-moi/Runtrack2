<?php


for($nombre = 1; $nombre <= 100; $nombre++){
    if($nombre % 3 == 0 && $nombre % 5 == 0){
        echo "Fizzbuzz<br/>";
    } else if ($nombre % 3 == 0){
        echo "Fizz<br/>";
    } else if ($nombre % 5 == 0){
        echo "Buzz<br/>";
    } else {
        echo $nombre;
        echo "<br/>";
    }
}








?>