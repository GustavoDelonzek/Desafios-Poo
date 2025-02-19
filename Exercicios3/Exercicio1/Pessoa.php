<?php 
    class Pessoa{
        public String $nome;
        public int $idade;
        private Pessoa $pai;
        private Pessoa $mae;

        public function __construct($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function registrarPai($pai){
            $this->pai = $pai;
        }

        public function getPai(){
            return $this->pai;
        }

        public function registrarMae($mae){
            $this->mae = $mae;
        }

        public function getMae(){
            return $this->mae;
        }

    }

?>