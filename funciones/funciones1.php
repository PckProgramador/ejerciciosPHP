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

    //Arrays varias
    $frutas= array("naranja","platano","manzana","frambuesa");
    var_dump($frutas);
    echo "<br>";
    //funcion count me permite contar el numero de elementos
    //que tiene un array con un int
    echo " numero de elementos en el array frutas ".
     $elemento_numero = count($frutas);
    echo " <br>";
    //la funcion end envía el puntero a la última posicion del array
    echo "ultimo elemento del array frutas";
    echo "<br>";
    end($frutas);
    echo current($frutas);
    echo " <br>";
    //funcion reset, rebobina el puntero al pimer elemento
    echo "reset al primer elemento del array frutas";
    echo "<br>";
    reset($frutas);
    echo current($frutas);
    echo " <br>";
    //funcion current, devuelve el elemento al que esta apuntando
    //el puntero

    echo "el puntero actualmente apunta a este elemento del array frutas";
    echo "<br>";
    $elemento_actual = current($frutas);
    echo $elemento_actual;
    echo " <br>";

    //funcion search me devuelve un elemento identificado por una key
    $meses = array(1=> "enero", 2=>"febrero", 3=> "marzo", 4=>"abril");
    echo "este es el array asociativo:";
    echo "<br>";
    var_dump($meses);
    $clave = array_search('febrero', $meses);

    if($clave){
        echo $clave ." clave y mes asociado ". $meses[$clave];
    }else{
        echo "no ha encontrado nada";
    }



    ?>
</body>
</html>