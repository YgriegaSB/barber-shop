<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Elegant Man | Inicio</title>
		<link rel="stylesheet" href="../estilos/style.css">
		<link rel="stylesheet" href="../estilos/nivo-slider.css">
		<link rel="stylesheet" href="../themes/default/default.css">
		<script src="../js/jquery-3.5.1.min.js"></script>
		<script src="../js/jquery.nivo.slider.js"></script>
		<script src="https://kit.fontawesome.com/211a499387.js" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(window).on('load', function(){
				$('#slider').nivoSlider();
			});
		</script>
	</head>

	<body>

		<?php
		    session_start();

		    if(isset($_SESSION['user']))
		    {
        ?>
	  	<header>
			<div class="wrapper">

				<a href="inicioCliente.php"><img id="logo" src="../img/logo2.png" alt=""><h1>Elegant Man</h1></a>
				
				<nav>
					
					<a href="inicioCliente.php">Inicio</a>
					<a href="clienteReservas.php">Reservas</a>
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
					<a href="ClienteReservas.php">Reservas</a>
					<a id="login" href="../controlador/logout.php">Iniciar Sesión</a>
					
				</nav>
			</div>
		</header>
        <?php
		    }
		?>

		<main>

			<div class="wrapper">
				<h3 id="about">Realiza tus reservas con seguridad y rapido</h3> <br> <br>
				
			</div>
		</main>
		
		
	</body>
</html>