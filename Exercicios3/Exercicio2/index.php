<?php

require_once "Pessoa.php";


$universidade1 = new Universidade("Campo Real");
$universidade2 = new Universidade("Unicentro");
$universidade3 = new Universidade("UTFPR");

$departamento1 = new Departamento("Departamento de física", $universidade2);
$departamento2 = new Departamento("Departamento de engenharia de software", $universidade1);
$departamento3 = new Departamento("Departamento de sistemas para internet", $universidade3);

$pessoa = new Pessoa('Merri', $departamento1);
$pessoa2 = new Pessoa('GUstavo', $departamento2);
$pessoa3 = new Pessoa('Gabriel', $departamento3);

//Pessoa um
echo $pessoa->informaNome() . " trabalha no departamento de " . $pessoa->informaDepartamento()->getNome() . " na universidade: " . $pessoa->informaDepartamento()->getUniversidade()->informaNome() ."\n";
echo $pessoa2->informaNome() . " trabalha no departamento de " . $pessoa2->informaDepartamento()->getNome() . " na universidade: " . $pessoa2->informaDepartamento()->getUniversidade()->informaNome() ."\n";
echo $pessoa3->informaNome() . " trabalha no departamento de " . $pessoa3->informaDepartamento()->getNome() . " na universidade: " . $pessoa3->informaDepartamento()->getUniversidade()->informaNome() ."\n";


