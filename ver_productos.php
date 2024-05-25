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

// Consulta para obtener todos los productos
$sql = "SELECT id, nombre, descripcion, precio, cantidad FROM productos";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/INDEX.css">
    <title>Visualizar Productos - Farmacia Descuentos del Edén</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td.description {
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
</head>
<body>

    <header>
        <h1>FARMACIA DESCUENTOS DEL EDEN</h1>
    </header>

    <nav>
        <!-- Menú de navegación -->
    </nav>

    <section>
        <h1>Productos Disponibles</h1>

        <?php
        // Mostrar productos desde la base de datos
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Cantidad</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td class='description' title='" . $row["descripcion"] . "'>" . $row["descripcion"] . "</td>";
                echo "<td>$" . $row["precio"] . "</td>";
                echo "<td>" . $row["cantidad"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No hay productos disponibles.";
        }
        ?>

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