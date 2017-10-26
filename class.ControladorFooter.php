	<?php 
	
	//*
	include "class.VistaFooter.php";
	class ControladorFooter {
		
		public function ControladorFooter() {}
		
		public function crear(){
			$contenedorHoteles = new ContenedorHoteles();
			$vistaFooter = new VistaFooter ($contenedorHoteles);
			$vistaFooter->mostrar();
		}
	}
	//*/

?>