<?php 
    class Funcionario{
        private int $id;
        private String $nome;
        private String $cargo;


        public function __construct($id, $nome, $cargo)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->cargo = $cargo;
        }

        public function calculaSalario(){
            echo "Salario funcionario";
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;

        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getCargo(){
            return $this->cargo;
        }

        public function setCargo($cargo){
            $this->cargo = $cargo;
        }

    }


?>