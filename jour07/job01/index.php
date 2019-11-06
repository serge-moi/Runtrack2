<?php

session_start();


if(isset($_GET["dc"])){
    $_SESSION["nbvisites"] = 0;
    header("Location:index.php");
}

if(!isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"] = 0;
}else{
    $_SESSION["nbvisites"]++;
}

echo $_SESSION["nbvisites"];




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