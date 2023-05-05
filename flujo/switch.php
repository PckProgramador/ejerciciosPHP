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
    //estructura switch case
    $dia = 3;
    switch ($dia)
    {
        case 1:
            echo "Lunes";
            break;
        
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;

        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        default:
            echo " fin de semana";



    }
    ?>
</body>
</html>