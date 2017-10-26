<?php

    include "class.Habitacion.php";
    
    class ContenedorHabitaciones {
        private $lista;
        
        public function ContenedorHabitaciones(){
            $this->lista = array();

            $sql = "SELECT * FROM TipoHabitacion";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
               $cont = 1;
                while($fila = $result->fetch_row()){
                    $habitacion = new Habitacion($fila[0], $fila[1], $fila[2], $fila[3], $fila[4], $fila[5]);
                    $this->lista[$cont] = $habitacion;
                    $cont++;
                }
            }
            

        
        }
        
        public function getHabitacion( $s2 ){
            return $this->lista[$s2];
        }
        
        public function getSize(){
            return count($this->lista);
        }
        
        public function modificarValor($id,$celda,$dato){
            echo('<script type="text/javascript">alert("Modificando")</script>');
            
            $query = "UPDATE  `BD_Hotel`.`TipoHabitacion` SET  `$celda` =  '$dato' WHERE  `TipoHabitacion`.`id` ='$id'";
            
            
            if (!mysqli_query($GLOBALS['conn'], $query) )
            {
                die('Error: ' . mysqli_error());
                echo('<script type="text/javascript">alert("Error al MODIFICAR LA HABITACION")</script>');
            }else{
                echo('<script type="text/javascript">alert("Habitacion modificada correctamente Correctamente")</script>');
                echo('<script type="text/javascript">location.href="index.php?sec=misreservas";</script>');
      
            }

        }
    }

?>