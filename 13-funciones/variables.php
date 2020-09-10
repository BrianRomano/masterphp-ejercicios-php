<?php
    //Variable GLOBAL - Dentro de una funcion se debe usar 'global' y seguida la variable global.
    $frase = "Hola que tal?";
    echo $frase;

    function saludo(){
        //Uso de variable global
        global $frase;
        echo "<h1>$frase</h1>";
        //Uso de variable local
        $despedida = "Adios";
    }
    saludo();
    echo $despedida; //Al estar definida local no es posible usar fuera de la funcion esta variable, a menos que sea con return.

    //Funciones variables
    function buenosDias(){
        return "Que tal? Buenos dias";
    }
    function buenasTardes(){
        return "Buenas tardes!";
    }
    function buenasNoches(){
        return "Que tengas buenas noches!";
    }

    $dia = "buenosDias";
    $tarde = "buenasTardes";
    $noche = "buenasNoches";

    echo "<h2>".$dia()."</h2>";
    echo "<h2>".$tarde()."</h2>";
    echo "<h2>".$noche()."</h2>";
?>