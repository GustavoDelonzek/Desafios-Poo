<?php 
    require_once "Universidade.php";
    class Departamento{
        private String $nome;
        private Universidade $universidade;

        public function __construct($nome, $universidade)
        {
            $this->nome = $nome;
            $this->universidade = $universidade;
        }
        
        public function setNome($nome){
            $this->nome = $nome;

        }   

        public function getNome(){
            return $this->nome;
        }


        public function getUniversidade()
        {
            return $this->universidade;
        }

    }



?>