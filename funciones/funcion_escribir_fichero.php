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
    //escribir ficheros
    $miarchivo = fopen("fichero2.txt","w");
    fwrite($miarchivo,"Escribiendo dentro del fichero");
    //fflush es para obligar a escribir todo el string por si ha habido algun error
    fflush($miarchivo);

    //mostrar tamaño de nuestro archivo
    echo filesize("fichero2.txt");
    //mostrar informacion del fichero sobre el que trabajamos
    $arrayinfo= stat("fichero2.txt");
    var_dump($arrayinfo)."<br>";

    ?>
</body>
</html>