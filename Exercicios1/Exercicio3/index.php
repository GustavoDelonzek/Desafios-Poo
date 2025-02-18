<?php 
    require_once("Pedido.php");

    $produto1 = new Produto(5,15);

    $produto2 = new Produto(15,25);

    $produto3 = new Produto(180,3);

    $produto4 = new Produto(16,10);

    $produto5 = new Produto(6.7,10);


    $item1 = new Item($produto1, 10);
    $item2 = new Item($produto2, 15);
    $pedido1 = new Pedido();
    $pedido1->adicionarItem($item1);
    $pedido1->adicionarItem($item2);
    $pedido1->setTipoPagamento("Dinheiro");

    echo $pedido1 . PHP_EOL;

    $item3 = new Item($produto5, 10);
    $item4 = new Item($produto3, 2);
    $pedido2 = new Pedido();
    $pedido2->adicionarItem($item4);
    $pedido2->adicionarItem($item3);
    $pedido2->setTipoPagamento("Cheque");

    echo $pedido2 . PHP_EOL;



?>