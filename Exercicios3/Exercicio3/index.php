<?php 
    require_once "Livro.php";

    $livro1 = new Livro("As crônicas de nárnia", "Aquele lá", 288);

    $livro2 = new Livro("Harry potter", "Aquele lá", 21);

    $livro3 = new Livro("Senhor dos aneis", "a lá", 90);

    $livro4 = new Livro("ENtendendo algoritmos", "bah", 77);

    $pessoa1 = new Pessoa("Gustavo", "Rua xx numero xx", "email@email.com", "+55 42 99999-9999");
    $pessoa2 = new Pessoa("CArol", "Rua xx numero xx", "email@email.com", "+55 42 99999-9999");
    $pessoa3 = new Pessoa("GAbriel", "Rua xx numero xx", "email@email.com", "+55 42 99999-9999");


    echo "----------Teste empréstimo----------\n";
    $pessoa1->pegarLivro($livro1);
    $pessoa2->pegarLivro($livro1);
    $pessoa3->pegarLivro($livro1);

    $pessoa1->pegarLivro($livro2);
    $pessoa1->pegarLivro($livro3);
    $pessoa1->pegarLivro($livro4);


    echo "Pessoas que estão com o livro " . $livro1->getNome() . " emprestado: \n";
    foreach($livro1->getCredores() as $pessoa){
        echo "$pessoa \n";
    }
    echo "----------fim de empréstimo----------\n";
    echo "Livros que o " . $pessoa1->getNome() . " emprestou: \n";
    foreach($pessoa1->getLivros() as $livro){
        echo $livro->getNome() . "\n";
    }

    echo "-------------Livro devolvido--------------\n";
    $pessoa1->devolverLivro($livro1);
    echo "Pessoas que estão com o livro " . $livro1->getNome() . " emprestado: \n";
    foreach($livro1->getCredores() as $pessoa){
        echo "$pessoa \n";
    }

    echo "-------------Livro devolvido--------------\n";

    echo "Livros que o " . $pessoa1->getNome() . " emprestou: \n";
    foreach($pessoa1->getLivros() as $livro){
        echo $livro->getNome() . "\n";
    }




?>