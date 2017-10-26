<?php

    class VistaSidebar{
        private $sec;
        
        public function VistaSidebar($s){
            $this->sec = $s;
        }
        
        public function mostrarSlider(){
            echo '<script src="js/slider.js" type="text/javascript"></script>';
            echo '
                <div class="slider-container">
                    <div class="image-slider-wrapper">
                	    <ul id="image_slider">
                		    <a href="http://www.alhambragranada.org/index.php"><li><img src="images/alhambra-slider.jpg"></li></a>
                		    <a href="http://sierranevada.es/es/"><li><img src="images/sierra-slider.jpg"></li></a>
                		    <a href="http://www.granadaelectricbike.com/"><li><img src="images/segway-slider.jpg"></li></a>
                	    </ul>			
                    </div>
                </div>
            ';
        }
        
        public function mostrarContactoSidebar($hotel){
            if ($this->sec != 'contacto') {
                echo '
    				<div id="contacto-sidebar">
    				<a class="contact-social" href="https://www.facebook.com/Hotel-Plaza-Nueva-176542882374100/?fref=ts"><i class=" fa fa-facebook fbhover "></i></a>
    				<a class="contact-social" href="#"><i class=" fa fa-twitter twhover"></i></a>
    			';
    			
    			$nombre = $hotel->getNombre();
    			$direccion = $hotel->getDireccion();
    			$telefono = $hotel->getTelefono();
    			$fax = $hotel->getFax();
    			$email = $hotel->getEmail();
        			
        		echo "<br>$nombre<br>";
        		echo "$direccion<br>";
        		echo "$telefono $fax <br>";
        		echo "$email";
    			
    			echo "</div>";
            }
            echo "</div>";
        }
    }
?>