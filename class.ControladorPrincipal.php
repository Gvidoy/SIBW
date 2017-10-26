
<?php 
	/*
<div id="footer">
		<div class="left">Hotel Plaza Nueva<br>
Imprenta, nº 2. 18010 Granada, Granada, España<br>
Teléfono: +34 958 215 273. ,	Fax: +34 958 225 765<br>
<a>info@hotel-plazanueva.com</a></div>
		<div id="copyright" class="right">&copy;Powered by Miguel Medina and Gregorio Vidoy</div>
</div>
	*/

	
	//*
	class ControladorPrincipal {
		private $sec;
		private $sec2;
		
		public function ControladorPrincipal($s, $s2) {
			$this->sec = $s;
			$this->sec2= $s2;
		}
		
		public function crear(){
			include 'class.ControladorHeader.php';
        
        $controladorHeader = new ControladorHeader($this->sec);
        $controladorHeader->crear();
                
        include 'class.ControladorSidebar.php';
        
        $controladorSidebar = new ControladorSidebar($this->sec,$this->sec2);
        $controladorSidebar->crear();
                
        include 'class.ControladorContenido.php';
        
        $controladorContenido = new ControladorContenido($this->sec, $this->sec2);
        $controladorContenido->crear();
                
        
        include 'class.ControladorFooter.php';
        
        $controladorFooter = new ControladorFooter();
        $controladorFooter->crear();
		}
	}
	//*/

?>