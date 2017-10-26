<?php
session_start();

include "class.ContenedorHabitaciones.php";

include ("./conexionDB.php");

    $id = $_POST[id_habitacion_selector];
    $celda = $_POST[cambio];
    $valor = $_POST[nuevo];
	
	$contenedorHabitaciones = new ContenedorHabitaciones();
	$contenedorHabitaciones->modificarValor($id,$celda,$valor);
      
 mysqli_close($GLOBALS['conn'])
?>