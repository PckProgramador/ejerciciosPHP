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
    //Arrays asociativos
    $exploradores = array("explorador1" => "chrome", "explorador2" => "opera", "explorador3" => "firefox");
    $datos = array("nombre"=> "luisja", "edad " => 21, "profesor" => true, 3 =>100);

    echo "Explorador 2 : "      . $exploradores["explorador2"   ];
    echo " <p> </p>";
    echo "Datos 3:" . $datos["nombre"];
    echo "<br>";
    echo "3: " . $datos[3];
    echo "<br>";
    var_dump($exploradores);
    echo "<br>";
    var_dump($datos);

?>
    
</body>
</html>