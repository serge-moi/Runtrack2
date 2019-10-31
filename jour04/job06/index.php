<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="index.php" method="get">
            <input type="text" name="nombre">
            <input type="submit" value="ok">
        </form>
    </body>
</html>


<?php


if($_GET == true){
    if(($_GET["nombre"] % 2 ) == 0){
    echo "Nombre Pair";
    } else {
    echo "Nombre impair";
    }
}


?>