<?php
    //Bucle WHILE
    $numero = 0;
    echo "<h2>Bucle WHILE</h2>";
    while($numero <= 100){
        echo "<p> $numero </p>";
        $numero++;
    }

    //Bucle DO WHILE
    echo "<hr><h2>Bucle DO WHILE</h2>";
    $edad = 1;
    do{
        echo "<p>Aun es menor</p>";
        $edad++;
    }while($edad != 18);
    echo "<p>Ya es mayor</p>";

    //Bucle FOR
    echo "<hr><h2>Bucle FOR</h2>";
    $contador = 0;
    for($i = 0; $i<= 100; $i++){
        echo "<p>Contador igual a $i</p>";
        $contador += $i;
    }
    echo "<p>Salida del BUCLE FOR</p>";
?>