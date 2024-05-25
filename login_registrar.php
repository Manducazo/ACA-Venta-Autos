<?php

include("conexion.php");

$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Telefono = $_POST['Telefono'];
$Correo = $_POST["Correo"];
$Cuenta = $_POST["Usuario"];
$Contrasena = $_POST["Contrasena"];
$Rol = $_POST['Rol'];

//Login
if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn,"SELECT * FROM usuario WHERE cuenta = '$Cuenta' AND contrasena ='$Contrasena'");
    $nr = mysqli_num_rows($query);
    
    if($nr==1)
    {
        echo "<script> alert('Bienvenido $Nombre'); window.location='Bienvenido.php' </script>";
    }else
    {
        echo "<script> alert('Usuario no existe'); window.location='index.html' </script>";
    }
}

//Registrar
if(isset($_POST["btnregistrar"]))
{
    $sqlgrabar = "INSERT INTO usuario(nombres, apellidos, telefono, correo, cuenta, contrasena, rol) values ('$Nombre','$Apellido',$Telefono,'$Correo','$Cuenta','$Contrasena',$Rol)";
    
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Usuario registrado con exito: $Nombre'); window.location='Index.html' </script>";
    }else 
    {
        echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
    }
}


?>