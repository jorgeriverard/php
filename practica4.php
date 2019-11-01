

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<label for="nombre"> Nombre</label><input type="text" name="nombre" id="nombre" placeholder="Nombre">
<label for="apellido"> Apellido</label><input type="text" name="apellido" id="apellido" placeholder="apellido">

<input type="submit" value="enviar">
</form>

    <?php

    $nombre = $_REQUEST['nombre'];
    $apellido= $_REQUEST['apellido'];
    $datos = array($nombre, $apellido);
    echo "<b>$datos[0]</b>";
    echo "<b>$datos[1]</b>";
    ?>
</body>
</html>

