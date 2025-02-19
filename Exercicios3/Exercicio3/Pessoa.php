<?php
    class Pessoa{
        private String $nome;
        private String $endereco;
        private String $email;
        private String $telefone;
        private $livros;

        public function __construct($nome, $endereco, $email, $telefone)
        {   
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->livros = [];
        }

        public function pegarLivro($livro){
            $this->livros[] = $livro;
            $livro->emprestar($this->nome);
        }
        
        public function devolverLivro(&$livro){
            $valor = array_search($livro, $this->livros);
            $livro->removeCredor($this->nome);
            unset($this->livros[$valor]);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getLivros(){
            return $this->livros;
        }

    }


?>