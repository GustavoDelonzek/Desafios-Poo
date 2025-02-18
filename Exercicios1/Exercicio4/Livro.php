<?php 
    require_once "Pessoa.php";

    class Livro{
        private String $nome;
        private String $autor;
        private int $numPaginas;
        private bool $disponibilidade;
        private Pessoa $credor;

        public function __construct($nome, $autor, $numPaginas)
        {   
            $this->nome = $nome;
            $this->autor = $autor;
            $this->numPaginas = $numPaginas;
            $this->disponibilidade = true;
        }

        public function emprestar($pessoa){
            if($this->disponibilidade == true){
                $this->disponibilidade = false;
                $this->credor = $pessoa;
            } else{
                echo "Livro já emprestado! Não disponivel\n";
            }
        }

        public function devolver(){
            $this->disponibilidade = true;
            $this->removeCredor();
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setAutor($autor){
            $this->autor = $autor;
        }

        public function getNumPaginas(){
            return $this->numPaginas;
        }

        public function setNumPaginas($numPaginas){
            $this->numPaginas = $numPaginas;
        }

        public function getDisponibilidade(){
            return $this->disponibilidade;
        }

        public function setDisponibilidade($disponibilidade){
            $this->disponibilidade = $disponibilidade;
        }

        public function getCredor(){
            return $this->credor->getNome();
        }

        public function setCredor($credor){
            $this->credor = $credor;
        }

        public function removeCredor(){
            unset($this->credor);
        }

    }



?>