 <?php
    /*
    Ejercicio 4: 
    Crear un script que tenga 4 variables, una de tipo array, otra de tipo string, otra int y otra boolean, 
    y que imprima un mensaje segun el tipo de variable que sea.
    */

    $array = array("Hola mundo", 78);
    $nombre = "Brian";
    $numero = 43;
    $bool = true;

    if(is_array($array)){
        echo "<h1>El array es un array</h1>";
    }
    if(is_string($nombre)){
        echo "<h2>$nombre</h2>";
    }
    if(is_integer($numero)){
        echo "<h3>$numero</h3>";
    }
    if(is_bool($bool)){
        echo "<h4>El boolean es verdadero</h4>";
    }
 ?>