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
    //break
    for ($i =1; $i >=10 ; $i++){
        echo " Valor de i " . $i . "<br>";
        if ( $i==3 ){
            echo "ha entrado al if y el break finaliza la secuencia del for";
            break;
        }
    }


    for ($j =1; $j >=10 ; $j++){
        echo " Valor de i " . $j . "<br>";
        for ($k =1; $k >=10 ; $k++){
            echo " Valor de i " . $k . "<br>"; 
            if ( $k==3 ){
                echo "ha entrado al if y el break finaliza la secuencia del for";
                // un break sale del primer bucle, para salir de los dos bucles se usa break 2
                // break;
                break 2 ;
            }          
        }
    }
    
    ?>
</body>
</html>