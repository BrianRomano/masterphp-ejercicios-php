<?php
    /*Ejercicio 2:
    Escribir un script en PHP que muestre por pantalla todos los numeros pares entre 1 y 100.
    */

    for($i = 1; $i<=100; $i++){
        if($i % 2 == 0){
            echo '<p>'.$i.'</p>';
        }
    }
?>