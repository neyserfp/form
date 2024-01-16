<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./motor_get.js"></script>
</head>
<body>

<?php
    if($_GET)
    {
        $nombre = $_GET['nombre'];
        // Redirigir a la url que queremos cargar y que tome el valor nombre
        header("location:perfil.php?p1=$nombre");
    }
?>

    <section class="container p-2">
        
        <form action="get.php" method="get">
            Introducir Nombre
            <input itemid="v1" type="text" name="nombre">
            <br>
            <input type="submit" value="Enviar Datos">
            <br>
        </form>
        
    </section>
    
</body>
</html>