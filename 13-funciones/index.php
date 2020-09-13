<?php
    //Ejemplo 1
    function mostrarNombre($segundoNombre){
        echo "<h2>Brian $segundoNombre Romano</h2>";
    }
    mostrarNombre("Leonel");
    
    //Ejemplo 2 - Varios parametros
    echo "<hr><h2>Calculadora</h2>";
    function calculadora1($numero1, $numero2){
        echo "<h3>$numero1 + $numero2 = ".($numero1+$numero2)."<h3>";
        echo "<h3>$numero1 - $numero2 = ".($numero1-$numero2)."<h3>";
        echo "<h3>$numero1 x $numero2 = ".($numero1*$numero2)."<h3>";
        echo "<h3>$numero1 / $numero2 = ".($numero1/$numero2)."<h3>";
    }
    calculadora1(100,25);

    //Ejemplo 3 - Parametros opcionales
    echo "<hr><h2>Parametros opcionales</h2>";
    function calculadora2($numero1, $numero2, $negrita = false){
        
        $suma = $numero1+$numero2;
        $resta = $numero1-$numero2;
        $multiplicacion = $numero1*$numero2;
        $division = $numero1/$numero2;

        if($negrita == true){
            echo "<h1>";
        }
        echo "Suma: $numero1 + $numero2 = $suma<br>";
        echo "Resta: $numero1 - $numero2 = $resta<br>";
        echo "Multiplicacion: $numero1 x $numero2 = $multiplicacion<br>";
        echo "Division: $numero1 / $numero2 = $division<br>";
        if($negrita != false){
            echo "</h1>";
        }
    }
    calculadora2(150,25);
    calculadora2(200,50, true);
    calculadora2(125,10);

    //Ejemplo 4 - Return
    function devolverNombre($nombre){
        return $nombre; 
    }
    echo "<hr><h2>".devolverNombre("Brian Romano")."</h2>";

    //Ejemplo 5 - Funciones dentro de otras
    function getNombre($nombre2){
        $texto = "El nombre es: $nombre2";
        return $texto;
    }
    function getApeliido($apellido){
        $texto = "El apellido es: $apellido";
        return $texto;
    }
    function devolverNombre2($nombre2, $apellido){
        $texto = getNombre($nombre2).
        "<br>".getApeliido($apellido);
        return $texto;
    }
    echo "<hr><h2>".devolverNombre2("Brian", "Romano")."</h2>";
?>