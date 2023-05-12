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
        $minombre=$_GET['nameConsulta'];
        mysqli_select_db($conexion,"usuarios");
        
        //where nombre=('$minombre')
        $consulta= "SELECT nombre FROM clientes";
        $registros= mysqli_query($conexion,$consulta);


        
        while( $registro = mysqli_fetch_row($registros)){
            echo "Nombre : ". $registro[0];
            echo "<br>";
            if($registro[0]==$minombre){
                $encontrado=true;
            }else{
                echo "nada";
                echo "<br>";
            }
        }
        if($encontrado){
            echo $minombre . "ha sido encontrado en la BBDD";
        }else{
            echo $minombre . "no ha sido encontrado en la BBDD";
        } 

        $sustituir = "UPDATE clientes SET nombre='dani' WHERE nombre = '$minombre' ";
        mysqli_query($conexion,$sustituir);
        echo mysqli_error($conexion);
    ?>
</body>
</html>