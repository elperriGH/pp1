<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosphp6.css">
    <title>Prueba</title>
</head>
<body>
    <table>
            <?php
                echo "<td>x</td>";
                for($x=1;$x<=10;$x++){
                echo "<td>$x</td> ";
                }
                echo "<tr>";
                for($x=1;$x<=10;$x++){
                    echo "<tr>";
                    echo "<td>$x</td>";

                        for($i=1;$i<=10;$i++){
                            echo "<td>".($x*$i)."</td>";
                        }
                    echo "<tr>";
                }
            ?>
    </table>
</body>
</html>