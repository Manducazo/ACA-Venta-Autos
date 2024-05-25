<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/INDEX.css">
    <title>Visualizar Ventas - Farmacia Descuentos del Edén</title>
    <style>
        /* Puedes incluir tus estilos aquí o en un archivo CSS externo */
    </style>
</head>
<body>

    <header>
        <h1>FARMACIA DESCUENTOS DEL EDEN</h1>
    </header>

    <section>
        <h1>Visualizar Ventas</h1>

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

        // Consulta para obtener las ventas
        $sql_ventas = "SELECT fecha, cc_cliente, nombre_cliente, id_producto, nombre_producto, cantidad, precio_producto, precio_final FROM ventas";
        $result_ventas = $conn->query($sql_ventas);

        if ($result_ventas->num_rows > 0) {
            // Mostrar los resultados en una tabla
            echo "<table border='1'>
                    <tr>
                        <th>Fecha</th>
                        <th>Cédula Cliente</th>
                        <th>Nombres Cliente</th>
                        <th>ID Producto</th>
                        <th>Nombre Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Precio Final</th>
                    </tr>";

            while($row = $result_ventas->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["fecha"]."</td>
                        <td>".$row["cc_cliente"]."</td>
                        <td>".$row["nombre_cliente"]."</td>
                        <td>".$row["id_producto"]."</td>
                        <td>".$row["nombre_producto"]."</td>
                        <td>".$row["cantidad"]."</td>
                        <td>".$row["precio_producto"]."</td>
                        <td>".$row["precio_final"]."</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No hay ventas registradas.";
        }

        // Cerrar la conexión
        $conn->close();
        ?>

    </section>

    <footer>
        <p>@Pagina Creada Por el estudiante Manuel Abraham Vergara Urango de Ingeniería de sistemas</p>
    </footer>

</body>
</html>