<?php

require_once("Produto.php");

class Item{
    private Produto $produto;
    private int $quantidade;

    public function __construct($produto, $quantidade){
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function calculaPreco(){
        return $this->produto->getPreco() * $this->quantidade;
    }

}