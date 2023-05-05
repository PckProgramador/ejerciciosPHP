<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //while
    $num =10;
    $respuesta ="Oporto";
    $intentos =0;

    while($num >=0 ){
        echo $num;
        echo "<br>";//este bucle sería infinito


        while ($respuesta != "Lisboa"){
            $intentos++;
            echo " Intentos :" . $intentos;
            echo "<br>";
            if ($intentos == 3 ){
                $repsuesta="Lisboa";
            }
        }

    }
    ?>
</body>
</html>