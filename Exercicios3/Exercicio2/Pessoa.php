<?php
    require_once "Departamento.php";
    class Pessoa{
        private String $nome;
        private Departamento $departamento;

        public function __construct($nome, $departamento){
            $this->nome = $nome;
            $this->departamento = $departamento;
        }

        public function informaNome(){
            return $this->nome;

        }

        public function informaDepartamento(){
            return $this->departamento;
        }


    }



?>