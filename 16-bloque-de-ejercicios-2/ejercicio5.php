<?php
    /*
    Ejercicio 5: 
    Crear un array con el contenido de la tabla:

    ACCION      AVENTURA        DEPORTES
    GTA         ASSASINS        FIFA 20
    COD         CRASH           PES 19
    FORNITE     FALL GUYS       MOTO GP    

    Cada columna debe ir un fichero separado (include).
    */

    $tabla = array(
        "ACCION" => array("GTA", "CALL OF DUTY", "FORNITE"), 
        "AVENTURA" => array("ASSASINS CREED", "CRASH", "FALL GUYS"),
        "DEPORTES" => array("FIFA 20", "PES 19", "MOTO GP")
    );

    $categorias = array_keys($tabla);
?>

<table border = "1">
    <?php include_once("ejercicio5/0-encabezado.php") ?>
    <?php include_once("ejercicio5/1-fila.php") ?>
    <?php include_once("ejercicio5/2-fila.php") ?>
    <?php include_once("ejercicio5/3-fila.php") ?>
</table>