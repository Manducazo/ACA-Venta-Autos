<?php

include("conexion.php");

  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];
  $cantidad = $_POST["cantidad"];
  $sql = "INSERT INTO productos (id, nombre, descripcion, precio, cantidad) VALUES ($id, '$nombre', '$descripcion', $precio, $cantidad)";

    if ($conn->query($sql) === TRUE) {
    echo "Producto registrado con éxito.";
    } 

    else {
    echo "Error al registrar el producto: " . $conn->error;
    }

$conn->close();
?>