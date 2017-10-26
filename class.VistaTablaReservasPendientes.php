<?php

    class VistaTablaReservasPendientes{
        
        private $contenedorReservas;
        private $contenedorHabitacionesFisicas;
        
        public function VistaTablaReservasPendientes ( $contR , $contHF){
            $this->contenedorReservas = $contR;
            $this->contenedorHabitacionesFisicas = $contHF;
        }
        
        public function mostrar () {
            ?>
                <script src="js/validacion.js"></script>
                <!--script src="js/validacionRegistro.js"></script-->
                <div id="content">
                	<div class="border-box container caja-reservas tabla-reservas">
                	  <div class="border-box row contact-header centrado">
                			<h2>¡Bienvenido administrador!&nbsp;</h2>
                
                		
                	  </div>
                	  <div class="border-box row contact-body">
                	  	
                		<table>
                      <caption>Lista de reservas sin habitacion asignada</caption>
                      <thead>
                        <tr>
                          <th scope="col">Fecha Inicio</th>
                          <th scope="col">Fecha Fin</th>
                          <th scope="col">Tipo de Habitación</th>
                          <th scope="col">Actividad</th>
                          <th scope="col">Precio total</th>
                          <th scope="col">Localizador</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            for ($i=0; $i<$this->contenedorReservas->getSize(); $i++){
                                $reserva = $this->contenedorReservas->getReserva($i);
                                $fechaInicio = $reserva->getFecha_inicio();
                                $fechaFin = $reserva->getFecha_fin();
                                $tipoHabitacion = $reserva->getId_tipo_deseadoToString();
                                $promocion = $reserva->getId_actividadToString();
                                $precioTotal = $reserva->getPrecio_total();
                                $localizador = $reserva->getLocalizador();
                                
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
                    
                                echo '</tr>';
                            }
                        ?>
                      </tbody>
                    </table>
                    
                    <h4>Selecciona el localizador de la reserva para asignarle una habitación</h4>
                    <form name = "asignar-habitacion"  action="asignar-habitacion.php" method="post">
                	      <ul>
                	        <li>
                	          <p class="left">
                	            <label for="localizador">Localizador<span class="rojo" id = "aviso_localizador">*</span></label>
                	            <select for="localizador" name="localizador">
                	            
                	              <?php
                	                  
                	                for ($i = 0; $i < $this->contenedorReservas->getSize() ; $i++) {
                	                    
                	                  $reserva = $this->contenedorReservas->getReserva($i);
                	                  $localizador = $reserva->getLocalizador();
                	                  
                	                  echo '<option value="';
                	                  echo "$localizador";
                	                  echo '">';
                	                  
                	                  
                	                  echo "$localizador";
                	                  
                	                  echo "</option>";
                	                }
                	              ?>
                	            </select>
                	          </p>
                	          <p class="pull-right">
                	            <label for="habitacion_asignada">Habitación a asignar<span class="rojo" id = "aviso_habitacion_asignada"></span></label>
                	            <select for="habitacion_asignada" name="habitacion_asignada">
                	            	<?php
                	            	  for ($i = 1; $i < $this->contenedorHabitacionesFisicas->getSize() ; $i++) {
                	            	      $habitacionFisica = $this->contenedorHabitacionesFisicas->getHabitacionFisica($i);
                	                  $numero = $habitacionFisica->getNumero();
                	                  $tipo = $habitacionFisica->getTipo();
                	                  
                	            	    echo '<option value="';
                	                  echo "$numero";
                	                  echo '">';
                	                  
                	                  
                	                  if ($tipo == 1)
                	                    $tipo = "Habitación Triple";
                	                 else if ($tipo == 2)
                	                    $tipo = "Habitación Twin";
                	                 else if ($tipo == 3)
                	                    $tipo = "Habitación Superior";
                	                  echo "Habitación Nº $numero - Tipo [$tipo]";
                	                  
                	                  echo "</option>";
                	            	  }
                	            	
                	            	?>
                	            </select>
                	          </p>
                	        </li>
                	        
                	        <li>
                	           
                	          <input class="border-box btn btn-submit" type="submit" id= "btn" value="ASIGNAR HABITACIÓN"/>
                	   
                	        </li>
                	        
                	      </ul>
                	     
                	    </form>
                	     
                	  </div>
                	</div>
                	<div class="black-divider">
                </div>
            <?php
            
        }
        
    }

?>