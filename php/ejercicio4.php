<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $cadena1 = "Comer verduras ";
        $cadena2 = "es realmente sano";
        $concatenado = $cadena1 . $cadena2;
        echo $concatenado;
        echo "<br>";
        echo "La palabra verdura se encuentra a partir del caracter: ";
        echo strpos($concatenado, "verduras");
    ?>
</body>
</html>