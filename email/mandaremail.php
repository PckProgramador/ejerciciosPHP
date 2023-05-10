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
    //mandar un email
    $to = "dgarrido@idento.es";
    $subject= "email de pescacion russa";
    $message =  " pescando pescando pescando";
    $from = "formacionIdentoPatrickjejejojo@idento.es";
    $headers="From: $from";
    mail($to,$subject,$message,$headers);
    echo "mail enviado a dani";
    ?>
</body>
</html>