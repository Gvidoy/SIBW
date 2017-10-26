<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $mail = $_SESSION['mail'];
    //echo "$mail";
} else {
    //echo "NO TIENE SESION";
   //echo "Esta pagina es solo para usuarios registrados.<br>";
   //echo "<br><a href='login.html'>Login</a>";
   //echo "<br><br><a href='index.html'>Registrarme</a>";

//exit;
}
include ("./conexionDB.php");

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

//echo "Su sesion a terminado,
//<a href='login.html'>Necesita Hacer Login</a>";
//exit;
}
?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Hotel Plaza Nueva</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="template.css" />
<link rel="stylesheet" type="text/css" href="./fontawesome/css/font-awesome.min.css" />

</head>
<body>


    <?php
        include 'functions.php';
        $sec = $_GET["sec"];
        $sec2 = '';
        
        if ($_GET["hab"]==''){
            $sec2 = $_GET["act"];
        } else if ($_GET["act"]==''){
            $sec2 = $_GET["hab"];
        }
            
        include "class.ControladorPrincipal.php";
        
        $controladorPrincipal = new ControladorPrincipal($sec,$sec2);
        $controladorPrincipal->crear();
   
   
    mysqli_close($GLOBALS['conn']) 

    ?>
 

</body>
</html>