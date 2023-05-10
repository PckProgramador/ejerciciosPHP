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
    //subir archivos mejorado
    //el array asociativo files no muestra informacion como la extension
    var_dump($_FILES);
    //creamos variables necesarias para crear un array asociativo nuevo
    $directoriosubida="./uploads/";
    $max_file_size = "512000";
    $extensionesValidas= array("jpg","png","gif","jfif");
    //si la imagen se ha subido correctamente por el formulario
    if(isset($_FILES['imagen'])){
        //creamos variables del array asociativo nuevo $arrayArchivo con informacion complementaria

        $errores=0;
        $nombreArchivo=$_FILES['imagen']['name'];
        $filesize=$_FILES['imagen']['size'];
        $directorioTemp = $_FILES['imagen']['tmp_name'];
        $tipoArchivo= $_FILES['imagen']['type'];
        $arrayArchivo = pathinfo($nombreArchivo);
        var_dump($arrayArchivo);
        $extension = $arrayArchivo['extension'];

        if(!in_array($extension,$extensionesValidas)){
            echo "Extensión no válida";
            $errores=1;
        }
        if($filesize>$max_file_size){
            echo "La imagen excede el tamaño permitido";
            $errores=1;
        }

        if($errores==0){
            $nombreCompleto= $directoriosubida.$nombreArchivo;
            //para subir un archivo necesitamos dos parametros, el directorio temporal
            //donde se encuentra y el nombre completo del archivo
            //le hemos concatenado el $directoriosubida porque como no es la carpeta estandar de subida hemos de decirselo.
            move_uploaded_file($directorioTemp,$nombreCompleto);
        }
    }
    ?>
</body>
</html>