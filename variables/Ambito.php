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
        //Ambito
        //las variables por defecto estan en local, no salen de la funcion
        //si le ponemos global si coge las que esten fuera
        $numero = 22;

        function prueba (){
                global $numero;
                echo $numero;
        }

        prueba();
    ?>
</body>
</html>