<?php
    /*
    Ejercicio 1: 
    Crear dos variables "pais" y "continente", mostrar su valor y que tipo de dato es el que contienen por pantalla.
    */

    $pais= "Argentina";
    $continente = "America";
    echo '<p>'.$pais.': '.gettype($pais).'</p>';
    echo '<p>'.$continente.': '.gettype($continente).'</p>';
?>