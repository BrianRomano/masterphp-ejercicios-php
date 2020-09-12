<?php
    /*
    Ejercicio 1: Hacer un programa que tenga un array con 8 números enteros y que haga lo siguiente:
    -Recorrerlo y mostrarlo
    -Ordenarlo y mostrarlo
    -Mostrar su longitud 
    -Buscar algun elemento
    */

    $numeros = [11,45,65,67,78,33,2,3,98,];

    //Recorrer y mostrar el array
    echo "<h2>Recorrer y mostrar array</h2>";
    foreach($numeros as $numero){
        echo "<h3>$numero</h3>";
    }

    echo "<hr>";

    //Ordenarlo y mostrarlo
    echo "<h2>Ordenar y mostrar array</h2>";
    sort($numeros);
    var_dump($numeros);

    echo "<hr>";

    //Mostrar su longitud
    echo "<h2>Mostrar longitud del array</h2>";
    echo count($numeros);

    echo "<hr>";

    //Buscar un elemento
    echo "<h2>Buscar en el array</h2>";
    $busqueda = 11; 
    echo "<h3>--- Buscar el número $busqueda ---</h3>";
    $search = array_search($busqueda, $numeros);
    if(!empty($search)){
        echo "<h4>Existe el número $busqueda en el array</h4>";
    } else {
        echo "<h4>El número $busqueda no existe en el array</h4>";
    }
?>