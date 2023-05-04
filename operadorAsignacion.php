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
        //Operadores de asignación
        $num1=5;
        $num2=10;
        $num3=0;

        $num3=$num1;
        echo $num3;
        echo "<br>";
        echo $num1 . " + = " . $num2 ." = > " . $num1+=$num2;
        echo "<br>";
        echo $num1 . " * = " . $num2 ." = > " . $num1*=$num2;
        echo "<br>";
        echo $num1 . " - = " . $num2 ." = > " . $num1-=$num2;
    ?>
</body>
</html>