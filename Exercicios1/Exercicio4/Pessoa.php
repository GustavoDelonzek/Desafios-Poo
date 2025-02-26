<?php
    class Pessoa{
        private String $nome;
        private String $endereco;
        private String $email;
        private String $telefone;

        public function __construct($nome, $endereco, $email, $telefone)
        {   
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->telefone = $telefone;
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

    }


?>