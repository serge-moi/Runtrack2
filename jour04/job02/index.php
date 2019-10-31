<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="index.php" method="get">
            <input type="text" name="prenom">
            <input type="text" name="nom">
            <input type="number" name="age">
            <input type="submit" value="ok">
        </form>
        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Valeurs</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_GET as $arguments => $valeurs): ?>
                <tr>
                    <td><?php echo $arguments ?></td>
                    <td><?php echo $valeurs ?></td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </body>
</html>