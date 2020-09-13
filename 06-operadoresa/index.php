<?php
    //Operadores aritmeticos 
    $num1 = 10;
    $num2 = 20; 
    echo 'Suma: '.($num1+$num2).'<br>';
    echo 'Resta: '.($num1-$num2).'<br>';
    echo 'Multiplicación: '.($num1*$num2).'<br>';
    echo 'División: '.($num1/$num2).'<br>';
    echo 'Modulo: '.($num1%$num2).'<hr>';

    //Operadores de incremento
    $year = 1;
    $year++;
    echo $year;

    //Operadores de decremento
    $mes = 10;
    $mes--;
    echo '<br>'.$mes;

    //Operadores de Pre-incremento
    ++$year;
    echo '<br>'.$year;

    //Operadores de Pre-decremento
    --$mes;
    echo '<br>'.$mes.'<hr>';

    //Operadores de asignacion
    $edad = 20;

    $edad += 5;
    echo $edad;
    $edad -= 5;
    echo '<br>'.$edad;
    $edad *= 5;
    echo '<br>'.$edad;
    $edad /= 5;
    echo '<br>'.$edad;
?>