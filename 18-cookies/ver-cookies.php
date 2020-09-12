<?php
    
    if(isset($_COOKIE["micookie"])){
        echo "<h1>".$_COOKIE["micookie"]."</h1>";
    } else {
        echo "La cookie basica no existe";
    }

    if(isset($_COOKIE["unYear"])){
        echo "<h1>".$_COOKIE["unYear"]."</h1>";
    } else {
        echo "La cookie no existe";
    }
?>
<a href="crear-cookies.php">Crear cookie</a>
<a href="borrar-cookies.php">Borrar cookie</a>