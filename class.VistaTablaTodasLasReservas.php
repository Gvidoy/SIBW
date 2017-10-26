<?php

    class VistaTablaTodasLasReservas{
        
        private $contenedorReservas;
        
        public function VistaTablaTodasLasReservas ( $contR , $value){
            $contR->lista_reservas($value);
            $this->contenedorReservas = $contR;
        }
        
        public function mostrarBusqueda (){
            ?>
            
            <script src="js/jquery-2.2.4.min.js"></script>
                <script src="js/lista_reservas.js"></script>
                <div id="content">
                	<div class="border-box container caja-reservas tabla-reservas">
                	  <div class="border-box row contact-body">
                	  	
                     <h2>Lista de reservas y titulares <br>
                          <small>Se muestran todas las reservas, asignadas o no</small>
                          <form accept-charset="utf-8" id="buscar-form" name="buscar-form" method="POST">
                    	      <ul>
                    	        <li>
                    	          <span class="left">
                    	            <label class="label-ajax" for="ajax">Buscar:</label>
                    	            <input type="text" name="busqueda" id="busqueda" class="form-control" onkeyup="lista_reservas(this.value,this.contenedorReservas);" placeholder="Ingrese nombre o DNI"/>
                    	          </span>
                    	        </li>
                    	      </ul>
                    	  </form>
                	  </h2>
            
            <?php
        }
        
        public function mostrar () {
            ?>
                	  <div id="resultado">
                	  <table>
                          <thead>
                            <tr>
                              <th scope="col">Fecha Inicio</th>
                              <th scope="col">Fecha Fin</th>
                              <th scope="col">Tipo de Habitación</th>
                              <th scope="col">Actividad</th>
                              <th scope="col">Precio total</th>
                              <th scope="col">Localizador</th>
                              <th scope="col">Nif titular</th>
                              <th scope="col">Nombre titular</th>
                            </tr>
                          </thead>
                          <tbody>
                                <?php
                                for ($i=0; $i<$this->contenedorReservas->getSizeTodas(); $i++){
                                    $reserva = $this->contenedorReservas->getReservaTodas($i);
                                    $fechaInicio = $reserva->getFecha_inicio();
                                    $fechaFin = $reserva->getFecha_fin();
                                    $tipoHabitacion = $reserva->getId_tipo_deseadoToString();
                                    $promocion = $reserva->getId_actividadToString();
                                    $precioTotal = $reserva->getPrecio_total();
                                    $localizador = $reserva->getLocalizador();
                                    $nif = $reserva->getNif();
                                    $nombre = $reserva->getNombre();
                                    
                                    echo '<tr>';
                                    
                                    echo '<th scope="row">';
                                    echo "$fechaInicio";
                                    echo '</th>';
                                    
                                    echo '<td>';
                                    echo "$fechaFin";
                                    echo '</td>';
                                    
                                    echo '<td>';
                                    echo "$tipoHabitacion";
                                    echo '</td>';
                                    
                                    echo '<td>';
                                    echo "$promocion";
                                    echo '</td>';
                                    
                                    echo '<td>';
                                    echo "$precioTotal";
                                    echo '</td>';
                                    
                                    echo '<td>';
                                    echo "$localizador";
                                    echo '</td>';
                                    
                                    echo '<td>';
                                    echo "$nif";
                                    echo '</td>';
                                    
                                    echo '<td>';
                                    echo "$nombre";
                                    echo '</td>';
                        
                                    echo '</tr>';
                                }
                            ?>
                          </tbody>
                        </table>
                        </div>
                	  </div>
                	</div>
                	<div class="black-divider"></div>
            <?php
            
        }
        
    }

?>