<?php
// Conexión a la base de datos
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "venta_autos";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$fecha = $_POST["fecha"];
$cedula = $_POST["cedula"];
$nombres = $_POST["nombres"];
$id_producto = $_POST["id_producto"];
$nombre_producto = $_POST["nombre_producto"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$precio_final = $_POST["precio_final"];

// Consulta preparada para insertar la nueva venta
$sql_venta = "INSERT INTO ventas (fecha, cc_cliente, nombre_cliente, id_producto, nombre_producto, cantidad, precio_producto, precio_final) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql_venta);
$stmt->bind_param("ssssssss", $fecha, $cedula, $nombres, $id_producto, $nombre_producto, $cantidad, $precio, $precio_final);

if ($stmt->execute()) {
    echo "Venta realizada con éxito.";
} else {
    echo "Error al realizar la venta: " . $stmt->error;
}

// Cerrar la conexión
$conn->close();
?>