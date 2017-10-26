<?php
    class ContenedorEntradasDatosCliente {

        private $nif;
        private $nombre;
        private $apellidos;
        private $mail;
        private $admin;
        
        public function ContenedorEntradasDatosCliente($ma){
            $this->mail = $ma;
          
            
            $sql = $sql = "SELECT * FROM Cliente WHERE mail = '$this->mail'";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
                $fila = $result->fetch_row()
                $this->nif = $fila[0];
                $this->nombre = $fila[1];
                $this->apellidos = $fila[2];
                $this->admin = $fila[5];
                
                }
        }
        
        public function getCliente(){
            return $this;
        }
        
        public function getNif(){
            return $this->nif;
        }
        public function getNombre(){
            return $this->nombre;
        }
        
        public function getApellidos(){
            return count($this->apellidos);
        }
        
        public function getMail(){
            return count($this->mail);
        }
        
        public function isAdmin(){
            return count($this->admin);
        }
    }

?>