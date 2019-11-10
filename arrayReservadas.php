<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<?php

$Palabra_Reservadas = array('array()', 'exit()', 'protected', 'empty()', 'print', 'endwhile');
$longitud = count($Palabra_Reservadas);
for($i=0; $i<$longitud; $i++){
 

    //echo ("<strong> $Palabra_Reservadas[$i]</strong>");
    echo    "<div class='container'>" ; 
    echo   "<div class='row'>" ;      
 echo   "<div class='col-md'>"; 

 echo   "<div class='card'>";
    echo "<div class='card-body'> $Palabra_Reservadas[$i]</div>";
 echo   "</div>";
  echo  "</div>";
   echo "</div>";
    echo"</div>";
}



?>
</body>
</html>


