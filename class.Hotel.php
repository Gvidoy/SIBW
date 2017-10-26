<?php
    class Hotel{
        private $nif;
        private $direccion;
        private $localidad;
        private $nombre;
        private $telefono;
        private $fax;
        private $email;
        private $hotel_html;
        private $servicios_html;
        private $contacto_html;
        private $administracion_html;
        
        public function Hotel( $n, $d, $l, $no, $t, $f, $e, $h_html, $s_html, $c_html, $a_html) {
            $this->nif = $n;
            $this->direccion = $d;
            $this->localidad = $l;
            $this->nombre = $no;
            $this->telefono = $t;
            $this->fax = $f;
            $this->email = $e;
            $this->hotel_html = $h_html;
            $this->servicios_html = $s_html;
            $this->contacto_html = $c_html;
            $this->administracion_html = $a_html;
        }
        
        public function copiaHotel( $hot ) {
            $this->nif = $hot->nif;
            $this->direccion = $hot->direccion;
            $this->localidad = $hot->localidad;
            $this->nombre = $hot->nombre;
            $this->telefono = $hot->telefono;
            $this->fax = $hot->fax;
            $this->email = $hot->email;
            $this->hotel_html = $hot->hotel_html;
            $this->servicios_html = $hot->servicios_html;
            $this->contacto_html = $hot->contacto_html;
            $this->administracion_html = $hot->administracion_html;
            
            return $this;
        }

        
        public function getNif() {
            return $this->nif;
        }    
        
        public function getDireccion() {
            return $this->direccion;
        }
        
        public function getLocalidad() {
            return $this->localidad;
        }
        
        public function getNombre() {
            return $this->nombre;
        }
        
        public function getTelefono() {
            return $this->telefono;
        }
        public function getFax() {
            return $this->fax;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getHotel_html() {
            return $this->hotel_html;
        }
        public function getServicios_html() {
            return $this->servicios_html;
        }
        public function getContacto_html() {
            return $this->contacto_html;
        }
        public function getAdministracion_html() {
            return $this->administracion_html;
        }
    }

?>