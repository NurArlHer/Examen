<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado del Simulador - CyberAnimals</h1>
    <?php
    $nombre = $_POST['nombre'];
    $producto = $_POST['producto'];
    $marca = $_POST['marca'];
    $unidades = $_POST['cantidad'];
    $precio=0;

    switch ($producto){
        case "pienso":
            switch ($marca){
                case "marca1":
                    $precio = $unidades * 35;
                    break;
                case "marca2":
                    $precio = $unidades * 25;
                    break;    
            }
            break;
        case "correas":
            switch ($marca){
                case "marca1":
                    $precio = $unidades * 20;
                    break;
                case "marca2":
                    $precio = $unidades * 15;
                    break;    
            }
            break;
        default:
            $resultado = "Operación no válida";
    }

    echo "<p>¡Hola " . $nombre . "! El costo total de tu pedido es de " . $precio . " euros</p>";
    echo "<p>" . $nombre . ", aquí te mostramos el resumen de tu pedido:</p>";
    echo "<p>Producto seleccionado: " . $producto . "</p>";
    echo "<p>Unidades: " . $unidades . "</p>";
    echo "<p>Marca seleccionada: " . $marca . "</p>";
    echo '<a href="formulario_examen.html">Volver al formulario</a>';
    ?>
</body>
</html>
