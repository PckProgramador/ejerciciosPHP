<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //directorios
    //función que muestra el directorio actual
    echo getcwd();
    //el scan devuelve un array con informacion de un directorio.
    $directorio = scandir(getcwd());
    var_dump($directorio);

    //cambiar de directorio
    chdir('../');
    echo getcwd();
    ?>
</body>
</html>