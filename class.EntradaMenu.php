<?php
    class EntradaMenu{
        private $opcion;
        private $opcionTitulo;
        
        public function EntradaMenu( $o, $oT) {
            $this->opcion = $o;
            $this->opcionTitulo = $oT;
            //echo "opcion = $this->opcion <br>";
            //echo "opcionTitulo = $this->opcionTitulo <br><br><br>";
        }
        
        public function copiaEntradaMenu( $ent ) {
            $this->opcion = $ent->opcion;
            $this->opcionTitulo = $ent->opcionTitulo;
            return $this;
        }
        
        public function getOpcion() {
            return $this->opcion;
        }    
        
        public function getOpcionTitulo() {
            return $this->opcionTitulo;
        }
    }

?>