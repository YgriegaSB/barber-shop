<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Elegant Man | Empleado</title>
		<link rel="stylesheet" href="../estilos/style.css">
		<script src="../js/jquery-3.5.1.min.js"></script>
		<script src="https://kit.fontawesome.com/211a499387.js" crossorigin="anonymous"></script>
	</head>

	<body>

		
		<?php
		    session_start();

		    if(isset($_SESSION['admin']))
		    {
        ?>
	  	<header>
			<div class="wrapper">

				<a href="index.php"><img id="logo" src="../img/logo2.png" alt=""><h1>Elegant Man</h1></a>
				
				<nav>
					
					<a href="inicioCliente.php">Inicio</a>
					<a href="reserva.php">Reservas</a>
					<a id="login" href="../controlador/logout.php">Cerrar Sesioón</a>
					
				</nav>
			</div>
		</header>   
        <?php
		    }
		    else{
        ?>
        <header>
			<div class="wrapper">

				<a href="index.php"><img id="logo" src="../img/logo2.png" alt=""><h1>Elegant Man</h1></a>
				
				<nav>
					
					<a href="inicioCliente.php">Inicio</a>
					<a href="reserva.php">Reservas</a>
					<a id="login" href="../controlador/logout.php">Iniciar Sesión</a>
					
				</nav>
			</div>
		</header>
        <?php
		    }
		?>

		<main>


		</main>
		
		<footer>
			<div id="copy">

				<p>&copy; 2020 Nice Solutions</p>
			</div>
		</footer>
	</body>
</html>