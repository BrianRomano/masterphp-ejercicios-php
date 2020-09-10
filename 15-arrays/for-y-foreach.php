<?php
    //Recorrer con For
    echo "<h1>Listado de peliculas con For</h1>";
    $peliculas = array("Batman", "Superman", "Titanic");

    echo "<ul>";
    for($i = 0; $i < count($peliculas); $i++){
        echo "<li>$peliculas[$i]</li>";
    }
    echo "</ul><hr>";

    //Recorrer con ForEach
    echo "<h1>Listado de peliculas con ForEach</h1>";
    $series = array("GOT", "Peaky Blinders", "Mindhunter");

    echo "<ul>";
    foreach($series as $serie){
        echo "<li>$serie</li>";
    }
    echo "</ul>";
?>