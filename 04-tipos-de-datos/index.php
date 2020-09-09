<?php
/*
    Tipos de datos: 
    Entero (int / integer): 99
    Coma flotante / decimales (float / double): 99.9
    Cadenas (String): "Hola"
    Booleano (bool) = true - false
    null
    Array (colección de datos)
    Objetos
*/
    $numero = 100;
    $double = 99.9;
    $string = "Hola";
    $boolean = true;
    $null = null;
    echo gettype($numero);
    echo '<br>'.gettype($double); 
    echo '<br>'.gettype($string); 
    echo '<br>'.gettype($boolean); 
    echo '<br>'.gettype($null).'<hr>';

    //Debugear
    $minombre = "Brian";
    var_dump($minombre); 
?>