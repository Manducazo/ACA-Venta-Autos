<?php
// Conexión a la base de datos (ajusta estos valores según tu configuración)
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "venta_autos";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/INDEX.css">
    <script src="JS/mostrar.js"></script>
    <title>Productos - Farmacia Descuentos del Edén</title>
    <style>

        .btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .btn-venta {
            background-color: #2ecc71;
        }

        .btn-venta:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

    <header>
        <h1>BIENVENIDO</h1>
    </header>

    <center><nav>
        <ul>
            <li onclick="mostrarSeccion('seccion1')"><a href="#">Productos</a></li>
            <li onclick="mostrarSeccion('seccion2')"><a href="#">Ventas</a></li>
        </ul>
    </nav></center>

    <section id="seccion1">
        <center><h1>Registrar Nuevo Producto</h1></center>

        <center><form method="post" action="reg_producto.php">

            <input type="number" placeholder="ID" name="id"><br><br>
            <input type="text" placeholder="Nombre" name="nombre"><br><br>
            <textarea name="descripcion" placeholder="DESCRIPCION" required></textarea><br><br>
            <input type="number" placeholder="precio" name="precio"><br><br>
            <input type="number" placeholder="cantidad" name="cantidad"><br><br>

            <input type="submit" value="Registrar Producto">
        </form></center>

        <br><br>

        <center><a href="ver_productos.php" class="btn">Ver productos</a></center>

        <br><br><br><br><br><br>

    </section>

    <section id="seccion2">

        <br><br><br>
        <center><a href="venta.php" class="btn btn-venta">Realizar venta</a></center>
        <br><br><br>
        <center><a href="ver_ventas.php" class="btn">Visualizar ventas</a></center>

    </section>

    <footer>
        <p>@Pagina Creada Por el estudiante Manuel Abraham Vergara Urango de Ingeniería de sistemas</p>
    </footer>

</body>
</html>

<?php
// Cerrar la conexión
$conn->close();
?>