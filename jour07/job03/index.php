<?php  

session_start();

if(!isset($_SESSION["prenom"])){
$_SESSION["prenom"] = [];
}
if(isset($_POST["prenom"])){
array_push($_SESSION["prenom"],$_POST["prenom"]);
}
if(isset($_POST["dc"])){
    session_destroy();
    header("Location:index.php");
    die();
}


foreach($_SESSION["prenom"] as $prenom){
    echo "$prenom<br>";
}















?>

<form action="index.php" method="post">
    <input type="text" name="prenom">
    <input type="submit" name="valider" value="valider">
</form>
<form action="index.php" method="post">
    <input type="submit" name="dc" value="reset">
</form>