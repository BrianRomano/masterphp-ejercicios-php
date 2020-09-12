<?php
    /*
    Ejercicio 2:
    Escribir un programa que añada valores a un array mientras que su longitud sea menor a 120 y mostrarlo.
    */

    $numeros = array();

    for($i = 0; $i <= 120; $i++){
        array_push($numeros, $i);
    }
    
    var_dump($numeros);
?>