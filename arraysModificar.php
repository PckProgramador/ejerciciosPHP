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
    //modificar arrays
    $frutas= array("naranja","platano","manzana","frambuesa");
    var_dump($frutas);
    echo"<br>";
    //array_shift te elimina el primer elemento, y te lo devuelve
    $elminado=array_shift($frutas);
    echo " la fruta eliminada es: $eliminado"
    echo"<br>";
    var_dump($eliminado);
    echo"<br>";

    //array_unshift te añade un elemnto a la primera posicion
    $eliminado = array_unshift($frutas,"pera añadida al principio");
    echo " la fruta añadida es: $eliminado"
    echo"<br>";
    var_dump($frutas);
    echo"<br>";


    //array pop actua sobre la parte final del array
    //quita el ultimo elemento del array
    $eliminado = array_pop($frutas,);
    echo " la fruta eliminada es: $eliminado"
    echo"<br>";
    var_dump($frutas);
    echo"<br>";
    //array_push inerta sobre la parte final un elemento
    $eliminado = array_push($frutas,"pera añadida al final");
    echo " la fruta añadida es: $eliminado"
    echo"<br>";
    var_dump($frutas);
    echo"<br>";
    ?>

    
</body>
</html>