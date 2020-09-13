<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos con PHP</title>
</head>
<body>
    <h1>Subir archivos con PHP</h1>
    <form action="subir.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit">
    </form>
    
    <h2>Listado de imagenes</h2>
    <?php
        $gestor = opendir('./image');
        
        if($gestor){
            while(($image = readdir($gestor)) !== false){
                if($image != '' && $image != '..'){
                    echo "<img src='image/$image' width = '200px'><br>";
                }
            }
        }
    ?>
</body>
</html>