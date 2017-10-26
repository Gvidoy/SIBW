<?php

    
    include "class.phpmailer.php";
    include "class.smtp.php";

    /*Atributos para el correo que se va a enviar*/
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $destinatario = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    
    //Configuracion de cuenta para probar
    
    $usuario = 'XXXX@gmail.com';
    $usuarioNombre = 'practica3';
    $pass = 'Contraseñadecorreo';




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
    $correo->MsgHTML($nombre.' '.$apellidos.', con teléfono '.$telefono.', ha enviado el siguiente mensaje:<br><br>'.$mensaje);
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
        $correo->MsgHTML('Ha enviado el siguiente mensaje al Hotel Plaza Nueva:<br><br>'.$mensaje.'<br><br>Gracias por su tiempo. Nos pondremos en contacto con usted en menos de 48 horas laborables.');
        //$correo->AddAddress('g.vidoy@gmail.com', 'grego');
        $correo->AddAddress($destinatario, $nombre.' '.$apellidos);
        
        if(!$correo->Send())
        {
            echo('<script type="text/javascript">alert("Ha ocurrido un error al enviar el mensaje");</script>');
            echo('<script type="text/javascript">location.href="index.php?sec=contacto";</script>');
        }
        else
        {
            echo('<script type="text/javascript">alert("GRACIAS POR PONERSE EN CONTACTO CON NOSOTROS");</script>');
            echo('<script type="text/javascript">location.href="index.php?sec=contacto";</script>');
        }
        
    }
?>