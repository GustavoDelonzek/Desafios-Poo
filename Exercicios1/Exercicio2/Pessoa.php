<?php
    require_once "Universidade.php";
    class Pessoa{
        private String $nome;
        private Universidade $universidade;

        public function __construct($nome, $universidade){
            $this->nome = $nome;
            $this->universidade = $universidade;
        }

        public function informaNome(){
            return $this->nome;

        }

        public function informaUniversidade(){
            return $this->universidade->informaNome();
        }


    }



?>