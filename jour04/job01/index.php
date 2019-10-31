<!DOCTYPE html>
<html>
<head></head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="prenom">
        <input type="text" name="nom">
        <input type="number" name="age">
        <input type="submit" value="Ok">
    </form>
</body>
</html>

<?php
$i=0;
foreach($_GET as $cle){
    $i++;
}
echo $i;

?>