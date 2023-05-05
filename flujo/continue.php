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
//continue
for ($i =1; $i >=10 ; $i++){
    echo "dentro del for" . "<br>";
    if ( $i==3 ){
        echo " entra al if y el continue se sale del for por lo que no va a mostrar el valor de la i". "<br>";
        continue;
    }
    echo " Valor de i " . $i . "<br>";
}
?>
</body>
</html>