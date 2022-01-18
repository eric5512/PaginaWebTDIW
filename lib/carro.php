<?php
    class Carro {
        public array $items = [];

        function __construct() {
            $this->items = array();
        }

        function totalPrice() {
            $total = 0;
            foreach ($this->items as $id => list($name, $quant, $price)) {
                $total += $quant * $price;
            }

            return $total;
        }

        function addItem($id, $name, $quant, $pu) {
            if (array_key_exists($id, $this->items)) {
                list($name, $old_quant, $pu) = $this->items[$id];
                $this->items[$id] = [$name, $quant+$old_quant, $pu];
            }
            else {
                $this->items[$id] = [$name, $quant, $pu];
        
            }
        }
        
        function modifyQuant($id, $quant) {
            if (array_key_exists($id, $this->items)) {
                list($name, $old, $pu) = $this->items[$id];
                $this->items[$id] = [$name, $quant, $pu];
                return true;
            }
            return false;
        }

        function removeItem($id) {
            if (array_key_exists($id, $this->items)) {
                unset($this->items[$id]);
            }
        }
    }
?>