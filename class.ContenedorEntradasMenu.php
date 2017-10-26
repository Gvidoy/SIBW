<?php

    include "class.EntradaMenu.php";
    
    class ContenedorEntradasMenu {
        private $lista;
        private $subLista1;
        private $subLista2;

        
        
        public function ContenedorEntradasMenu(){
            $this->lista = array();
            $this->subLista1 = array();
            $this->subLista2 = array();
            
            $sql = "SELECT * FROM EntradaMenu";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
               $cont = 1;
                while($fila = $result->fetch_row()){
                    $entradaMenu = new EntradaMenu($fila[1], $fila[2]);
                    $this->lista[$cont] = $entradaMenu;
                    $cont++;
                }
            }
            
            $sql = "SELECT * FROM TipoHabitacion";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
               $cont = 1;
                while($fila = $result->fetch_row()){
                    $entradaMenu = new EntradaMenu($fila[5], $fila[0]);
                    $this->subLista1[$cont] = $entradaMenu;
                    $cont++;
                }
            }
            
            $sql = "SELECT * FROM Actividad";
            
            if ($result = $GLOBALS['conn']->query($sql)) { 
               $cont = 1;
                while($fila = $result->fetch_row()){
                    $entradaMenu = new EntradaMenu($fila[7], $fila[0]);
                    $this->subLista2[$cont] = $entradaMenu;
                    $cont++;
                }
            }
        }
        
        public function getEntradaMenu( $e2 ){
            return $this->lista[$e2];
        }
        
        public function getEntradaSubMenu1( $e2 ){
            return $this->subLista1[$e2];
        }
        public function getEntradaSubMenu2( $e2 ){
            return $this->subLista2[$e2];
        }
        
        public function sizeMenu(){
            return count($this->lista);
        }
        
        public function sizeSubMenu1(){
            return count($this->subLista1);
        }
        
        public function sizeSubMenu2(){
            return count($this->subLista2);
        }
    }

?>