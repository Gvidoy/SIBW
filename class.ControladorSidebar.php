<!--script src="js/slider.js" type="text/javascript"></script>
<?php 
	$hab = $_GET["hab"];
	$act = $_GET["act"];
?>
<div id="sidebar" class=" <?php echoAlturaContacto($sec, $opcion5) ?>">
	<nav class="navigation">
		
		<ul class="mainmenu">
			<li><a class="<?php echoDesactivar($sec, $opcion1); ?>" href="./index.php?sec=<?php echo "$opcion1"; ?>"><?php echo "$opcion_titulo1"; ?></a></li>
			<li><a class="<?php echoDesactivar($sec, $opcion2); ?>" href="./index.php?sec=<?php echo "$opcion2"; ?>"><?php echo "$opcion_titulo2"; ?></a>
				<ul class="<?php echoSubmenuDesplegado($sec, $opcion2); ?>">
			    	<li class="<?php echoDesactivar($hab, "1"); ?>"><a href="./index.php?sec=habitaciones&hab=1"><?php echo "$nombre_habitacion_1"; ?></a></li>
			     	<li class="<?php echoDesactivar($hab, "2"); ?>"><a href="./index.php?sec=habitaciones&hab=2"><?php echo "$nombre_habitacion_2"; ?></a></li>
			      	<li class="<?php echoDesactivar($hab, "3"); ?>"><a href="./index.php?sec=habitaciones&hab=3"><?php echo "$nombre_habitacion_3"; ?></a></li>
	    		</ul>
			</li>
			<li><a class="<?php echoDesactivar($sec, $opcion3); ?>" href="./index.php?sec=<?php echo "$opcion3"; ?>"><?php echo "$opcion_titulo3"; ?></a></li>
			<li><a class="<?php echoDesactivar($sec, $opcion4); ?>" href="./index.php?sec=<?php echo "$opcion4"; ?>"><?php echo "$opcion_titulo4"; ?></a>
				<ul class="<?php echoSubmenuDesplegado($sec, $opcion4); ?>">
			    	<li class="<?php echoDesactivar($act, "1"); ?>"><a href="./index.php?sec=actividades&act=1"><?php echo "$nombre_actividad_1"; ?></a></li>
			     	<li class="<?php echoDesactivar($act, "2"); ?>"><a href="./index.php?sec=actividades&act=2"><?php echo "$nombre_actividad_2"; ?></a></li>
			      	<li class="<?php echoDesactivar($act, "3"); ?>"><a href="./index.php?sec=actividades&act=3"><?php echo "$nombre_actividad_3"; ?></a></li>
	    		</ul>
			</li>
			<li class="<?php echoDesactivar($sec, $opcion5); ?>"><a class="" href="./index.php?sec=<?php echo "$opcion5"; ?>"><?php echo "$opcion_titulo5"; ?></a></li>
	
		</ul>
	</nav>
	<?php
	
			//include 'slider.php';
	
	?>
	
	<?php
		//if($sec != $opcion5){
	?>
	
		<div id="contacto-sidebar">
		<a class="contact-social" href="https://www.facebook.com/Hotel-Plaza-Nueva-176542882374100/?fref=ts"><i class=" fa fa-facebook fbhover "></i></a>
		<a class="contact-social" href="#"><i class=" fa fa-twitter twhover"></i></a>
	<?php
	
		//echo $contacto;

	//echo "</div>";
	//	}
	?>
	
</div-->

<?php
	///*
	include "class.VistaSidebar.php";
	
	class ControladorSidebar {
		private $sec;
		private $sec2;
		
		public function ControladorSidebar( $s , $s2) {
			$this->sec = $s;
			$this->sec2 = $s2;
		}
		
		public function crear(){
			
			
			$contenedorEntradasMenu = new ContenedorEntradasMenu();
			
            $vistaMenu = new VistaMenu( $this->sec, $this->sec2 );
            $vistaMenu->mostrarMenuSidebar($contenedorEntradasMenu);
            
            $vistaSidebar = new VistaSidebar ( $this -> sec );
            $vistaSidebar->mostrarSlider();
            $contenedorHoteles = new ContenedorHoteles();
            $vistaSidebar->mostrarContactoSidebar($contenedorHoteles->getHotel(1));
			
		}
	}
	//*/

?>
