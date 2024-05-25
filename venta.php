<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Venta - Farmacia Descuentos del Edén</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #EC610B;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        section {
            background-color: #F3F3F3;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
        }

        input {
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #FFDA63;
            color: black;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        input[type="submit"]:hover {
            background-color: #FFB940;
        }

        footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <h1>FARMACIA DESCUENTOS DEL EDEN</h1>
    </header>

    <section>
        <h1>Realizar Venta</h1>

        <form method="post" action="vender.php">

            <label for="fecha">Fecha:</label>
            <input type="text" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly>

            <label for="cedula">Cédula del Cliente:</label>
            <input type="text" name="cedula" required>

            <label for="nombres">Nombres del Cliente:</label>
            <input type="text" name="nombres" required>

            <label for="id_producto">ID del Producto:</label>
            <input type="text" name="id_producto" required>

            <label for="nombre_producto">Nombre del Producto:</label>
            <input type="text" name="nombre_producto" required>

            <label for="cantidad">Cantidad (Producto):</label>
            <input type="number" name="cantidad" required>

            <label for="precio">Precio (Producto):</label>
            <input type="number" name="precio" required>

            <label for="precio_final">Precio Final:</label>
            <input type="number" name="precio_final" required>

            <input type="submit" value="Realizar Venta">
        </form>

    </section>

    <footer>
        <p>@Pagina Creada Por el estudiante Manuel Abraham Vergara Urango de Ingeniería de sistemas</p>
    </footer>

</body>
</html>