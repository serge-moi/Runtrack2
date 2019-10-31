<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="index.php" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" value="ok">
        </form>
    </body>
</html>


<?php


if($_POST == true){
    if($_POST["username"] == "John" &&  $_POST["password"] == "Rambo"){
        echo "C'est pas ma guerre";
    } else{
        echo "Votre pire cauchemar";
    }
}

?>