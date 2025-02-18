<?php 
    require_once "Objeto.php";
    class Triangulo extends Objeto{
        private String $tipo;

        public function __construct($largura, $altura, $tipo)
        {
            parent::__construct($largura, $altura);
            $this->tipo = $tipo;
        }

        public function calculaArea(){
            return ($this->getLargura() * $this->getAltura())/2;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        
    
    
    }


?>