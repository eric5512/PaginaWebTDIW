<?php
    class Carro {
        public array $items = [];

        function __construct() {
            $this->items = array();
        }

        function addItem($id, $name, $quant) {
            if (array_key_exists($id, $this->items)) {
                list($name, $old_quant) = $this->items[$id];
                $this->items[$id] = [$name, $quant+$old_quant];
            }
            else {
                $this->items[$id] = [$name, $quant];
        
            }
        }
        
        function modifyQuant($id, $quant) {
            if (array_key_exists($id, $this->items)) {
                list($name, $old) = $this->items[$id];
                $this->items[$id] = [$name, $quant];
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