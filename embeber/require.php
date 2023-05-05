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
    //require
    //este fichero va a introducir otro dentro de él
    //embeber un codigo dentro de otro en php
    //la diferencia con include es que si falla te tira un error fatal en vez de un aviso normal.
    echo "Soy el primer fichero";
    require "./include2.php";
    //si el fichero es obligatorio de uso mejor usa require
    ?>

    ?>
</body>
</html>