<?php
    //ALgunas funciones predefinidas...
    
    //Fechas
    echo date('d-m-Y');
    echo "<br>";
    echo time();

    //Matematicas
    echo "<br>";
    echo "Raiz cuadrada de 10: ".sqrt(10);

    //Numero aleatorio
    echo "<br>";
    echo "Numero entre 10 y 40: ".rand(10,40);

    //Numero pi
    echo "<br>";
    echo "Numero pi: ".pi();

    //Redondeo
    echo "<br>";
    echo "Redondear un numero: ".round(9999.9);

    //Comprobar tipo de dato con is_
    $prueba = 998.9;
    if(is_int($prueba)){
        echo "<br>Es un entero";
    }else if(is_double($prueba)){
        echo "<br>Es un double";
    }

    //Comprobar existencia
    $pruebaExistencia = "Hola, si existo!";
    if(isset($pruebaExistencia)){
        echo "<br>$pruebaExistencia";
    }else{
        echo "<br>No existo :(";
    }

    //Limpiar espacios 
    $saludo = "     Hola como estas ?     ";
    var_dump("<br>".trim($saludo));

    //Comprobar variable vacias
    $texto = ""; 
    if(empty($texto)){
        echo "<br>La variable 'texto', esta vacia";
    }

    //Contar caracteres de un String
    $cadena = "123456789";
    echo "<br>".strlen($cadena);

    //Buscar caracter
    $buscar = "Encuenztrame";
    echo "<br>".strpos($buscar, "z");

    //Remplazar texto
    $buenas = "Buenas tardes";
    echo "<br>".str_replace("tardes","noches", $buenas);

    //Convertir a MAYUSCULA y minuscula
    echo "<br>".strtolower($buenas);
    echo "<br>".strtoupper($buenas);
?>