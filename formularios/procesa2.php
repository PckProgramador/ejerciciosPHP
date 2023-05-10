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
//para subir un archivo tenemos que comrpobar que php.ini esta bien configurado
//file uploads on
//max size = lo que tu necesites en ese programa
//ha de tener permisos en el directorio para leer y escribir
//ini_get te permite visualizar directivas del php.ini

var_dump($_FILES);
//antes de subir un archivo lo sube a un temporal, php lo hace en dos pasos
$directorio= ini_get("upload_tmp_dir");
echo $directorio;

$directorioTemp= $_FILES['imagen']['tmp_name'];
move_uploaded_file($directorioTemp,$_FILES['imagen']['name']);


/*if( isset($_FILES['imagen'])==true){
    echo " la imagen esta correctamente subida" . "<br>";
}else{
    echo "no se ha subido ninguna imagen al servidor";
}
*/
    ?>
</body>
</html>