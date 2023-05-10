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
    //propagación de sesiones
    session_start();
    if(isset($_SESSION['iniciada']) == true){
        echo "identificador de la sesion ". session_id()."<br>";
        echo "nombre de la sesion " . session_name()."<br>";
        echo "iniciada: ". $_SESSION['iniciada'] ."<br>";
        echo "nombre: ". $_SESSION['nombre'] ."<br>";
        echo "edad: ". $_SESSION['edad'] ."<br>";
    }else{
        echo "no se ha defeinido la sesion";
    }

    echo"<a href='sesion2.php'>Volver a la web principal</a>"."<br>";;
    echo"<a href='sesion4.php'>Finalizar la sesion</a>"."<br>";
    ?>
</body>
</html>