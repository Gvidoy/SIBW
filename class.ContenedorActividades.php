<?php

    include "class.Actividad.php";
    
    class ContenedorActividades {
        private $lista;
        
        public function ContenedorActividades(){
            $this->lista = array();
            
            $sql = "SELECT * FROM Actividad";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
               $cont = 1;
                while($fila = $result->fetch_row()){
                    $actividad = new Actividad($fila[0], $fila[1], $fila[2], $fila[3], $fila[4],$fila[5],$fila[7] );
                    $this->lista[$cont] = $actividad;
                    $cont++;
                }
            }
        }
        
        public function getActividad( $s2 ){
            return $this->lista[$s2];
        }
        
        public function getSize(){
            return count($this->lista);
        }
        
        public function modificarValor($id,$celda,$dato){
            echo('<script type="text/javascript">alert("Modificando")</script>');
            
            $query = "UPDATE  `BD_Hotel`.`Actividad` SET  `$celda` =  '$dato' WHERE  `Actividad`.`id` ='$id'";
            
            //$query = "UPDATE  `BD_Hotel`.`TipoHabitacion` SET  `$celda` =  '$dato' WHERE  `TipoHabitacion`.`id` ='$id'";

            
            if (!mysqli_query($GLOBALS['conn'], $query))
            {
                die('Error: ' . mysqli_error());
                echo('<script type="text/javascript">alert("Error al MODIFICAR LA ACTIVIDAD")</script>');
            }else{
                echo('<script type="text/javascript">alert("ACTIVIDAD modificada correctamente Correctamente")</script>');
                echo('<script type="text/javascript">location.href="index.php?sec=misreservas";</script>');
      
            }

        }
        
    }

?>