<?php
    /*Sintaxis de creacion de una cookie
    setcookie("nombre", "valor", caducidad, ruta, dominio);
    */

    //Crear una cookie basica
    setcookie("micookie", "Soy la cookie basica");
    
    //Crear una cookie con expiración
    setcookie("unYear", "Soy la cookie con expiración", time()+(60*60*24*365));

    //Redireccionar
    header("Location:ver-cookies.php");    
?>