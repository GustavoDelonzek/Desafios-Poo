<?php 
    class CalcControle{

        public function opera($a, $b, $operador){
            switch($operador):
                case "+":
                    return $a + $b;
                    break;
                case "-":
                    return $a - $b;
                    break;
                case "*":
                    return $a * $b;
                    break;
                case "/":
                    return $a/$b;
                    break;
                endswitch;
        }

    }


?>