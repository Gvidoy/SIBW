<?php
session_start();
?>

<?php


include ("./conexionDB.php");

$mail = $_POST['mail'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM Cliente WHERE mail = '$mail'";

//echo "Email= $mail";
//echo "Pass =$password";

$result = $GLOBALS['conn']->query($sql);

//$fila = $result->fetch_row();

//$aux = $fila[6];



if ($result->num_rows == 1) {
 $fila = $result->fetch_row();
 if(password_verify($password, $fila[6])){

 
 $_SESSION['loggedin'] = true;
 $_SESSION['mail'] = $mail;
 $_SESSION['start'] = time();
 $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
 $_SESSION['admin'] = $fila[5];
 $_SESSION['nombre']= $fila[1];
 $_SESSION['apellidos']= $fila[3];
 $_SESSION['nif']= $fila[0];


echo('<script type="text/javascript">alert("Bienvenido  '. $_SESSION['mail'].'")</script>');

 echo('<script type="text/javascript">location.href="index.php?sec=misreservas";</script>');

 } else { 
 echo "Username o Password estan incorrectos.";
 echo('<script type="text/javascript">location.href="index.php?sec=misreservas";</script>');
 }
}else{
 echo('<script type="text/javascript">location.href="index.php?sec=misreservas";</script>');
}
mysqli_close($GLOBALS['conn']) 
?>