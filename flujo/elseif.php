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
    //estructura else if

    $valor1=2;
    $valor2=6;
    

    if($valor1 > $valor2){
        echo " $valor1 es mayor que $valor2 ";
    }elseif($valor1 == $valor2){
        echo "$valor1 es igual a $valor2";
    }else{
        echo "$valor1 es menor a $valor2";
    }

    


    ?>
</body>
</html>