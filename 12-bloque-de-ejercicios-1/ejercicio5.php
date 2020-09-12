<?php
    /*
    Ejercicio 5:
    Hacer un programa que muestre todos los numeros entre dos numeros ingresados por la url ($_GET)
    */
    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        if($numero1 != $numero2 && $numero1 < $numero2){
            for($numero1; $numero1 < $numero2; $numero1++){
                echo "<h5>$numero1</h5>";
            }
        }else if($numero2 != $numero1 && $numero2 < $numero1){
            for($numero2; $numero2 < $numero1; $numero2++){
                echo "<h5>$numero2</h5>";
            }
        }
        else{
            echo "<h3>Introduza los valores distintos</h3>";
        }
    } else {
        echo "<h3>Introduza los valores en la url</h3>";
    }
?>