<?php
session_start();

include "class.ContenedorActividades.php";

include ("./conexionDB.php");

    $id = $_POST[id_actividad_selector];
    $celda = $_POST[cambio];
    $valor = $_POST[nuevo];
	
	$contenedorActividades = new ContenedorActividades();
	$contenedorActividades->modificarValor($id,$celda,$valor);
      
 mysqli_close($GLOBALS['conn'])
?>