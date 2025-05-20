<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosphp5.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $x=1;
        echo "Hecho con el ciclo while:";
        echo "<br>";
        while($x<=10){
            echo "<tr>$x</tr> ";
            $x++;
        }
        echo "<br>";
            
        echo "Hecho con el ciclo for:";
        echo "<br>";
        for($i=1;$i<=10;$i++){
            echo "<tr>$i</tr> ";
        }
    ?>
</body>
</html>