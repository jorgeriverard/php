<?php

require 'conexiossql.php';
session_start();

if(isset($_SESSION['usuarios'])){
    header('Location: index.php');
}

$errores = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['pass'];


    try{

        $conexion = new PDO('mysql:host=localhost:3306;dbname=sistemauniversitario', 'root', '');
                
        }
        catch(PDOException $e){
        echo "error" . $e->getmessage();
        
        }

     $statement = $conexion->prepare('SELECT * FROM usuarios where usuario = :usuario AND password = :password') ;
     
     $statement->execute(array(
      ':usuario' => $usuario,
      ':password' => $password 
    ));

    $resultado = $statement->fetch();
    //var_dump($resultado);

    if($resultado !== false){
      $_SESSION['usuario'] = $usuario;
    
      header('location: views/aplicacionview/aplicacion.view.php');
    }

    else{
          $errores .= '<li> Usuario o Contraseña incorrectos </li>';
    }

}
require 'login.view.php'

?>