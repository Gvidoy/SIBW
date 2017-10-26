<?php 
    
    include "class.ContenedorHabitaciones.php";
    include "class.ContenedorActividades.php";
    include "class.VistaHabitacion.php";
    include "class.VistaActividad.php";
    include "class.VistaTablaMisReservas.php";
    include "class.ContenedorReservas.php";
    include "class.VistaTablaReservasPendientes.php";
    include "class.VistaTablaTodasLasReservas.php";
    include "class.VistaFormularioReserva.php";
    include "class.VistaModificarHabitaciones.php";
    include "class.VistaModificarActividades.php";
    include "class.ContenedorHabitacionesFisicas.php";
    
    include "class.VistaEstatica.php";
    
    class ControladorContenido {
        private $sec;
        private $sec2;
        
        public function ControladorContenido( $s , $s2) {
            if ($s == ''){
        
                $this->sec = "hotel";
     
            } else {
                $this->sec = strtolower( $s );
                $this->sec2 = $s2;
            }
        }
        
        public function crear(){
            if ($this->sec == 'misreservas'){
                if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true))
                    if ($_SESSION['admin'] == true ){
                        $contenedorReservas = new ContenedorReservas($_SESSION['nif']);
                        $contenedorHabitacionesFisicas = new ContenedorHabitacionesFisicas();
                        $vistaTablaReservasPendientes = new VistaTablaReservasPendientes($contenedorReservas,$contenedorHabitacionesFisicas);
                        $vistaTablaReservasPendientes->mostrar();
                        
                        /* -- Tabla de todas las reservas - nif - nombre (Para AJAX) -- */
                        
                        $vistaTablaTodasLasReservas = new VistaTablaTodasLasReservas( $contenedorReservas, '' );
                        $vistaTablaTodasLasReservas->mostrarBusqueda();
                        $vistaTablaTodasLasReservas->mostrar();
                        
                        /* ------------------------------------------------------------ */
                        
                        $contenedorHabitaciones = new ContenedorHabitaciones();
                        $vistaModificarHabitaciones = new VistaModificarHabitaciones($contenedorHabitaciones);
                        $vistaModificarHabitaciones->mostrar();
                        $contenedorActividades = new ContenedorActividades();
                        $vistaModificarActividades = new VistaModificarActividades($contenedorActividades);
                        $vistaModificarActividades->mostrar();
                    }else{
                        $contenedorReservas = new ContenedorReservas($_SESSION['nif']);
                        $vistaTablaMisReservas = new VistaTablaMisReservas($contenedorReservas);
                        $vistaTablaMisReservas->mostrar();
                    }
                       
                else
                    include "login-registro.php";
            } else if ($this->sec == 'reservar') {
                if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)){
                    $contenedorActividades = new ContenedorActividades();
                    $contenedorHabitaciones = new ContenedorHabitaciones();
                    $vistaFormularioReserva = new VistaFormularioReserva($contenedorHabitaciones,$contenedorActividades);
                    $vistaFormularioReserva->mostrar();
                } else {
                    include "login-registro.php";
                }
            } else if ($this->sec == 'actividades'){
                $contenedorActividades = new ContenedorActividades();
                
                $vistaActividad = new VistaActividad();
                
                if ($this->sec2 == '') {
                    $vistaActividad->mostrarTodas($contenedorActividades);
                } else {
                    $vistaActividad->mostrarIndividual($contenedorActividades->getActividad($this->sec2));
                }
            } else if ($this->sec == 'habitaciones'){
                $contenedorHabitaciones = new ContenedorHabitaciones();
                
                $vistaHabitacion = new VistaHabitacion();
                
                if ($this->sec2 == '') {
                    $vistaHabitacion->mostrarTodas($contenedorHabitaciones);
                } else {
                    $vistaHabitacion->mostrarIndividual($contenedorHabitaciones->getHabitacion($this->sec2));
                }
            }else if ($this->sec == 'contacto'){
                $contenedorHotel = new ContenedorHoteles();
                $vistaEstatica = new VistaEstatica($contenedorHotel->getHotel(1)->getContacto_html());
                $vistaEstatica->mostrar();
            } else if ($this->sec == 'servicios'){
                $contenedorHotel = new ContenedorHoteles();
                $vistaEstatica = new VistaEstatica($contenedorHotel->getHotel(1)->getServicios_html());
                $vistaEstatica->mostrar();
            } else if ($this->sec == 'salir') {
                include "salir.php";
            } else {
                $contenedorHotel = new ContenedorHoteles();
                $vistaEstatica = new VistaEstatica($contenedorHotel->getHotel(1)->getHotel_html());
                $vistaEstatica->mostrar();
            }
        }   
    
    
}
?>

