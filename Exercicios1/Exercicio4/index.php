<?php 
    require_once "Livro.php";

    $livro1 = new Livro("As crônicas de nárnia", "Aquele lá", 288);

    $pessoa1 = new Pessoa("Gustavo", "Rua xx numero xx", "email@email.com", "+55 42 99999-9999");

    if($livro1->getDisponibilidade()){
        echo "Disponivel\n";
    } else{
        echo "Não disponivel\n";
    }

    echo "----------Teste empréstimo----------\n";
    $livro1->emprestar($pessoa1);

    echo $livro1->getCredor() . "\n";
    if($livro1->getDisponibilidade()){
        echo "Disponivel\n";
    } else{
        echo "Não disponivel\n";
    }
    echo "----------fim de empréstimo----------\n";

    $livro1->devolver();
    if($livro1->getDisponibilidade()){
        echo "Disponivel\n";
    } else{
        echo "Não disponivel\n";
    }



?>