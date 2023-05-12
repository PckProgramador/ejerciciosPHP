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
    $conexion = mysqli_connect($servidor,$usuario,$contraseña);
    /**/
    if(!$conexion){
        echo "Conexion ha fallado";
    }else{
        $sql = "CREATE DATABASE usuarios";
        if(mysqli_query($conexion,  $sql)){
            echo "BBDD creada";
        }else{
            echo "Error". mysqli_error($conexion);
        }

        mysqli_select_db($conexion,"usuarios");
        $sql2= "CREATE TABLE clientes(nombre varchar(20))";
        mysqli_query($conexion,$sql2);
    }

    //para mostrar el ultimo error de una bbdd se usa mysql_error();

    //seleccionar bbdd mysql_select

    //hacer consulta mysql_query()

    
    ?>
</body>
</html>