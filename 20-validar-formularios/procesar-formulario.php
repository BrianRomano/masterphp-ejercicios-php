<?php
    $error = "faltan_valores";

    //Validación general del formulario
    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["edad"]) && !empty($_POST["email"]) && 
       !empty($_POST["contraseña"])){
        
        $error = "ok";

        //Guardar datos en variables
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = (int) $_POST["edad"];
        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];

        //Validar 'nombre'
        if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
            $error = "nombre";
        }
        //Validad 'apellido'
        if(!is_string($apellido) || preg_match("/[0-9]/", $apellido)){
            $error = "apellido";
        }
        //Validar 'edad'
        if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
            $error = "edad";
        }
        //Validar 'email'
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "email";
        }
        //Validar 'contraseña'
        if(empty($contraseña) || strlen($contraseña) < 5){
            $error = "contraseña";
        }

    } else {
        $error = "faltan_valores";
    }

    if($error != "ok"){
        header("Location:index.php?error=$error");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar formulario</title>
</head>
<body>
    <?php if($error = "ok"): ?>
    <h1>Formulario validado HTML</h1>
    <p><?=$nombre?></p>
    <p><?=$apellido?></p>
    <p><?=$edad?></p>
    <p><?=$email?></p>
    <?php endif; ?>
</body>
</html>