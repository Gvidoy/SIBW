<?php

include ("./conexionDB.php");
 
 $form_pass = $_POST['password'];
 
 $hash = password_hash($form_pass, PASSWORD_BCRYPT); 





 $buscarUsuario = "SELECT * FROM Cliente WHERE nif = '$_POST[nif]' ";

 $result = $GLOBALS['conn']->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
  echo('<script type="text/javascript">alert("Ya existe el usuario.")</script>');
  echo('<script type="text/javascript">location.href="index.php?sec=misreservas"</script>');
 }
 else{


      $query = "INSERT INTO Cliente (nif, nombre, apellidos, mail, pass)
      VALUES ('$_POST[nif]','$_POST[nombre]','$_POST[apellidos]','$_POST[mail]','$hash')";
      
      $query2 = "INSERT INTO DatosPago (numero, cod_seguridad , caducidad, nif_cliente)
      VALUES ('$_POST[numero_tarjeta]','$_POST[codigo_tarjeta]','$_POST[fecha_tarjeta]','$_POST[nif]')";
     
      $ok = true;

      if (!mysqli_query($GLOBALS['conn'], $query) )
      {
      $ok = false; 
      die('Error: ' . mysqli_error());
       echo('<script type="text/javascript">alert("Error al crear el Usuario")</script>');
      }
      
      if (!mysqli_query($GLOBALS['conn'], $query2) )
      {
        $ok = false; 
        die('Error: ' . mysqli_error());
        echo('<script type="text/javascript">alert("Error al crear los datos")</script>');
      }
      if($ok == true){
       echo('<script type="text/javascript">alert("Usuario Registrado Correctamente")</script>');
       echo('<script type="text/javascript">location.href="index.php?sec=misreservas";</script>');
      }
      
 }
 mysqli_close($GLOBALS['conn'])
?>