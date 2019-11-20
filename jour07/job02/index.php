<?php


if(isset($_GET["dc"])){
    $_COOKIE["nbvisites"] = -1;
    header("Location:index.php");
}

$i= $_COOKIE["nbvisites"];

if(!isset($_COOKIE["nbvisites"])){
    setcookie("nbvisites", "", 0);
}else{
    $i++;
    setcookie("nbvisites", $i, 0);
}

echo $_COOKIE["nbvisites"];



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head> 
    <body>
    <form action="index.php" method="get">
    <input type="submit" name="dc" value="dc" >
    </form>
    </body>
</html>