<?php



  // implementada ya en vistaHabitacion
  function echoActive($sec, $actual){
      if (strcmp ($sec , $actual ) == 0)
      {
        echo 'active';
      }
  }
  
  // implementada ya en vistaMenu
  function echoDesactivar($sec, $actual){
      if (strcmp ($sec , $actual ) == 0)
      {
        echo 'desactivar';
      }
  }
  
  function echoSubmenuDesplegado($sec, $actual){
      if (strcmp ($sec , $actual ) == 0)
      {
        echo 'lista-desplegada';
      } else {
        echo 'submenu';
      }
  }
  
  function seccionPredefinida($sec){
    
    if ($sec == ''){
        
        $sec = "hotel";
     
    }
    return $sec;
  }
  
  function echoAlturaContacto($sec, $actual){
      if (strcmp ($sec , $actual ) == 0)
      {
        echo 'altura-contacto';
      }
  }
  
  function mostrarActividad($act){
      $titulo = $GLOBALS['titulo_actividad_'.$act];
      $multimedia = $GLOBALS['multimedia_actividad_'.$act];
      $parrafo = $GLOBALS['parrafo_actividad_'.$act];
      $enlace = $GLOBALS['enlace_actividad_'.$act];
    echo'
      <div class="box sombra centrado h100">
      	<a class="no-visited" href="./index.php?sec=actividades&act='.$act.'"><h4 > '.$titulo.'</h4></a>
      	'.$multimedia.'
      	<p>	
      			'.$parrafo.'
      	</p>
      	<a href = "'.$enlace.'"><button>Mas información</button></a>
      </div>
    ';
  }
  //  YA IMPLEMENTADA EN VISTAHABITACION
  function mostrarHabitacion($hab){
      $titulo = $GLOBALS['titulo_habitacion_'.$hab];
      $multimedia = $GLOBALS['multimedia_habitacion_'.$hab];
      $parrafo = $GLOBALS['parrafo_habitacion_'.$hab];
      $precio = $GLOBALS['precio_habitacion_'.$hab];
    echo'
      <div class="box sombra centrado h100">
      	<a class="no-visited" href="./index.php?sec=habitaciones&hab='.$hab.'"><h4>'.$titulo.'</h4></a>
      	<p class="slogan">
      		'.$parrafo.'
      		'.$multimedia.'
      	</p>
      	
      	<a href = "https://www.tripadvisor.es/Hotel_Review-g187441-d259430-Reviews-Plaza_Nueva_Hotel-Granada_Province_of_Granada_Andalucia.html"><button>Reservar desde '.$precio.'€</button></a>
      </div>
    ';
  }

  
  function mostrarActividadIndividual($act){
      $titulo = $GLOBALS['titulo_actividad_'.$act];
      $multimedia = $GLOBALS['multimedia_actividad_'.$act];
      $parrafo = $GLOBALS['parrafo_actividad_'.$act];
      $enlace = $GLOBALS['enlace_actividad_'.$act];
    echo'
      <div id="individual">
      	<h4 > '.$titulo.'</h4>
      	'.$multimedia.'
      	<p>	
      			'.$parrafo.'
      	</p>
      	<a href = "'.$enlace.'"><button>Más información</button></a>
      </div>
    ';
  }
  
  function mostrarHabitacionIndividual($hab){
  
      $titulo = $GLOBALS['titulo_habitacion_'.$hab];
      //echo $titulo;
      $multimedia = $GLOBALS['multimedia_habitacion_'.$hab];
      //echo $multimedia;
      $parrafo = $GLOBALS['parrafo_habitacion_'.$hab];
      $precio = $GLOBALS['precio_habitacion_'.$hab];
    
    echo'
      <div id="individual" class="indi-hab">
      	<h4>'.$titulo.'</h4>
        '.$multimedia.'
      	<p>
      		'.$parrafo.'
      	</p>
      	<a href = "https://www.tripadvisor.es/Hotel_Review-g187441-d259430-Reviews-Plaza_Nueva_Hotel-Granada_Province_of_Granada_Andalucia.html"><button>Reservar desde '.$precio.'€</button></a>
      </div>
    ';
  }
?>