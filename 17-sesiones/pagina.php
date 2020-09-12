<?php
    //Iniciar sesion
    session_start();
    echo $variable_local."<br>"; //Esta variable no la mostrara en pantalla 
    echo $_SESSION["variable_sesion"];
    /*Cerrar sesion
    session_destroy();
    */
?>