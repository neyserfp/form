<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="files12.php" method="post" enctype="multipart/form-data" >
        Agregar archivo
        <input type="file" name="archivo">
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
    $temporal = $_FILES["archivo"]["tmp_name"];
    $archivo = $_FILES["archivo"]["name"];

    echo("Variable temporal: ".$temporal."<br>");
    echo("Variable archivo: ".$archivo."<br>");

    //Especificamos la ruta donde queremos volvar la copia del fichero temporal
    $copia = "C:/xampp/htdocs/js/Sara/form/archivos_subidos/".$archivo;

    copy($temporal,$copia);

    echo("<br>"."fichero subido correctamente");


}

?>


</body>
</html>