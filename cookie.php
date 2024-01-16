<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./motor_get.js"></script>
</head>
<body>

    <?php
        if($_POST)
        {
            $dato = $_POST['producto'];
            // Creamos una cookie
            setcookie("migalleta1",$dato);

            // Redirigir a la url que queremos cargar y que tome el valor nombre
            header("location:recibir_cookie.php");
        }
    ?>

    <section class="container p-2">
        <form action="perfil2.php" method="post">
            Introducir Nombre
            <input itemid="v1" type="text" name="nombre">
            <br>
            <input type="submit" value="Enviar Datos">
            <br>
        </form>
        
    </section>
    
</body>
</html>