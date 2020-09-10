<?php
    $familia = array(
        array(
            'nombre' => 'Brian', 
            'apellido' => 'Romano', 
            'edad' => 21
        ),
        array(
            'nombre' => 'Melany', 
            'apellido' => 'Romano', 
            'edad' => 20
        ),
        array(
            'nombre' => 'Mario', 
            'apellido' => 'Romano', 
            'edad' => 40
        )
    );

    var_dump($familia);
    echo "<hr><h2>".$familia[0]['nombre']."</h2>";
?>