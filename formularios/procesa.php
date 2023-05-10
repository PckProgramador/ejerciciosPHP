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
    if (isset($_POST['usuario'])){
        if(!empty($_POST['usuario'])){
            $usuario = $_POST['usuario'];
            echo $usuario;
        }
    }

    if (isset($_POST['password'])){
        if(!empty($_POST['password'])){
            $usuario = $_POST['password'];
            echo $usuario;
        }
    }
    ?>
</body>
</html>