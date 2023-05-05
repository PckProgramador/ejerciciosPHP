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
    //función date
    echo date("d/m/y  h:i:s");
    echo "<br>";
    echo date("H:i:s");
    echo "<br>";
    echo date("jS  \of F Y  h:i:s");
    echo "<br>";


    //funcion get_date que devuelve
    //un array asociativo con los datos de la fecha

    $hoy = getdate();
    var_dump($hoy);

    if($hoy['month'] == "February"){
        echo " Es febrero!";
    }else{
        echo " no es febrero!";
    }

    echo "<br>";

    //para indicarle que nuestra franja horaria es madrid
    //aqui muestro la zona horaria
    echo "zona horaria: ". date_default_timezone_get();
    echo "<br>";
    //aqui hago el cambio de zona horaria
    date_default_timezone_set("America/Los_Angeles");
    echo "zona horaria: ". date_default_timezone_get();
    echo "<br>";


    
    ?>
</body>
</html>