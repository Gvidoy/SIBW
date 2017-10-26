<?php

    class VistaModificarActividades{
        
        private $contenedorActividades;
        
        public function VistaModificarActividades ( $contA ){
            $this->contenedorActividades = $contA;
        }
        
        public function mostrar () {
            ?>
                <div id="content">
                	<div class="border-box container caja-reservar tabla-modificar-actividades">
                	  <div class="border-box row contact-header centrado">
                			<h2>Cambiar valores de actividades &nbsp;</h2>
                
                		
                	  </div>
                	  <div class="border-box row contact-body">
                	  	<table>
                      <caption>Modificar valores de la base de datos</caption>
                      <thead>
                        <tr>
                          <th scope="col">nombre</th>
                          <th scope="col">titulo</th>
                          <th scope="col">multimedia</th>
                          <th scope="col">parrafo</th>
                          <th scope="col">enlace</th>
                          <th scope="col">precio</th>
                          <th scope="col">id</th>
                        </tr>
                      </thead>
                     
                      <tbody>
                		<?php
                		    for ($i = 1; $i<=$this->contenedorActividades->getSize(); $i++){
                		        $actividad = $this->contenedorActividades->getActividad($i);
                                $nombre = $actividad->getNombre();
                                $titulo = $actividad->getTitulo();
                                $multimedia = $actividad->getMultimedia();
                                $parrafo = $actividad->getParrafo();
                                $enlace = $actividad->getEnlace();
                                $precio = $actividad->getPrecio();
                                $id = $actividad->getId();
                                
                                echo '<tr>';
                                
                                echo '<th scope="row">';
                                echo "$nombre";
                                echo '</th>';
                                
                                echo '<td>';
                                echo "$titulo";
                                echo '</td>';
                                
                                echo '<td>';
                                echo "$multimedia";
                                echo '</td>';
                                
                                echo '<td>';
                                echo "$parrafo";
                                echo '</td>';
                                
                                echo '<td>';
                                echo "$enlace";
                                echo '</td>';
                                
                                echo '<td>';
                                echo "$precio";
                                echo '</td>';
                                
                                echo '<td>';
                                echo "$id";
                                echo '</td>';
                    
                                echo '</tr>';
                		    }
                		    ?>
                		</tbody>
                    </table>
                    <h3>¿Qué actividad quieres modificar?</h3>
                    <form name = "modificar-actividad"  action="modificar-actividad.php" method="post">
                	      <ul>
                	        <li>
                	          <p class="left">
                	            <label for="id_actividad">ID Actividad<span class="rojo" id = "aviso_actividad">*</span></label>
                	            <select for="id_actividad" name="id_actividad_selector">
                	            
                	              <?php
                	                  
                	                for ($i = 1; $i <= $this->contenedorActividades->getSize() ; $i++) {
                	                  echo '<option value="';
                	                  echo "$i";
                	                  echo '">';
                	                  
                	                  $actividad = $this->contenedorActividades->getActividad($i);
                	                  $id = $actividad->getId();
                	                  echo "$id";
                	                  
                	                  echo "</option>";
                	                }
                	              ?>
                	            </select>
                	          </p>
                	          <p class="pull-right">
                	            <label for="cambio">Valor a cambiar<span class="rojo" id = "aviso_cambio"></span></label>
                	            <select for="cambio" name="cambio">
                	            	<option value="nombre">nombre</option>
                	            	<option value="titulo">titulo</option>
                	            	<option value="multimedia">multimedia</option>
                	            	<option value="parrafo">parrafo</option>
                	            	<option value="enlace">enlace</option>
                	            	<option value="precio">precio</option>
                	            </select>
                	          </p>
                	        </li>
                	        <li>
                	          <p class="left">
                	            <label for="nuevo_valor">Nuevo valor<span class="rojo" id = "aviso_nuevo_valor">*</span></label>
                	            <input class="border-box campo-modificar" type="text" name="nuevo" id = "nuevo-valor" />
                	          </p>
                	          
                	        </li>
                	        
                	        <li>
                	           
                	          <input class="border-box btn btn-submit" type="submit" id= "btn" value="CAMBIAR VALOR"/>
                	   
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