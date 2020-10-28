<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Elegant Man | Registrarse</title>
		<link rel="stylesheet" href="../estilos/regis.css">
		<link rel="stylesheet" href="../estilos/style.css">
		<script src="https://kit.fontawesome.com/211a499387.js" crossorigin="anonymous"></script>
		<script src="../js/validar.js"></script>
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

		
		<form action="../controlador/signup.php" method="POST" class="formulario" onsubmit="return validar();">
			<h1>Registrate</h1>
			<div class="contenedor">
				<div class="input-copntenedor">
					<i class="fas fa-signature"></i>
					<input id="nombre" name="name" type="text" placeholder="Nombre" > 	
				</div>
				<div class="input-copntenedor">
					<i class="fas fa-signature"></i>
					<input id="apellido" name="lastName" type="text" placeholder="Apellido" > 	
				</div>
				<div class="input-copntenedor">
					<i class="fas fa-user"></i>
					<input id="usuario" name="username" type="text" placeholder="Nombre de usuario" >
				</div>
				<div class="input-copntenedor">
					<i class="fas fa-envelope"></i>
					<input id="correo" name="email" type="email" placeholder="Correo" >
				</div>
				<div class="input-copntenedor">
					<i class="fas fa-lock"></i>
					<input id="contraseña" name="password" type="password" placeholder="Contraseña" > 	
				</div>
				<div class="input-copntenedor">
					<i class="fas fa-phone"></i>
					<input id="celular" name="phone" type="text" placeholder="9 9999 9999" > 	
				</div>
				<input id="registrar" type="submit" value="Registrarme" class="btnregistrar">
				<p>Al registrarte, aceptas nuestras Condiciones de uso y <a class="link" href="a">politicas de privacidad</a>. </p>
				<p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar sesíon</a></p>
			</div>
		</form>
		

		<?php
		// verifico si el mensaje no esta vacio para mostrarlo
		 if(!empty($message)): ?>
		<p><?= $message ?></p>
		<?php endif; ?>

	</body>
</html>