<?php 
    class Complexo{
        private float $real;
        private float $imaginario;

        public function __construct($real, $imaginario)
        {
            $this->real = $real;
            $this->imaginario = $imaginario;
        }

        public function modulo(){
            return sqrt(pow($this->real, 2) + pow($this->imaginario, 2));
        }
        
        //falta algo aqui
        public function angulo(){
            return atan($this->imaginario / $this->real);
        }

        public function getReal(){
            return $this->real;
        }

        public function setReal($real){
            $this->real = $real;
        }

        public function getImaginario(){
            return $this->imaginario;
        }

        public function setImaginario($imaginario){
            $this->imaginario = $imaginario;
        }
    }



?>