<?php

    include "class.Reserva.php";
    
    class ContenedorReservas {
        private $lista;
        
        private $lista_todas;
        
        public function ContenedorReservas($n){
            
            $this->lista = array();
            
            if ($_SESSION['admin'] == true){
                $sql = "SELECT * FROM Reserva WHERE numero_habitacion IS NULL";
            } else {
                $sql = "SELECT * FROM Reserva WHERE nif_cliente = '$n' ";
            }
            if ($result = $GLOBALS['conn']->query($sql)) {
               $cont = 0;
                while($fila = $result->fetch_row()){
                    
                    $reserva = new Reserva($fila[0], $fila[1], $fila[2], $fila[3], $fila[4],$fila[5],$fila[6], $fila[7],$fila[8]);
                    $this->lista[$cont] = $reserva;
                    $cont++;
                }
            }
            
        }
        
        function lista_reservas($valor)
		{
		    $aux = array();
		   
			$sql2="SELECT * FROM Reserva WHERE nif_cliente like '%".$valor."%' or nombre_cliente like '%".$valor."%'";
            //$sql3 = "SELECT `nif`,`nombre` FROM Cliente";
        
            
            if ($result2 = $GLOBALS['conn']->query($sql2)) {
               $cont = 0;
                while($fila = $result2->fetch_row()){
                    
                    $reserva = new Reserva($fila[0], $fila[1], $fila[2], $fila[3], $fila[4],$fila[5],$fila[6], $fila[7],$fila[8]);
                    $aux[$cont] = $reserva;
                    $cont++;
                }
            }
            
            $this->lista_todas = $aux;
			
			/*
			$this->conexion->conexion->set_charset('utf8');
			$resultados=$this->conexion->conexion->query($sql);
			$arreglo = array();
			while ($re=$resultados->fetch_array(MYSQL_NUM)) {
				$arreglo[]=$re;
			}
			return $arreglo;
			$this->conexion->cerrar();*/

		}
        
        public function getReserva( $i ){
            return $this->lista[$i];
        }
        
        public function getSize(){
            return count($this->lista);
        }
        
        public function getReservaTodas( $i ){
            return $this->lista_todas[$i];
        }
        
        public function getSizeTodas(){
            return count($this->lista_todas);
        }
        public function asignarHabitacion($loc, $n){
             echo('<script type="text/javascript">alert("Modificando")</script>');
             
             echo "localizador = $loc";
             echo "numero = $n";

            
            $query = "UPDATE  `BD_Hotel`.`Reserva` SET  `numero_habitacion` =  '$n' WHERE  `Reserva`.`localizador` ='$loc'";
            
            if (!mysqli_query($GLOBALS['conn'], $query) )
            {
                die('Error: ' . mysqli_error());
                echo('<script type="text/javascript">alert("Error al Asignar HABITACION")</script>');
            }else{
                echo('<script type="text/javascript">alert("Habitacion asignada correctamente Correctamente")</script>');
                echo('<script type="text/javascript">location.href="index.php?sec=misreservas";</script>');
      
            }
            
        }
        
    }

?>