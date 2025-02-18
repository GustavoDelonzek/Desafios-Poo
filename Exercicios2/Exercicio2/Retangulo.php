<?php 
    require_once "Objeto.php";
    class Retangulo extends Objeto{

        public function __construct($largura, $altura)
        {
            parent::__construct($largura, $altura);
        }

        public function ehQuadrado(){
            if ($this->getLargura() == $this->getAltura()){
                echo "É quadrado!!\n";
            } else{
                echo "É retângulo!!\n";
            }
        }


        public function calculaArea(){
            return $this->getLargura() * $this->getAltura();
        }

    }

?>