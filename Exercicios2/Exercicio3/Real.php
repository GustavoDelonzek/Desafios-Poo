<?php 
    require_once "Complexo.php";
    class Real extends Complexo{
        public function __construct($real)
        {   
            parent::__construct($real, -$real);
        }

        public function Sinal(){
            if($this->getReal() >= 0){
                return 1;
            } else{
                return -1;
            }
        }

    }


?>