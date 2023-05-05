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
    //Variables
    $edad =33;
    $sueldo;
    $estatura=1.24;
    $nombre= "Patrick";
    $apellido= 'Moreno';
    //comillas simples y dobles funcionan sin problema para el string
    $profesor = false;
    //para concatenar se utiliza el punto
    echo "tengo ".$edad." años <br>";
    echo "me llamo ".$nombre;
    echo $profesor;
    //te cambia el 1 y 0 del boolean por true false en salida de pantalla
    echo json_encode($profesor);
    

    ?>
    
</body>
</html>