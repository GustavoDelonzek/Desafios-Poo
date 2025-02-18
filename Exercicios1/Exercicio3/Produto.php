<?php

class Produto{
    private float $preco;
    private int $qntdEstoque;

    public function __construct($preco, $qntdEstoque){
        $this->preco = $preco;
        $this->qntdEstoque = $qntdEstoque;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getQntdEstoque(){
        return $this->qntdEstoque;
    }

}