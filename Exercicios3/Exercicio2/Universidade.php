<?php

class Universidade{
    private String $nome;

    public function __construct($nome){
        $this->nome = $nome;

    }

    public function informaNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
}