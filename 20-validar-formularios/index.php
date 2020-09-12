<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios</title>
</head>
<body> 
    <h1>Validar formularios</h1>
    <?php
        if(isset($_GET["error"])){
            $error = $_GET["error"];
            if($error == "faltan_valores"){
                echo '<strong style="color:red">Ingrese en todos los campos</strong>';
            }
            if($error == "nombre"){
                echo '<strong style="color:red">Ingrese correctamente su nombre</strong>';
            }
            if($error == "apellido"){
                echo '<strong style="color:red">Ingrese correctamente su apellido</strong>';
            }
            if($error == "edad"){
                echo '<strong style="color:red">Ingrese correctamente su edad</strong>';
            }
            if($error == "email"){
                echo '<strong style="color:red">Ingrese correctamente su email</strong>';
            }
            if($error == "contraseña"){
                echo '<strong style="color:red">Ingrese correctamente la contraseña</strong>';
            }
        }
    ?>
    <form method="POST" action = "procesar-formulario.php">
        <label for = "nombre">Nombre:</label><br>
        <input type = "text" name = "nombre" required = "required" pattern = "[A-Za-z]+"><br>

        <label for = "apellido">Apellido:</label><br>
        <input type = "text" name = "apellido" required = "required" pattern = "[A-Za-z]+"><br>

        <label for = "edad">Edad:</label><br>
        <input type = "number" name = "edad" required = "required" pattern = "[0-9]+"><br>

        <label for = "email">Email:</label><br>
        <input type = "email" name = "email" required = "required"><br>

        <label for = "contraseña">Contraseña:</label><br>
        <input type = "password" name = "contraseña" required = "required"><br>

        <br><input type="submit">
    </form>
</body>
</html>