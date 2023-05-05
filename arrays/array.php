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
        //Arrays

        $dias = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
        $temperaturas = [23,14,31,10];
        //array con 15 posiciones vacías
        $vacio = array(15);
        //array sin nada
        $datos = array();

        //acceso a un dato del array
        echo $dias[1];
        echo " <p> </p>"; //etiqueta p doble salto de linea porque es un parrafo
        echo $temperaturas[0];

        var_dump($dias);
        echo "<br>";
        var_dump($temperaturas);



    ?>
    
</body>
</html>