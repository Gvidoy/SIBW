<?php
    class Habitacion{
        private $nombre;
        private $titulo;
        private $parrafo;
        private $multimedia;
        private $precio;
        private $tipo;
        
        public function Habitacion( $n, $t, $p, $m, $pr, $tp) {
            $this->nombre = $n;
            $this->titulo = $t;
            $this->parrafo = $p;
            $this->multimedia = $m;
            $this->precio = $pr;
            $this->tipo = $tp;
        }
        
        public function copiaHabitacion( $hab ) {
            $this->nombre = $hab->nombre;
            $this->titulo = $hab->titulo;
            $this->parrafo = $hab->parrafo;
            $this->multimedia = $hab->multimedia;
            $this->precio = $hab->precio;
            $this->tipo = $hab->tipo;
            
            return $this;
        }
        
        public function getNombre() {
            return $this->nombre;
        }    
        
        public function getTitulo() {
            return $this->titulo;
        }
        
        public function getParrafo() {
            return $this->parrafo;
        }
        
        public function getMultimedia() {
            return $this->multimedia;
        }
        
        public function getPrecio() {
            return $this->precio;
        }
        
        public function getTipo() {
            return $this->tipo;
        }
    }

?>