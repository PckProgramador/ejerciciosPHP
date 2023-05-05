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
    //este fichero va a introducir otro dentro de él
    //embeber un codigo dentro de otro en php
    echo "Soy el primer fichero";
    include "./include2.php";

    //include_once verifica que solo se haya incluido una vez, sino lo incluirá por primera vez
    include_once "include2.php"
    ?>
</body>
</html>