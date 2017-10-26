<?php
    class Actividad{
        private $nombre;
        private $titulo;
        private $parrafo;
        private $multimedia;
        private $precio;
        private $enlace;
        private $id;
        
        public function Actividad( $n, $t,$m,$p,$en,  $pr,  $id) {
            $this->nombre = $n;
            $this->titulo = $t;
            $this->multimedia = $m;
            $this->parrafo = $p;
            $this->enlace = $en;
            $this->precio = $pr;
            $this->id = $id;
        }
        
        public function copiaActividad( $act ) {
            $this->nombre = $act->nombre;
            $this->titulo = $act->titulo;
            $this->parrafo = $act->parrafo;
            $this->multimedia = $act->multimedia;
            $this->precio = $act->precio;
            $this->enlace = $act->enlace;
            $this->id = $act->id;

            
            return $this;
        }
        
        public function getNombre() {
            return $this->nombre;
        }    
        
        public function getTitulo() {
            //echo "$this->titulo";
            //echo "yeahh";
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
        
        public function getEnlace(){
            return $this->enlace;
        }
        
        public function getId(){
            return $this->id;
        }
    }

?>