<?php 
    class Objeto{
        private int $largura;
        private int $altura;

        public function __construct($largura, $altura)
        {
            $this->largura = $largura;
            $this->altura = $altura;
        }

        public function calculaArea(){
            echo "CAlcula area do objeto";
        }


        public function getLargura(){
            return $this->largura;
        }
        
        public function setLargura($largura){
            $this->largura = $largura;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

    }


?>