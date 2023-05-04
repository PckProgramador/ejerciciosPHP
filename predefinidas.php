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
        //variable normal;
        $numero =33;
        //variables globales de servidor donde estoy trabajando
        echo "Nombre del Servidor: ". $_SERVER['SERVER_NAME'];
        echo " <p> </p>";
        echo "Software del Servidor: ". $_SERVER['SERVER_SOFTWARE'];
        echo " <p> </p>";
        echo "Puerto del Servidor: ". $_SERVER['SERVER_PORT'];
        echo " <p> </p>";
        echo "La variable número vale: " . $GLOBALS['numero'];
    ?>
</body>
</html>