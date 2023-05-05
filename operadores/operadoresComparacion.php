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
        //operadores de comparación
        $num1 = 5;
        $num2 = 10;
        $num3 = 5;
        $valor1= "5";

        echo "Num1 = " . $num1;
        echo "<br>";
        echo "Num2 = " . $num2;
        echo "<br>";
        echo "Num3 = " . $num3;
        echo "<br>";
        echo "Valor1 = " . $valor1;
        echo "<br>";
        //no sale nada porque los numeros no cumplen la condición
        if( $num1 == $num2){
            echo "Num1 y num2 son iguales";
            echo " <br>";
        }else{
            echo "Num1 y num2 no son iguales";
            echo " <br>"; 
        }
        //si se hace el echo porque si cumple la condición
        if( $num1 == $num3){
            echo "Num1 y num3 son iguales";
            echo " <br>";
        }

        //aqui comprueba que son iguales
        if( $num1 == $valor1){
            echo "Num1 y valor1 son iguales";
            echo " <br>";
        }

        //aqui comprueba que son iguales
        if( $num1 === $valor1){
            echo "Num1 y valor1 son identicos";
            echo " <br>";
        }else{
            echo "Num1 y valor1 NO son identicos";
            echo " <br>";  
        }

        //aqui comprueba que son distintos
        if( $num1 != $num2){
            echo "Num1 y num2 son distintos";
            echo " <br>";
        }else{
            echo "Num1 y num2 NO son distintos";
            echo " <br>";  
        }
    ?>
</body>
</html>