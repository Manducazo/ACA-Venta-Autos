<?php

include("conexion.php");

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli -> connect_error) {
	
	echo "No hay conexion";
	echo "El error es" .mysqli -> connect_error."<br>";
	exit;
}

else {

	echo "Conexion exitosa";

	$Codigo = $_POST['Codigo'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Direccion = $_POST['Direccion'];
	$Correo = $_POST['Correo'];
	$Telefono = $_POST['Telefono'];

	$sql = "INSERT INTO contactos values ('".$Codigo."','".$Nombre."','".$Apellido."','".$Direccion."','".$Correo."','".$Telefono."')";
	$mysqli ->query($sql);
	echo "Datos almacenados";
	$mysqli -> close();

}

?>