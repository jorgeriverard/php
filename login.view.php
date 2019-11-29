
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Prectica Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action='' method = 'post'>
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Iniciar sesion SAUU
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="usuario" placeholder="usuario">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="contraseña">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Recordarme
						</label>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" value="Login" class="login100-form-btn">
							
						
						
						<!--<button  class="login100-form-btn">
							Registrarme
						</button>-->
					</div>
				 
					 <?php if(!empty($errores)):  ?>
					 <div class=error> 
                      <ul>
						  <?php echo $errores; ?>
					 </ul>
					 </div>
					 <?php endif; ?>
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Olvidaste la contrasena?
						</a>
						<p class="txt1">
						Aun no tienes cuenta?
						<a href="registro.php" class="txt1"> Registrate </a>
					</p>
					</div>
				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>


</body>
</html>

