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
    //redondeo de numeros
    echo (round(0.60))."<br>";//redondeo a 1
    echo (round(0.50))."<br>";//redondeo a 1 
    echo (round(0.49))."<br>";//redondeo a 0
    echo (round(-4.40))."<br>";//redondeo a -4
    echo (round(-4.60))."<br>";//redondeo a -5
    echo (round(4.97521,2))."<br>";//redondeo de 2 decimales

    echo (round(1.50,0,PHP_ROUND_HALF_UP))."<br>";//redondea hacia arriba
    echo (round(1.50,0,PHP_ROUND_HALF_DOWN))."<br>";//redondea hacia abajo
    echo (round(1.50,0,PHP_ROUND_HALF_EVEN))."<br>";//redondea hacia el primer numero par superior que encuntre

    //redondea el numero entero superior más próximo
    echo (ceil(0.30))."<br>";
    //redondea el numero entero inferior más próximo
    echo (floor(0.99))."<br>";
    ?>
</body>
</html>