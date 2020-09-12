<?php
    /*
    Ejercicio 3: 
    Programa que compruebe si una variable esta vacia y si esta vacia, rellenarla con texto en minusculas, 
    pero mostrarlo por pantalla en mayusculas.
    */

    $texto = "";

    if(empty($texto)){
        $texto = "hola soy el relleno de la variable texto";
        $textoMayus = strtoupper($texto);
        echo "<strong><h2>$textoMayus</h2></strong>";
    } else {
        echo "<h2>La variable tiene este contenido dentro: $texto</h2>";
    }
?>