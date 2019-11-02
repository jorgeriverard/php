<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "Tu dirección IP de cliente es: {$_SERVER['REMOTE_ADDR']}"; 
echo ("<br/>");
echo "Tu direccion IP de servidor es: ".$_SERVER['HTTP_HOST'];
echo ("<br/>");
echo "El nombre de tu fichero actual es > ".$archivo_actual = basename($_SERVER['PHP_SELF']);

echo ("<br/>"); 

?>
</body>
</html>
