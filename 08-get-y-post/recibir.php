<?php
    //Metodo GET
    echo '<h3>'.$_GET['nombre'].'</h3>';
    echo '<h3>'.$_GET['apellido'].'</h3>';
    var_dump($_GET);
    
    //Metodo POST
    echo '<hr><h3>'.$_POST['nombre'].'</h3>';
    echo '<h3>'.$_POST['apellido'].'</h3>';
    var_dump($_POST);
?>
