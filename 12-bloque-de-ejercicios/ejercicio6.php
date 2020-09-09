<?php
    /*
    Ejercicio 6:
    Mostrar las tablas de multiplicar del 1 al 10 en una tabla HTML.
    */
    
    echo "<table border='1'><tr>";
        for($cabecera = 1; $cabecera <= 10; $cabecera++){
            echo "<td>Tabla del $cabecera</td>";
        }
    echo "<tr>";

    echo "<tr>";
    for($i = 1; $i <= 10; $i++){
        echo "<td>";
        for($k = 1; $k <= 10; $k++){
            echo "$i x $k = ".($i*$k)."<br>";
        }
     echo "</td>";
    }
    echo "</tr>";
    echo "</table>"
?>