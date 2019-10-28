<?php

    $bool = true;
    $numb = 12;
    $string = "php c'est trop b1";
    $float = 1.17;

?>


<!DOCTYPE html>
<th>
    <head>
        <title>Tableau php</title>
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hammersmith+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Boolean</td>
                    <td>$bool</td>
                    <td><?php echo $bool ?></td>
                </tr>
                <tr>
                    <td>Integer</td>
                    <td>$numb</td>
                    <td><?php echo $numb ?></td>
                </tr>
                <tr>
                    <td>String</td>
                    <td>$string</td>
                    <td><?php echo $string ?></td>
                </tr>
                <tr>
                    <td>Float</td>
                    <td>$float</td>
                    <td><?php echo $float ?></td>
                </tr>
            </tbody>
        
        </table>
    </body>
</html>

<style>
    body{
        margin: auto;
        width: 400px;
    }
    table{
        margin-top: 70px;
        border:1px solid black;
        text-align:center;
        width: 330px;    
        box-shadow: 0px 3px 17px black;
    }
    th, td{
        border: 1px solid black;
    }
    th{
        font-family: 'Righteous', cursive;
        padding: 4px;
        color: #4572c1;
        text-shadow: 0px 0px 1px aquamarine;
        box-shadow: 1px 1px 11px darkorange;
    }
    td{
        font-family: 'Hammersmith One', sans-serif;
        font-size: 17px;
        padding: 6px 4px;
        background-color: black;
        color: white;
        box-shadow: 0px 0px 2px black;
    }





</style>