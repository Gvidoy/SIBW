<?php

    class VistaTablaMisReservas{
        
        private $contenedorReservas;
        
        public function VistaTablaMisReservas ( $contR ){
            $this->contenedorReservas = $contR;
          
        }
        
        public function mostrar () {
            ?>
                <script src="js/validacion.js"></script>
                <!--script src="js/validacionRegistro.js"></script-->
                <div id="content">
                	<div class="border-box container caja-reservas tabla-reservas">
                	  <div class="border-box row contact-header centrado">
                			<h2>Estas son tus reservas &nbsp;</h2>
                
                		
                	  </div>
                	  <div class="border-box row contact-body">
                	  	
                		<table>
                      <caption>Reservas de <?php $correo = $_SESSION['mail']; echo "$correo"; ?></caption>
                      <thead>
                        <tr>
                          <th scope="col">Fecha Inicio</th>
                          <th scope="col">Fecha Fin</th>
                          <th scope="col">Tipo de Habitación</th>
                          <th scope="col">Actividad</th>
                          <th scope="col">Precio total</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td colspan="3">Recuerde que en ningún caso recibirá una habitación de gama inferior a la deseada</td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php
                            for ($i=0; $i<$this->contenedorReservas->getSize(); $i++){
                                $reserva = $this->contenedorReservas->getReserva($i);
                                $fechaInicio = $reserva->getFecha_inicio();
                                $fechaFin = $reserva->getFecha_fin();
                                $tipoHabitacion = $reserva->getId_tipo_deseadoToString();
                                $promocion = $reserva->getId_actividadToString();
                                $precioTotal = $reserva->getPrecio_total();
                                
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
                    
                                echo '</tr>';
                            }
                        ?>
                      </tbody>
                    </table>
                	     
                	  </div>
                	</div>
                	<div class="black-divider">
                </div>
            <?php
            
        }
        
    }

?>