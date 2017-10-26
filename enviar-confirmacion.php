<?php

    include "class.phpmailer.php";
    include "class.smtp.php";

    /*Atributos para el correo que se va a enviar*/
    $nombre = $_SESSION['nombre'];//$_POST['nombre'];
    $apellidos = $_SESSION['apellidos'];//$_POST['apellidos'];
    $destinatario = $_SESSION['mail'];//$_POST['mail'];
    


    
    $mensaje = "Gracias por realizar la reserva de su habitacion en la fecha de inicio: {$_POST[fecha_inicio]} y fecha de fin {$_POST[fecha_fin]}. Le recoradamos que puede consultar su reserva en el aparatodo mis reservas de la web .Le deseamos una bonita estancia.";//$_POST['mensaje'];
    
    //Configuracion de cuenta para probar
    
    $usuario = 'siwbp3@gmail.com';
    $usuarioNombre = 'practica3';
    $pass = 'contrasenaCONTRASENA1234';




    // Mando primero el correo a nosotros mismos

    // Sección de configuracion del mensaje y el SMTP
    $correo = new PHPMailer();
    $correo->IsSMTP();
    $correo->CharSet = 'UTF-8';
    $correo->SMTPAuth = true;
    $correo->SMTPSecure = 'ssl';
    $correo->Host = 'smtp.gmail.com ';
    $correo->Port = 465;
    $correo->Username = $usuario;
    $correo->Password = $pass;

    // Sección del mensaje en sí y su estilo
    $correo->SetFrom($usuario, $usuarioNombre);
    $correo->AddReplyTo($usuario, $usuarioNombre);
    $correo->Subject = '[Contacto] Mensaje de '.$nombre.' '.$apellidos;
    $correo->MsgHTML($nombre.' '.$apellidos.', Ha realizado una reserva:<br><br>'.$mensaje);
    $correo->AddAddress($usuario, $usuarioNombre);

   if(!$correo->Send())
    {
        echo('<script type="text/javascript">alert("Ha ocurrido un error al enviar el mensaje");</script>');
        echo('<script type="text/javascript">location.href="index.php?sec=contacto";</script>');
    }
    else
    {
        // Sección de configuracion del mensaje y el SMTP
        $correo = new PHPMailer();
        //$correo->SMTPDebug = 2;
        $correo->IsSMTP();
        $correo->CharSet = 'UTF-8';
        $correo->SMTPAuth = true;
        $correo->SMTPSecure = 'ssl';
        $correo->Host = 'smtp.gmail.com ';
        $correo->Port = 465;
        $correo->Username =  $usuario;
        $correo->Password = $pass;

        // Sección del mensaje en sí y su estilo
        $correo->SetFrom($usuario, $usuarioNombre);
        //$correo->AddReplyTo('g.vidoy@gmail.com', 'grego');
        $correo->AddReplyTo($destinatario, $nombre.' '.$apellidos);
        $correo->Subject = '[Contacto] Mensaje del Hotel Plaza Nueva';
        $correo->MsgHTML(''.$mensaje.'<br><br>');
        //$correo->AddAddress('g.vidoy@gmail.com', 'grego');
        $correo->AddAddress($destinatario, $nombre.' '.$apellidos);
        
        if(!$correo->Send())
        {
            echo('<script type="text/javascript">alert("Ha ocurrido un error al enviar el mail de confirmacion);</script>');
            //echo('<script type="text/javascript">location.href="index.php?sec=contacto";</script>');
        }
        else
        {
            echo('<script type="text/javascript">alert("Mail de confirmacion enviado");</script>');
            echo('<script type="text/javascript">location.href="index.php?sec=misreservas";</script>');
            //echo('<script type="text/javascript">location.href="index.php?sec=contacto";</script>');
        }
        
    }
?>