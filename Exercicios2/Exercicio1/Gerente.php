<?php 
    require_once "Funcionario.php";

    class Gerente extends Funcionario{
        private int $qntdColaboradores;

        public function __construct($id, $nome, $cargo, $qntdColaboradores)
        {
            parent::__construct($id, $nome, $cargo);
            $this->qntdColaboradores = $qntdColaboradores;
        }

        public function calculaSalario()
        {
            echo "SAlario gerente";
        }

        public function getQntdColaboradores(){
            return $this->qntdColaboradores;
        }

        public function setQntdColaboradores($qntdColaboradores){
            $this->qntdColaboradores = $qntdColaboradores;
        }

    }


?>