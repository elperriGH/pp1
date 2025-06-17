<?php
    require_once './vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./templates');
    $twig = new \Twig\Environment($loader);

    $pais = [

        "espania" =>
            [
                "nombre" => "Espania",
                "lengua" => "Castellano",
                "moneda" => "Euro"
            ],
        "usa" =>
            [
                "nombre" => "USA",
                "lengua" => "Ingles",
                "moneda" => "Dolar"
            ],
        "argentina" =>
            [
                "nombre" => "Argentina",
                "lengua" => "Casteññano",
                "moneda" => "Dolar"
            ],
        "china" =>
            [
                "nombre" => "China",
                "lengua" => "Mandarin",
                "moneda" => "Yuan"
            ]
    ];

    echo $twig->render('eje3.html.twig', ['pais' => $_GET['pais']]);
?>