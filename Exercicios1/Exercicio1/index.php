<?php

require_once("Pessoa.php");

$pessoa = new Pessoa("Gustavo", 25, 05, 2004);

$pessoa->calculaIdade(24,  05, 2025);

echo $pessoa->informaIdade() . "\n";
echo $pessoa->informaNome();