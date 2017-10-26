<?php

    include "class.Hotel.php";
    
    class ContenedorHoteles {
        private $lista;
        
        public function ContenedorHoteles(){
            $this->lista = array();
            
            $sql = "SELECT * FROM Hotel";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
               $cont = 1;
                while($fila = $result->fetch_row()){
                    $hotel = new Hotel($fila[0], $fila[1], $fila[2], $fila[3], $fila[4],$fila[5],$fila[6], $fila[7], $fila[8], $fila[9],$fila[10]);
                    $this->lista[$cont] = $hotel;
                    $cont++;
                }
            }
        }
        
        public function getHotel( $s2 ){
            return $this->lista[$s2];
        }
        
        public function sizeHoteles(){
            return count($this->lista);
        }
    }

?>