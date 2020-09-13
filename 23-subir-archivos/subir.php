<?php
    $archivo = $_FILES["archivo"];
    $nombre = $archivo['name'];
    $tipo = $archivo["type"];

    //Condición de tipo de archivo
    if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
        //Crear directorio
        if(!is_dir('image')){
            mkdir('image', 0777);
        }
        //Ubicacion del archivo
        move_uploaded_file($archivo['tmp_name'], 'image/'.$nombre);
        //Reacargar index
        header("Refresh: 5, url=index.php");
        echo "<h1>Imagen subida correctamente</h1>";
    } else {
        //Recargar index
        header("Refresh: 5, url=index.php");
        echo "Ingresa un formato de archivo correcto";
    }
?>