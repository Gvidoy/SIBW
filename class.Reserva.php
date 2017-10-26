<?php
    class Reserva{
        private $fecha_inicio;
        private $fecha_fin;
        private $precio_total;
        private $localizador;
        private $numero_habitacion;
        private $id_tipo_deseado;
        private $nif_cliente;
        private $id_actividad;
        private $nombre_cliente;


        
        public function Reserva( $fi, $ff, $pt, $l, $nh, $itd, $nc, $ia, $nom) {
            $this->fecha_inicio = $fi ;
            $this->fecha_fin = $ff;
            $this->precio_total = $pt;
            $this->localizador = $l;            
            $this->numero_habitacion = $nh;
            $this->id_tipo_deseado = $itd;
            $this->nif_cliente = $nc;
            $this->id_actividad = $ia; 
            $this->nombre_cliente = $nom;
        }
        
        public function copiaReserva( $res ) {
            $this->fecha_inicio = $res->fecha_inicio ;
            $this->fecha_fin = $res->fecha_fin;
            $this->precio_total = $res->precio_total;
            $this->localizador = $res->localizador;            
            $this->numero_habitacion =$res->numero_habitacion;
            $this->id_tipo_deseado = $res->id_tipo_deseado;
            $this->nif_cliente = $res->nif_cliente;
            $this->id_actividad = $res->id_actividad;
            $this->nombre_cliente = $res->nombre_cliente;
            
            return $this;
        }
        
        public function getFecha_inicio() {
            return $this->fecha_inicio;
        }    
        
        public function getFecha_fin() {
            return $this->fecha_fin;
        }
        public function getPrecio_total() {
            return $this->precio_total;
        }
        public function getLocalizador() {
            return $this->localizador;
        }
        public function getNumero_habitacion() {
            return $this->numero_habitacion;
        }
        public function getNif() {
            return $this->nif_cliente;
        }
        public function getNombre() {
            return $this->nombre_cliente;
        }
        public function getId_actividad() {
            return $this->id_actividad;
        }
        public function getId_actividadToString() {
            $sql = "SELECT nombre FROM Actividad WHERE id = '$this->id_actividad'";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
                $fila = $result->fetch_row();
                $nombre_act = $fila[0];
            }
            
            return $nombre_act;
        }       
        
        public function getId_tipo_deseado() {
            return $this->id_tipo_deseado;
        }
        
        public function getId_tipo_deseadoToString(){
            
            $sql = "SELECT nombre FROM TipoHabitacion WHERE id = '$this->id_tipo_deseado'";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
                $fila = $result->fetch_row();
                $nombre_tipo = $fila[0];
            }
            
            return $nombre_tipo;
        }
        
    }

?>