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
//header("Location: https://www.amazon.com");
 echo ("<B>Ejercicio A 1 Practica PHP </B>") ;
 echo ("<br/>");
 echo ("------------------------------------------------------------------- ") ;
 echo ("<br/>");
$X = 144;
$Y = 999;
$suma = $X + $Y;
$resta = $X - $Y;
$Multiplicacion = $X * $Y;
$Division = $X /$Y;
echo "La suma es =" . $suma . "<br />"; 
echo ("La resta es=" . $resta . "<br />") ;
echo("La Multiplicacion es =" . $Multiplicacion."<br />");
echo ("La division es =" . $Division);
echo ("<br/>");
echo ("------------------------------------------------------------------- ") ;

$a = 1;
function Test()
{
echo "a = $a";
}
Test();

?>
</body>
</html>
