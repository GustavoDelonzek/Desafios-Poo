<?php 
    require_once "Real.php";

    $numeroComplexo = new Complexo(3,4);
    echo $numeroComplexo->modulo();
    echo "\n" . $numeroComplexo->angulo();


    $numeroReal= new Real(-3);
    echo "\n" . $numeroReal->Sinal();


?>