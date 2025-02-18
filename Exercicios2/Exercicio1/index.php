<?php 
    require_once "Gerente.php";

    $funcionario = new Funcionario(1, 'GUsavo', 'Estagiario');
    $gerente = new Gerente(2, "Teste", "Gerente", 45);

    $funcionario->calculaSalario();
    echo "\n";
    $gerente->calculaSalario();
    echo "\n";



?>