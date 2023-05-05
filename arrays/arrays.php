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
    //fucion array_diff

        $numeros1 = array(11,22,33);
        $numeros2 =  array(12,33,55);

        $colores1= array("color1"=> "rojo", "color2" => "verde","color3"=> "azul"
        , "color4"=> "naranja");

        $colores2= array("color1"=> "verde", "color2" => "azul","color3"=> "morado"
        , "color4"=> "amarillo");

        $diferencias1 =  array_diff($numeros1,$numeros2);
        var_dump($diferencias1);

        $diferencias2 =  array_diff($colores1,$colores2);
        var_dump($diferencias2);


    //funcion array_merge

    $a1 = array( "rojo","verde");
    $a2 = array ( "azul", "amarillo");

    $unido =  array_merge($a1, $a2);
    var_dump ( $unido);
    ?>
</body>
</html>