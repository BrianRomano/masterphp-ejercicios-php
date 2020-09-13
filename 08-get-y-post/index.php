<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario PHP con GET</h1>
    <form method = "GET" action= "recibir.php">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name = "nombre">
        </p>    

        <p>
            <label for="apellido">Apellido</label>      
            <input type="text" name = "apellido">
        </p>

        <input type="submit" value = "Enviar">
    </form>
    <h1><hr>Formulario PHP con POST</h1>
    <form method = "POST" action= "recibir.php">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name = "nombre">
        </p>    

        <p>
            <label for="apellido">Apellido</label>      
            <input type="text" name = "apellido">
        </p>

        <input type="submit" value = "Enviar">
    </form>
</body>
</html>