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
    //sesiones
    // le das el id que tu quieras
    //el nombre por defecto es PHPSESSID establecida en el php.ini
    //hay que establecer el id antes de iniciar la sesion
    session_id(22);
    echo session_name();
    session_start();
    // $_SESSION es un array asociativo donde se guardan las variables de sesion
    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = "Pablo";
    var_dump($_SESSION);
    //para eliminar la variable de sesion se usa unset
    //Para borrarla del todo hay que cerrar el navegador
    unset($_SESSION['nombre']);

    if(isset($_SESSION['nombre'])==false){
        echo "la variable de sesion nombre no existe";
    }

    ?>
</body>
</html>