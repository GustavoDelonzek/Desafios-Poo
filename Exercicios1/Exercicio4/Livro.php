<?php 
    class Livro{
        private String $nome;
        private String $autor;
        private int $numPaginas;
        private bool $disponibilidade;
        

        public function __construct($nome, $autor, $numPaginas)
        {   
            $this->nome = $nome;
            $this->autor = $autor;
            $this->numPaginas = $numPaginas;
            $this->disponibilidade = true;
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

    }



?>