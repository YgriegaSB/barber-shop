
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Elegant Man | Iniciar Sesión</title>
		<link rel="stylesheet" href="../estilos/regis.css">
		<link rel="stylesheet" href="../estilos/style.css">
		<script src="https://kit.fontawesome.com/211a499387.js" crossorigin="anonymous"></script>
		<script src="../js/loginvalidar.js"></script>
	</head>

	<body>

		<header>
			<div class="wrapper">
				
				<a href="index.php"><img id="logo" src="../img/logo2.png" alt=""><h1>Elegant Man</h1></a>
				
				<nav>
					
					<a href="index.php">Inicio</a>
					<a href="servicios.php">Servicios</a>	
					<a href="galeria.php">Galeria</a>
					<a href="productos.php">Productos</a>
					<a id="login" href="login.php">Iniciar Sesión</a>
					
				</nav>
		</header>

		<form action="../controlador/validarUsuario.php" method="POST" class="formulario" onsubmit="return validarLogin();">
			<h1>Inicia Sesión</h1>
			<div class="contenedor">
				<div class="input-copntenedor">
					<i class="fas fa-user"></i>
					<input id="usuario" name="username" type="text" placeholder="Nombre de usuario" >
				</div>
				<div class="input-copntenedor">
					<i class="fas fa-lock"></i>
					<input id="contraseña" name="password" type="password" placeholder="Contraseña" > 	
				</div>
				<input type="submit" value="Iniciar Sesíon" class="btnregistrar">
				<p>¿Olvidaste tu contraseña? <a class="link" href="#">Recuperar contraseña</a></p>
				<p>¿No tienes una cuenta?<a class="link" href="registrar.php">Registrarme</a></p>
				<hr> <br>
				<p>Ingreso Empleados <a class="link" href="loginBarberos.php">Ingreso Empleados</a></p>

			</div>
		</form>

	</body>
</html>