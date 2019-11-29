<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <title>Registro Usuarios</title>

    <link rel="stylesheet" href="views/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body>

    <div class="main">
  


        <div class="container">
                <form method="POST" class="signup-form">
    
            
    <div id="estudiante" >
    <h2>Registro de estudiante</h2>    
    <div class="form-textbox">
                        <label for="name">Nombres</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="form-textbox">
                        <label for="name">Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos" />
                    </div>

                    <div class="form-textbox">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" />
                    </div>
                      
                    
                    <div class="form-textbox">
                        <label for="Matricula">Matricula</label>
                        <input type="text" name="matricula" id="Matricula" />
                    </div>
                     
                    <div class="form-textbox">
                        <label for="Carrera">Carrera</label>
                        <input type="text" name="carrera" id="carrera" />
                    </div>
                    
                    <div class="form-textbox">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" />
                    </div>

                    
                    <div class="form-textbox">
                        <label for="name">Cedula</label>
                        <input type="text" name="cedula" id="cedula" />
                    </div>

                    <div class="form-textbox">
                        <label for="name">Usuario</label>
                        <input type="text" name="usuario" id="usuario" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass"> Repetir Password</label>
                        <input type="password" name="pass2" id="pass2" />
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Estoy de acuerdo con los terminos y condiciones <a href="#" class="term-service">Terminos de Servicio</a></label>
                    </div>

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Create account" />
                    </div>
                </form>

                    </div>
</div>


</div>


</body>
</html>

