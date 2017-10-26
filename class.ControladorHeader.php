<?php 
	include "class.ContenedorEntradasMenu.php";
	include "class.VistaMenu.php";
	
	include "class.ContenedorHoteles.php";
	include "class.VistaHeader.php";
	
	///*
	class ControladorHeader {
		private $sec;
		
		public function ControladorHeader( $s ) {
			$this->sec = $s;
		}
		
		public function crear(){
			$contenedorHoteles = new ContenedorHoteles();
			$vistaHeader = new VistaHeader ($contenedorHoteles->getHotel(1)->getNombre(), $contenedorHoteles->getHotel(1)->getLocalidad());
			$vistaHeader->mostrar();
			$contenedorEntradasMenu = new ContenedorEntradasMenu();
            $vistaMenu = new VistaMenu( $this->sec );
            $vistaMenu->mostrarMenu($contenedorEntradasMenu);
		}
	}
	//*/

?>