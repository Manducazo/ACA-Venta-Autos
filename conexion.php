<?php

//Variables para iniciar sesion en mysql
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "venta_autos";


//Codigo para conectar a la base de datos
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn) {
	
	die("No hay conexion:" .mysqli_connect_error());
}

?>