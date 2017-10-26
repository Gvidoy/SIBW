<?php
session_start();

include "class.ContenedorReservas.php";

include ("./conexionDB.php");

    $loc = $_POST[localizador];
    $num = $_POST[habitacion_asignada];
    
	
	$contenedorReservas = new ContenedorReservas($_SESSION['nif']);
	$contenedorReservas->asignarHabitacion($loc,$num);
      
 mysqli_close($GLOBALS['conn'])
?>