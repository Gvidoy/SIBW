<?php
 session_start();

      include "class.VistaTablaTodasLasReservas.php";
      include "class.ContenedorReservas.php";
      include ("./conexionDB.php");
        
      
 
      $buscar = $_POST['b'];
      buscar($buscar);
       
      function buscar($b) {
            
            $contenedorReservas = new ContenedorReservas($_SESSION['nif']);
            
            $vistaTablaTodasLasReservas = new VistaTablaTodasLasReservas( $contenedorReservas, $b );
            $vistaTablaTodasLasReservas->mostrar();
      
      }
       
?>