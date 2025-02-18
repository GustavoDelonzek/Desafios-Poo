<?php

    require_once "Item.php";

    class Pedido{
        private $itens;
        private $tipoPagamento;


        public function adicionarItem(Item $item){
            $this->itens[] = $item;
        }

        public function setTipoPagamento($tipo){
            $this->tipoPagamento = $tipo;
        }

        public function getTipoPagamento(){
            return $this->tipoPagamento;
        }

        public function totalPedido(){
            $soma = 0;
            foreach($this->itens as $item){
                $soma += $item->calculaPreco();
            }
            return $soma;
        }

        public function __toString()
        {
            return "O valor total do pedido fico em R$" . number_format($this->totalPedido(), 2) .". O pagamento será feito por " . $this->getTipoPagamento();
        }

        
    }