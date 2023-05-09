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
    //cookies
    setcookie("noexpira",1);
    //el segundo parametro cuando es 1 es que no expira 
    //el valor 2 significa que expira y tu le dices en segundos cuando va expirar
    //time() te devuelve el tiempo actual y 20 segundos mas tarde
    setcookie("cookie2",2,time()+20);

    //las cookies se guardan en un array asociativo que se llama $_COOKIE
    setcookie("idioma","esp");

    if($_COOKIE['idioma'] == "esp"){
        echo "Tu idioma es el Castellano";

    }

    //borrar una cookie
    //2 formas
    //la primera es definir una fecha de caducidad en el pasado
    setcookie("noexpira","",time()-10);

    //la segunda es usar unset a $_COOKIE aunque cuando recargues el navegador
    //seguirá estando
    unset($_COOKIE['noexpira']);


    ?>

</body>
</html>