<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file2.php" method="post" enctype="multipart/form-data" >
        Agregar archivo
        <br>
        <input type="file" name="archivo1">
        <br>
        <input type="file" name="archivo2">
        <br>
        <input type="file" name="archivo3">
        <br>
        <br>
        <input type="submit" value="Enviar archivo">
        <input type="reset" value="Resetear Controles">
    </form>


<?php

if($_FILES)
{
    // Ocultar los mensajes de alerta
    error_reporting(4);

    // Primero cogemos los datos del archivo del campo archivo
    $temporal1 = $_FILES["archivo1"]["tmp_name"];
    $archivo1 = $_FILES["archivo1"]["name"];

    $temporal2 = $_FILES["archivo2"]["tmp_name"];
    $archivo2 = $_FILES["archivo2"]["name"];

    $temporal3 = $_FILES["archivo3"]["tmp_name"];
    $archivo3 = $_FILES["archivo3"]["name"];

    echo("Variable temporal: ".$temporal1."<br>");
    echo("Variable archivo: ".$archivo1."<br>");

    echo("Variable temporal: ".$temporal2."<br>");
    echo("Variable archivo: ".$archivo2."<br>");

    echo("Variable temporal: ".$temporal3."<br>");
    echo("Variable archivo: ".$archivo3."<br>");

    //Especificamos la ruta donde queremos volvar la copia del fichero temporal
    $copia1 = "C:/xampp/htdocs/js/Sara/form/archivos_subidos/".$archivo1;
    $copia2 = "C:/xampp/htdocs/js/Sara/form/archivos_subidos/".$archivo2;
    $copia3 = "C:/xampp/htdocs/js/Sara/form/archivos_subidos/".$archivo3;

    copy($temporal1,$copia1);
    copy($temporal2,$copia2);
    copy($temporal3,$copia3);

    echo("<br>"."ficheros subidos correctamente");


}

?>


</body>
</html>