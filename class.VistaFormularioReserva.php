<?php

    class VistaFormularioReserva{
        
        private $contenedorHabitaciones;
        private $contenedorActividades;
        
        public function VistaFormularioReserva ( $contH, $contA ){
            $this->contenedorHabitaciones = $contH;
            $this->contenedorActividades = $contA;
        }
        
        public function mostrar () {
            ?>
                <div id="content">
                	<div class="border-box container caja-reservar">
                	  <div class="border-box row contact-header centrado">
                			<h2>¡REALIZA TU RESERVA AHORA! &nbsp;</h2>
                
                		
                	  </div>
                	  <div class="border-box row contact-body">
                	  	
                		
                	    <form name = "reservar"  action="registrar-reserva.php" method="post">
                	      <ul>
                	        <li>
                	          <p class="left">
                	            <label for="inicio">Fecha de inicio<span class="rojo" id = "aviso_inicio">*</span></label>
                	            <input class="border-box" value="<?php echo date('Y-m-d'); ?>" type="date" name="fecha_inicio" id = "fecha-inicio" placeholder="dd/mm/aaaa" />
                	          </p>
                	          <p class="pull-right">
                	            <label for="fin">Fecha de fin <span class="rojo" id = "aviso_fin">*</span></label>
                	            <input class="border-box" value="<?php echo date('Y-m-d'); ?>" type="date" name="fecha_fin" id = "fecha-fin" placeholder="dd/mm/aaaa" />
                	          </p>
                	        </li>
                	        <li>
                	          <p class="left">
                	            <label for="inicio">Tipo de Habitación<span class="rojo" id = "aviso_habitacion">*</span></label>
                	            <select for="inicio" name="tipo_habitacion_selector">
                	            
                	              <?php
                	                  
                	                for ($i = 1; $i <= $this->contenedorHabitaciones->getSize() ; $i++) {
                	                  echo '<option value="';
                	                  echo "$i";
                	                  echo '">';
                	                  
                	                  $habitacion = $this->contenedorHabitaciones->getHabitacion($i);
                	                  $nombre = $habitacion->getNombre();
                	                  echo "$nombre";
                	                  
                	                  echo "</option>";
                	                }
                	              ?>
                	            </select>
                	          </p>
                	          <p class="pull-right">
                	            <label for="inicio">Actividad<span class="rojo" id = "aviso_actividad"></span></label>
                	            <select for="inicio" name="actividad_selector">
                	            	<?php  
                	            	    echo '<option value="0">No reservar actividad</option>';
                	                for ($i = 1; $i <= $this->contenedorActividades->getSize() ; $i++){
                	                  echo '<option value="';
                	                  echo "$i";
                	                  echo '">';
                	                  
                	                  $nombre = $this->contenedorActividades->getActividad($i)->getNombre();
                	                  echo "$nombre";
                	                  
                	                  echo "</option>";
                	                }
                	              ?>
                	            </select>
                	          </p>
                	        </li>
                	        	<p class ="centrado" >
                	        		<span class = "rojo" id = "resumen"> </span>
                	 				<span class = "azul" id = "correcto"> </span>
                	        	</p>
                	        </li>
                	        
                	        <li>
                	           
                	          <input class="border-box btn btn-submit" type="submit" id= "btn" value="RESERVAR"/>
                	   
                	        </li>
                	        
                	      </ul>
                	     
                	    </form>  
                	  </div>
                	</div>
                	<div class="black-divider">
                </div>
            <?php
            
        }
        
    }

?>