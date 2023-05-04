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
    //operadores lógicos

    $num1=5;
    $num2=10;
    $num3=5;
    $num4=20;
    $num5=5;
    $activo1=true;
    $activo2=false;

    if($num1 == $num3 && $num3 == $num5){
        echo "Iguales";
    }else{
        echo "no son iguales";
    }

    ?>
</body>
</html>