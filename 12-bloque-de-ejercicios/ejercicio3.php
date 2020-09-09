<?php
    /*
    Ejercicio 3:
    Escribir un programa que imprima por pantalla los cuadrados de los primeros 40 numeros naturales. 
    PD: Utilizar bucle WHILE. 
    */
    $contador = 0;
    while($contador <= 40){
        $cuadrado = $contador*$contador;
        echo '<p>'.'El cuadrado de '.$contador.' es: '.$cuadrado.'</p>';
        $contador++;
    }


?>