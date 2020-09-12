<?php
    /*Modos de apertura de archivos
    r = lectura
    x = ejecución
    w = escritura
    a+: lectura y escritura
    */

    //Abrir archivo
    $archivo = fopen("ficheros.txt", "a+");

    //Leer contenido
    while(!feof($archivo)){
        $contenido = fgets($archivo);
        echo $contenido."<br>";
    }
    
    //Escribir
    fwrite($archivo, "Texto ingresado desde PHP");

    //Cerrar archivo
    $cerrarArchivo = fclose($archivo);

    //Copíar archivo
    copy("ficheros.txt", "ficheros(1).txt") or die ("Error al copiar");

    //Renombrar archivo 
    rename("ficheros(1).txt", "ficheros(copia).txt") or die ("Error al renombrar");

    //Eliminar archivo
    unlink("ficheros(copia).txt") or die ("Error al eliminar");

    //Comprabar existenia de archivo
    if(file_exists("ficheros(1).txt")){
        echo "El archivo existe";
    } else {
        echo "El archivo no existe";
    }
?>