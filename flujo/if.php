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
    //estructura if
    $nota1=2;
    $nota2=8;
    $nota3=5;

    if($nota2>=5){
        echo "$nota2 es Aprobado";
        echo "<br>";
        if($nota2 >=8){
            echo "$nota2 es notable";
            echo "<br>";
        }
    }else{
        echo "$nota2 es Suspenso";
    }


    ?>
</body>
</html>