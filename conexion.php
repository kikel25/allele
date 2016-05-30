<?php

/*$usario="root";
$passwd="alex";
$servidor="localhost";
$BD="serviciosLibres";*/

$usario="u253135181_movil";
$passwd="drag0n";
$servidor="mysql.hostinger.mx";
$BD="u253135181_servi";

$conexion=mysqli_connect($servidor,$usario,$passwd, $BD)or die("Error al conectarse a la base de datos:".mysqli_error());
//mysql_select_db($BD,$conexion);
?>
