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
    //conexión con una base de datos
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $conexion = mysqli_connect($servidor,$usuario,$contraseña) or die("Error de conexión");
    mysqli_select_db($conexion,"usuarios");
    $minombre= $_GET["nameborrar"];
    $borrar="DELETE FROM clientes WHERE nombre='$minombre'";

    
    if(mysqli_query($conexion,$borrar)){
        echo "ha borrado";

    }else{
        echo "no ha borrado";
        echo mysqli_error($conexion);
    }
    ?>
    </body>
</html>