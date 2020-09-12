<?php
    //Para eliminar la cookie hay que caducarla
    setcookie("micookie", "", time()-100);
    //Redireccionar 
    header("Location:ver-cookies.php");
?>