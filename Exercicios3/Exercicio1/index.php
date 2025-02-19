<?php 
    require_once "Pessoa.php";

    $pessoa5 = new Pessoa("Gregorio", 89);
    $pessoa4 = new Pessoa("Natalia", 91);
    $pessoa3 = new Pessoa("Janete", 55);
    $pessoa2 = new Pessoa("Genival", 55);
    $pessoa1 = new Pessoa("Gustavo", 20);
    

    $pessoa3->registrarPai($pessoa5);
    $pessoa3->registrarMae($pessoa4);

    $pessoa1->registrarMae($pessoa3);
    $pessoa1->registrarPai($pessoa2);


    echo "Os pais de " . $pessoa1->nome . "são a " . $pessoa1->getMae()->nome . " e o " . $pessoa1->getPai()->nome . "\nOs pais de " . $pessoa1->getMae()->nome . " são a " . $pessoa1->getMae()->getMae()->nome . " e o " . $pessoa1->getMae()->getPai()->nome . "\nSim ficou confuso, mas funciona\n\n";




?>