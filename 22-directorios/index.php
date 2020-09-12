<?php
    //Crear carpeta
    if(!is_dir("Carpeta creada desde index.php")){
        mkdir("Carpeta creada desde index.php", 0777) or die ("No es posible crear una nueva carpeta");
    } else {
        echo "Ya existe la carpeta";
    }
    
    /*Eliminar carpeta
    rmdir("Carpeta creada desde index.php");
    */
?>