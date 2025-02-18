<?php 

    require_once "Triangulo.php";
    require_once "Retangulo.php";


    $retangulo = new Retangulo(15, 15);
    $retangulo->ehQuadrado();
    echo "A area do retangulo é " . $retangulo->calculaArea(). "\n";

    $triangulo = new Triangulo(10, 12, "Isosceles");
    echo "A area do triangulo " . $triangulo->getTipo() . " é " . number_format($triangulo->calculaArea(), 2) . "\n";

?>