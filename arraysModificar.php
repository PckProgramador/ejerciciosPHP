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
    var_dump($eliminado);
    echo"<br>";
    ?>
</body>
</html>