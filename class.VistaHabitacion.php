<?php

    class VistaHabitacion{
        
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
                $habitacion = new Habitacion('','','','','','');
                $habitacion = $habitacion->copiaHabitacion($contenedor->getHabitacion($i));
                      $titulo = $habitacion->getTitulo();
                      $multimedia = $habitacion->getMultimedia();
                      $parrafo = $habitacion->getParrafo();
                      $precio = $habitacion->getPrecio();
                    echo'
                      <div class="box sombra centrado h100">
                      	<a class="no-visited" href="./index.php?sec=habitaciones&hab='.$i.'"><h4>'.$titulo.'</h4></a>
                      	<p class="slogan">
                      		'.$parrafo.'
                      		<img width="100%" height="200px" src="'.$multimedia.'"/>
                      	</p>
                      	
                      	<a href = "https://sibw-maximetinu.c9users.io/index.php?sec=reservar"><button>Reservar desde '.$precio.'€</button></a>
                      </div>
                    ';
            }
            $this->mostrarFin();
        }
        
        function mostrarIndividual($habitacion){
            $this->mostrarInicio();
            $titulo = $habitacion->getTitulo();
            $multimedia = $habitacion->getMultimedia();
            $parrafo = $habitacion->getParrafo();
            $precio = $habitacion->getPrecio();
            
            echo'
                <div id="individual" class="indi-hab">
              	<h4>'.$titulo.'</h4>
                <img width="100%" height="200px" src="'.$multimedia.'"/>
              	<p>
              		'.$parrafo.'
              	</p>
              	<a href = "https://sibw-maximetinu.c9users.io/index.php?sec=reservar"><button>Reservar desde '.$precio.'€</button></a>
                </div>
            ';
            $this->mostrarFin();
        }
        
    }

?>