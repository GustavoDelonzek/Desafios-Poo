<?php
    class Pessoa{
        private String $nome;
        private int $idade;
        private int $diaNasc;
        private int $mesNassc;
        private int $anoNasc;

        public function __construct($nome, $diaNasc, $mesNasc, $anoNasc){
            $this->nome = $nome;
            $this->diaNasc = $diaNasc;
            $this->mesNasc = $mesNasc;
            $this->anoNasc = $anoNasc;
            $this->idade = 0;
        }


        public function calculaIdade($dia, $mes, $ano){
            $this->idade = $ano - $this->anoNasc;

            if($this->mesNasc > $mes || $this->mesNasc == $mes && $dia < $this->diaNasc){
                $this->idade -= 1;
            }

        }

        public function informaIdade(){
            return $this->idade;
        }

        public function informaNome(){
            return $this->nome;

        }

        public function ajustaDataDeNascimento($dia, $mes, $ano){
            $this->diaNasc = $dia;
            $this->mesNasc = $mes;
            $this->anoNasc = $ano;
        }


    }



?>