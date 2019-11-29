<?php
try{

$conexion = new PDO('mysql:host=localhost:3306;dbname=sistemauniversitario', 'root', '');



}

catch(PDOException $e){
echo "error" . $e->getmessage();

}

?>
