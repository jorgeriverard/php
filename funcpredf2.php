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
print "Tu URL actual es".$_SERVER['REQUEST_URI'];
print "Your IP address is ".$_SERVER['HTTP_HOST'];
print "Your IP Remote IP ".$_SERVER['REMOTE_HOST'];
echo ("<br/>"); 

?>
</body>
</html>
