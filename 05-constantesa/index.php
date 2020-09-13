<?php
    //El primer valor sera el nombre de la constante y el segundo, el valor de la misma.
    define('nombre_constante','valor_constante');
    echo nombre_constante; 

    //Algunas constantes predefinidas
    echo '<hr>'.PHP_VERSION; //Version de PHP 
    echo '<hr>'.PHP_EXTENSION_DIR; //Ruta de extensiones PHP
    echo '<hr>'.__LINE__; //Numero de linea que esta imprimiendo 
    echo '<hr>'.__FILE__; //Ruta de este archivo
?>
