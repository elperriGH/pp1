<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        function numeroMayor($num1,$num2){
            if($num1 > $num2){
                echo "El numero: $num1 es mayor";
            }else{
                echo "El numero: $num2 es mayor";
            }
        }
        print(numeroMayor(6,2))
    ?>
</body>
</html>