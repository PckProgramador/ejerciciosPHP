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
    //formateo de numeros
    //comprobar si es un numero entero
    $numero=10;
    if(is_int($numero)){
        echo "El numero es entero"."<br>";
    }else if (is_float($numero)){
        echo " el numero es decimal"."<br>";
    }else{
        echo "no es un numero"."<br>";
    }

    //dar formato a un numero cualquiera
    echo number_format("1000000")."<br>";//notación inglesa normal
    //si ponemos 2 en el segundo parametro significa que tiene 2 decimales
    echo number_format("1000000",2)."<br>";
    //el tercer parametro es que simbolo usamos para los decimales "." o ","
    echo number_format("1000000",2,",")."<br>";
    //el cuarto parametro es que simbolo usamos para los millares "." o ","
    echo number_format("1000000",2,",",".")."<br>";


    ?>
</body>
</html>