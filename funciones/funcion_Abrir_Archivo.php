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
    //funcion apertura archivo

    $miarchivo = fopen("fichero1.txt", "r+");
    if ( $miarchivo == false ){
        echo " error al abrir el archivo";
    }else {
        $contenido = fread($miarchivo, filesize("fichero1.txt"));
        echo $contenido . "<br>";
    }
    // el parametro w sobreescribe, esto quiere decir que
    // si no hacemos nada con el fichero lo deja en blanco
    $miarchivo2 = fopen("fichero2.txt","w");

    //si no existe el fichero que quieres abrir con fopen
    //este lo crea si usamos el parametro w

    $miarchivo4 = fopen("fichero4.txt", "w");


    //rebobinar el puntero
    rewind($miarchivo);
    //bucle meintras no se llegue al final del archivo linea por linea
    //se continua con el bucle
    while(feof($miarchivo)==false){
        //fgets coge linea por linea
        //fgetc coge el primer caracter por linea
        echo fgets($miarchivo). "<br>";
    }
    //esto guarda en una variable todo el contenido del fichero
    $todo = file_get_contents("fichero1.txt");
    echo $todo."<br>";

    $arrayContenidoFichero = file("fichero1.txt");
    var_dump($arrayContenidoFichero)."<br>";
    ?>
</body>
</html>