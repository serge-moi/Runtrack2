<?php


if(isset($_GET["dc"])){
    $_COOKIE["nbvisites"] = 0;
    header("Location:index.php");
}

$i= $_COOKIE["nbvisites"];

if(!isset($_COOKIE["nbvisites"])){
    setcookie("nbvisites", "1", 0);
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