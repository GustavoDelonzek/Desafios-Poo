<?php

require_once "Pessoa.php";


$universidade1 = new Universidade("Campo Real");
$universidade2 = new Universidade("Unicentro");
$universidade3 = new Universidade("UTFPR");

$pessoa = new Pessoa('teste', $universidade1);
$pessoa2 = new Pessoa('qualquer', $universidade2);
$pessoa3 = new Pessoa('lalala', $universidade3);

//Pessoa um
echo $pessoa->informaNome() . "\n";
echo $pessoa->informaUniversidade() . "\n";
echo $pessoa2->informaNome() . "\n";
echo $pessoa2->informaUniversidade() . "\n";
echo $pessoa3->informaNome() . "\n";
echo $pessoa3->informaUniversidade() . "\n";

