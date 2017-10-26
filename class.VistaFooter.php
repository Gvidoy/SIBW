<?php

    class VistaFooter{
        
        private $contenedorHoteles;
        
        public function VistaFooter ( $contH){
            $this->contenedorHoteles = $contH;
        }
        
        public function mostrar () {
            echo '</div>';
            for($i = 1 ; $i <=1; $i++){
            echo '
            <div id="footer">
    		    <div class="left">'.$this->contenedorHoteles->getHotel($i)->getNombre().'<br>
                    '.$this->contenedorHoteles->getHotel($i)->getDireccion().'<br>
                    Teléfono: +34'.$this->contenedorHoteles->getHotel($i)->getTelefono().' ,	Fax: '.$this->contenedorHoteles->getHotel($i)->getFax().'<br>
                    <a>'.$this->contenedorHoteles->getHotel($i)->getEmail().'</a>
                </div>
    		    <div id="copyright" class="right">
    		    &copy;Powered by Miguel Medina and Gregorio Vidoy
    		    </div>
            </div>
            ';                
            }
        }
        
    }

?>