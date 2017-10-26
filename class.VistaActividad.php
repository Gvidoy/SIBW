<?php

    class VistaActividad{
        
        private function mostrarInicio(){
            echo '
            <div class="divider"></div>
            <div class="divider"></div>
            <div id="normalcontent">
            ';
        }
        
        private function mostrarFin(){
            echo '
            </div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            <div class="divider"></div>
            ';
        }
    
        public function mostrarTodas ( $contenedor ) {
            
            $this->mostrarInicio();
            
            for ( $i=1 ; $i<=3 ; $i++ ){
                $actividad = new Actividad('','','','','','','');
                $actividad = $actividad->copiaActividad($contenedor->getActividad($i));
                      $titulo = $actividad->getTitulo();
                      $multimedia = $actividad->getMultimedia();
                      $parrafo = $actividad->getParrafo();
                      $precio = $actividad->getPrecio();
                      $enlace = $actividad->getEnlace();
                      echo'
                      <div class="box sombra centrado h100">
                      	<a class="no-visited" href="./index.php?sec=actividades&act='.$act.'"><h4 > '.$titulo.'</h4></a>
                      	'.$multimedia.'
                      	<p>
                      			'.$parrafo.'
                      	</p>
                      	<a href = "'.$enlace.'"><button>El precio es de '.$precio.'€</button></a>
                      </div>
                    ';
            }
            $this->mostrarFin();
        }
        
        function mostrarIndividual($actividad){
            $this->mostrarInicio(); 
            
            $titulo = $actividad->getTitulo();
            $multimedia = $actividad->getMultimedia();
            $parrafo = $actividad->getParrafo();
            $precio = $actividad->getPrecio();
            $enlace = $actividad->getEnlace();
            
            echo'
                <div id="individual">
                  <h4 > '.$titulo.'</h4>
                  '.$multimedia.'
                  <p>	
                  		'.$parrafo.'
                  </p>
                  <a href = "'.$enlace.'"><button>Más información</button></a>
                </div>
                ';
            
            $this->mostrarFin();
        }
        
    }

?>