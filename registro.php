<?php

require 'conexiossql.php';

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $usuario = filter_var(strtolower($_POST['usuario']));
    $password = $_POST['pass'];
    $nombre= $_POST['name'];
    $apellidos = $_POST['apellidos'];
    $matricula = $_POST['matricula'];
    $carrera = $_POST['carrera'];
    $telefono = $_POST['telefono'];
    $cedula = $_POST['cedula'];
    $email = $_POST['email'];
 
    $errores = "";

        if(empty($usuario) or empty($password)){
            $errores .= '<li>Por favor rellena los datos correctamente</li>';

        }
        else {
           if($errores == ''){

                  $statement = $conexion->prepare('INSERT INTO estudiantes(nombre,apellido, matricula, carrera, telefono, cedula, email,usuario) values (:nombre, :apellido, :matricula, :carrera, :telefono, :cedula, :email, :usuario)');
  $statement2 = $conexion->prepare('INSERT INTO usuarios(usuario, password) values (:usuario, :password)');
  
  $statement ->execute(array(
  
      ':nombre' => $nombre,
      'apellido' => $apellidos,
      ':matricula' => $matricula,
      ':carrera' => $carrera,
      ':telefono' => $telefono,
      ':cedula' => $cedula,
      ':email' => $email,
      ':usuario' => $usuario
      
  
  ));
  
  $statement2 -> execute(array(
  
      ':usuario' => $usuario,
      ':password' => $password
  
  
              ));
          echo $errores;
    
           }

        }


    



        }


require 'registro.view.php';


?>