<?php
session_start();

include ("./conexionDB.php");
include ("class.ContenedorHabitaciones.php");
include ("class.ContenedorActividades.php");

    $tipo = $_POST[tipo_habitacion_selector];
    $tipo_actividad = $_POST[actividad_selector];
    
    

    $datetime1 = new DateTime($_POST[fecha_inicio]);
    $datetime2 = new DateTime($_POST[fecha_fin]);
    $interval = $datetime1->diff($datetime2);
   
    
    $dias = ($interval->format('%a') + 1);
    
    
    $contenedorActividades = new ContenedorActividades();
    $contenedorHabitaciones = new ContenedorHabitaciones();
    
    if ($tipo_actividad!=0)
        $actividad = $contenedorActividades->getActividad($tipo_actividad);
    $habitacion = $contenedorHabitaciones->getHabitacion($tipo);
    
    $precio = $habitacion->getPrecio();
    
    $precio = $precio * $dias;
    
    if ($tipo_actividad != 0)
        $precio = $precio + $actividad->getPrecio();
    

	$nif_sesion = $_SESSION['nif'];
	$nombre_cliente = $_SESSION['nombre'];
  
  if ($tipo_actividad != '0'){
      $query = "INSERT INTO Reserva (fecha_inicio,fecha_fin,precio_total,id_tipo_deseado,nif_cliente, id_actividad, nombre_cliente) 
      VALUES ('$_POST[fecha_inicio]','$_POST[fecha_fin]','$precio','$tipo','$nif_sesion','$tipo_actividad','$nombre_cliente')";
  }else{ 
    $query = "INSERT INTO Reserva (fecha_inicio,fecha_fin,precio_total,id_tipo_deseado,nif_cliente,nombre_cliente) 
      VALUES ('$_POST[fecha_inicio]','$_POST[fecha_fin]','$precio','$tipo','$nif_sesion','$nombre_cliente')";
  }
  
  if (!mysqli_query($GLOBALS['conn'], $query) )
  {
    die('Error: ' . mysqli_error());
    echo('<script type="text/javascript">alert("Error al crear reserva")</script>');
  } else {
   echo('<script type="text/javascript">alert("Reserva guardada Correctamente, recibirá un email de confirmación")</script>');
   
   include ("./enviar-confirmacion.php");
   
   //echo('<script type="text/javascript">location.href="enviar-confirmacion.php";</script>');

   echo('<script type="text/javascript">location.href="index.php?sec=misreservas";</script>');
  }
      
 mysqli_close($GLOBALS['conn'])
?>