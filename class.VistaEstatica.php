<?php

    class VistaEstatica{
        
        private $html_estatico;
        
        public function VistaEstatica ( $html ){
            $this->html_estatico = $html;
        }
        
        public function mostrar () {
           echo "$this->html_estatico";
        }
        
    }

?>