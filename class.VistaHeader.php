<?php

    class VistaHeader{
        
        private $nombre;
        private $localidad;
        
        public function VistaHeader ( $nom, $loc ){
            $this->nombre = $nom;
            $this->localidad = $loc;
        }
        
        public function mostrar () {
           echo '
                <div id="header">
                	<div id="headercontent">
                		<h1>'.$this->nombre.'<sup><i class="estrella fa fa-star"></i>
                									<i class="estrella fa fa-star"></i>
                									<i class="estrella fa fa-star"></i></sup></h1>
                		<h2>'.$this->localidad.'</h2>
                	</div>
                </div>
           ';
        }
        
    }

?>