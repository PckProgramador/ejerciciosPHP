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
    //ordenarArrays

    $dias= array("lunes", "martes" , "miercoles",  "jueves" , "viernes", "sabado", "domingo");
    var_dump($dias);
    echo"<br>";
    $ordenado = sort($dias);
    //lo que devuelve el sort es un boolean, dias se queda ordenado como se le haya ordenado en el sort.
    var_dump($dias);
    echo "<br>";
    echo "aqui muestro el buleano $ordenado" . var_dump($ordenado);
    //funcion asort mantiene los indices
    // asort($dias);
    //var_dump($dias);

    //ksort ordena por los indices
    echo "<br>";
    echo " ordenar con ksort ";
    echo "<br>";
    $dias2=array("2"=>"lunes","1"=>"martes","3" =>"miercoles","4" => "jueves", "5"=> "viernes");
    var_dump($dias2);
    echo"usamos el ksort para variar el orden por la key";
    $ordenado=ksort($dias2);
    var_dump($dias2);
    echo "<br>";

    //función shuffle ordena aleatoriamente los elementos
    // y les asigna aleatoriamente otro indice
    echo "usamos el shuffle";
    echo "<br>";
    echo "cada vez que actualices pagina se va a reordenar con el shuffle
    ";
    shuffle($dias2);
    var_dump($dias2);
    echo "<br>";

    ?>
</body>
</html>