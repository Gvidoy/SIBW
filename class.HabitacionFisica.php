<?php
    class HabitacionFisica{
        private $numero;
        private $tipo;
        
        public function HabitacionFisica( $n, $t) {
            $this->numero = $n;
            $this->tipo = $t;
        }
        
        public function getNumero() {
            return $this->numero;
        }    
        
        public function getTipo() {
            return $this->tipo;
        }
        
    }

?>