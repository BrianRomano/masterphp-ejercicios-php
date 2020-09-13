 <?php
    /*
    Ejercicio 3: 
    Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones (suma, resta, multiplicar y dividir)
    */

    $resultado = false;

    if(isset($_POST["n1"]) && isset($_POST["n2"])){

        if(isset($_POST["sumar"])){
            $resultado = "El resultado es: ".($_POST["n1"]+$_POST["n2"]);
        }
        if(isset($_POST["restar"])){
            $resultado = "El resultado es: ".($_POST["n1"]-$_POST["n2"]);
        }
        if(isset($_POST["multiplicar"])){
            $resultado = "El resultado es: ".($_POST["n1"]*$_POST["n2"]);
        }
        if(isset($_POST["dividir"])){
            $resultado = "El resultado es: ".($_POST["n1"]/$_POST["n2"]);
        }
    }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form action="" method="POST">
        <label for="n1">Numero 1</label>
        <input type="number" name="n1">

        <label for="n2">Numero 2</label>
        <input type="number" name="n2">

        <input type="submit" value = "+" name = "sumar">
        <input type="submit" value = "-" name = "restar">
        <input type="submit" value = "x" name = "multiplicar">
        <input type="submit" value = "/" name = "dividir">
    </form>

    <?php
        //Resultado
        if($resultado != false){
            echo "<h2>El resultado es: $resultado </h2>";
        }
    ?>
</body>
</html>
