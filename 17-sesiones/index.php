<?php 
    //Iniciar sesión
    session_start();
    
    //Variable local
    $variable_local = "Hola soy una variable local";

    //Variable de sesión
    $_SESSION["variable_sesion"] = "Hola soy una variable de sesion";

    echo $variable_local."<br>";
    echo $_SESSION["variable_sesion"];
?>