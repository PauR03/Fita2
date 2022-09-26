<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <form action="accion.php" method="POST">
        <label>User:</label>
        <input name = "user" type="text">
        <br>
    
    <?php 
        $archivo = file("productos.txt");
        foreach($archivo as $producto){
            $producto = trim($producto);
            echo "<label>$producto</label>\n<input name = '$producto' type='checkbox'>\n<br>\n";
        }
    
    ?>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>