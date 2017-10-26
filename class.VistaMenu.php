<?php

    class VistaMenu{
        private $sec;
        public function VistaMenu( $s ){
            $this->sec = $s;
        }
    
        public function mostrarMenu ( $contenedor ) {
            
            echo '<div id = "cuerpo">';
            
            echo '
            <nav>
                <ul>
            ';
            for ( $i=1 ; $i<=$contenedor->sizeMenu() ; $i++ ){
                $entradaMenu = new EntradaMenu('','');
                $entradaMenu = $entradaMenu->copiaEntradaMenu($contenedor->getEntradaMenu($i));
                $opcion = $entradaMenu->getOpcion();
                $opcionTitulo = $entradaMenu->getOpcionTitulo();
                
                if ($opcion!='salir' || ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true))){

                    ?>
                    		<li <?php if ($opcion == 'habitaciones' || $opcion == 'actividades' ) echo ' class="dropdown"'; ?>><a id="<?php echo"$opcion" ?>" class="navhover <?php $this->echoActive($this->sec, $opcion); ?>" href="./index.php?sec=<?php echo "$opcion"; ?>"><?php echo "$opcionTitulo"; ?></a>
                    <?php
                    
                    if ($opcion == 'habitaciones'){
                        echo '<div class="dropdown-content">';
                        for ($j=1; $j<=$contenedor->sizeSubMenu1(); $j++){
                            $entradaSubMenu = new EntradaMenu('','');
                            $entradaSubMenu = $entradaSubMenu->copiaEntradaMenu($contenedor->getEntradaSubMenu1($j));
                            $subOpcion = $entradaSubMenu->getOpcion();
                            $subOpcionTitulo = $entradaSubMenu->getOpcionTitulo();
                            ?>
                                <a href="./index.php?sec=habitaciones&hab=<?php echo "$subOpcion"; ?>"><?php echo "$subOpcionTitulo"; ?></a>
                            <?php
                        }
                        echo '</div>';
                    }
                    
                    if ($opcion == 'actividades'){
                        echo '<div class="dropdown-content">';
                        for ($j=1; $j<=$contenedor->sizeSubMenu2(); $j++){
                            $entradaSubMenu = new EntradaMenu('','');
                            $entradaSubMenu = $entradaSubMenu->copiaEntradaMenu($contenedor->getEntradaSubMenu2($j));
                            $subOpcion = $entradaSubMenu->getOpcion();
                            $subOpcionTitulo = $entradaSubMenu->getOpcionTitulo();
                            ?>
                                <a href="./index.php?sec=actividades&act=<?php echo "$subOpcion"; ?>"><?php echo "$subOpcionTitulo"; ?></a>
                            <?php
                        }
                        echo '</div>';
                    }
                    
                    echo '</li>';
                }
              
            }
            
            echo '
                </ul>
            </nav>
            ';
        }
        
        public function mostrarMenuSidebar( $contenedor ){
            ?>
                <div id="sidebar" class=" <?php echoAlturaContacto($sec, $opcion5) ?>">
                    <nav class="navigation">
		                <ul class="mainmenu">
            <?php
            
            for ( $i=1 ; $i<=$contenedor->sizeMenu() ; $i++ ){
                $entradaMenu = new EntradaMenu('','');
                $entradaMenu = $entradaMenu->copiaEntradaMenu($contenedor->getEntradaMenu($i));
                $opcion = $entradaMenu->getOpcion();
                $opcionTitulo = $entradaMenu->getOpcionTitulo();

                ?>    
                    <li><a class="<?php $this->echoDesactivar($this->sec, $opcion); ?>" href="./index.php?sec=<?php echo "$opcion"; ?>"><?php echo "$opcionTitulo"; ?></a>
                <?php    
                    
                    if ($opcion == 'habitaciones'){
                        ?>
                            <ul class="<?php $this->echoSubmenuDesplegado($this->sec, $opcion); ?>">
                        <?php
                        for ($j=1; $j<=$contenedor->sizeSubMenu1(); $j++){
                            $entradaSubMenu = new EntradaMenu('','');
                            $entradaSubMenu = $entradaSubMenu->copiaEntradaMenu($contenedor->getEntradaSubMenu1($j));
                            $subOpcion = $entradaSubMenu->getOpcion();
                            $subOpcionTitulo = $entradaSubMenu->getOpcionTitulo();
                            ?>
                                <li class="<?php $this->echoDesactivar($this->sec2, "$j"); ?>"><a href="./index.php?sec=habitaciones&hab=<?php echo "$j"; ?>"><?php echo "$subOpcionTitulo"; ?></a></li>
                            <?php
                        }
                        echo '</ul>';
                    }
                    
                    if ($opcion == 'actividades'){
                        ?>
                            <ul class="<?php $this->echoSubmenuDesplegado($this->sec, $opcion); ?>">
                        <?php
                        for ($j=1; $j<=$contenedor->sizeSubMenu2(); $j++){
                            $entradaSubMenu = new EntradaMenu('','');
                            $entradaSubMenu = $entradaSubMenu->copiaEntradaMenu($contenedor->getEntradaSubMenu2($j));
                            $subOpcion = $entradaSubMenu->getOpcion();
                            $subOpcionTitulo = $entradaSubMenu->getOpcionTitulo();
                            ?>
                                <li class="<?php $this->echoDesactivar($this->sec2, "$j"); ?>"><a href="./index.php?sec=actividades&act=<?php echo "$j"; ?>"><?php echo "$subOpcionTitulo"; ?></a></li>
                            <?php
                        }
                        echo '</ul>';
                    }
                    
                    echo '</li>';
                        
            }
            
            echo '
                    </ul>
	            </nav>
	        ';
        }
        
        private function echoActive($sec, $actual){
              if (strcmp ($sec , $actual ) == 0)
              {
                echo 'active';
              }
        }
        
        private function echoDesactivar($sec, $actual){
            if (strcmp ($sec , $actual ) == 0)
            {
                echo 'desactivar';
            }
        }
        
        private function echoSubmenuDesplegado($sec, $actual){
            if (strcmp ($sec , $actual ) == 0)
            {
                echo 'lista-desplegada';
            } else {
                echo 'submenu';
            }
        }
    }
?>