<?php

    require_once "Produto.php";

    class Pedido{
        private $itens;
        private $tipoPagamento;

        public function setTipoPagamento($tipo){
            $this->tipoPagamento = $tipo;
        }

        
    }