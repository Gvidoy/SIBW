<?php

    include "class.HabitacionFisica.php";
    
    class ContenedorHabitacionesFisicas {
        private $lista;
        
        public function ContenedorHabitacionesFisicas(){
            $this->lista = array();
            
            //$query = "UPDATE  `BD_Hotel`.`TipoHabitacion` SET  `$celda` =  '$dato' WHERE  `TipoHabitacion`.`id` ='$id'";

            //$sql = "SELECT (numero,tipo) FROM Habitacion,Reserva WHERE NOT Habitacion.numero = Reserva.numero_habitacion ";
            
            $sql = "SELECT Habitacion.* FROM Habitacion WHERE Habitacion.numero NOT IN ( SELECT Reserva.numero_habitacion FROM Reserva WHERE Reserva.numero_habitacion IS NOT NULL)";
            
            //$sql = "SELECT * FROM Habitacion, Reserva WHERE ((Habitacion.numero = Reserva.numero_habitacion) AND (Reserva.numero_habitacion IS NOT NULL))";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
               $cont = 1;
                while($fila = $result->fetch_row()){
                    $habitacion = new HabitacionFisica($fila[0], $fila[2]);
                    $this->lista[$cont] = $habitacion;
                    $cont++;
                }
            }
            

        
        }
        
        public function getHabitacionFisica( $s2 ){
            return $this->lista[$s2];
        }
        
        public function getSize(){
            return count($this->lista);
        }
        
    }

?>