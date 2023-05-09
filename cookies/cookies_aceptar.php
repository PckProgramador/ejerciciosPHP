<?php
    if(isset($_GET['aceptar'])){
        $caducidad= time() +(60*60*24*365);
        setcookie('micookie','1',$caducidad);
    }
    ?>
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
    //cookies comprobación  aceptación a nivel de usuario
    if( isset($_GET['aceptar']) && isset($_COOKIE['micookie'])){
        echo " has definido las cookies correctamente";
    }
    ?>
    <h2>Cookies</h2>
    <p>Debes aceptar las cookies para seguir navegando<p>
    <a href="?aceptar=1">Aceptar</a>
    <?php

    ?>
</body>
</html>