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
function conversor($cantmonedas, $tasa){
    $coins = $cantmonedas;
    $rate =  $tasa;
 
  echo ("El monto de su cambio es = " . $coins * $rate);
  echo ("<br/>");
 
  //header("Location: https://www.amazon.com");
 
  
 }
 conversor(25, 50.25);

?>
</body>
</html>
