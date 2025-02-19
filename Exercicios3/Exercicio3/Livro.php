<?php 
    require_once "Pessoa.php";

    class Livro{
        private String $nome;
        private String $autor;
        private int $numPaginas;
        private $credores;

        public function __construct($nome, $autor, $numPaginas)
        {   
            $this->nome = $nome;
            $this->autor = $autor;
            $this->numPaginas = $numPaginas;
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
        
        
        public function emprestar($pessoa){
            $this->credores[] = $pessoa;
        }
        
        public function getCredores(){
            return $this->credores;
        }


        public function removeCredor($pessoa){
            $valor = array_search($pessoa, $this->credores);
            unset($this->credores[$valor]);
        }

    }



?>