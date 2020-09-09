<?php
    /*Operadores de comparacion 
    == igual 
    === identico
    != distinto
    <> diferente
    !== no identico
    < menor que
    > mayor que
    <= menor o igual que
    >= mayor o igual que
    */

    /*Operadores logicos
    && AND Y
    || OR O 
    ! NOT NO 
    */

    //Condicional IF
    $color = "rojo";
    if($color !="rojo"){
        echo "El color no es rojo";
    } else {
        echo "El color es rojo";
    }

    //Condicional ELSE IF
    $edad = 18; 
    if($edad < 18){
        echo "<br>"."Es menor de edad";
    }else if($edad >= 18 && $edad < 80){
        echo "<br>"."Es mayor de edad pero joven";
    }else{
        echo "<br>"."Es un anciano";
    }

    //SWITCH
    $dia = 4;
    switch($dia){
        case 1: 
            echo "<p>"."Lunes"."</p>";
        break;
        case 2:
            echo "<p>"."Martes"."</p>";
        break;
        case 3: 
            echo "<p>"."Miercoles"."</p>";
        break;
        case 4: 
            echo "<p>"."Jueves"."</p>";
        break;
        case 5:
            echo "<p>"."Viernes"."</p>";
        break;
        case 6: 
            echo "<p>"."Sabado"."</p>";
        break;
        case 7: 
            echo "<p>"."Domingo"."</p>";
        break;
    };
?>