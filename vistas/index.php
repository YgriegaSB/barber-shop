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
					<a href="ClienteReservas.php">Reservas</a>
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
					
					<a href="index.php">Inicio</a>
					<a href="servicios.php">Servicios</a>	
					<a href="galeria.php">Galeria</a>
					<a href="productos.php">Productos</a>
					<a id="login" href="login.php">Iniciar Sesión</a>
					
				</nav>
		</header>
        <?php
		    }
		?>

		<main>

			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="../img/imagen1.jpg" alt="">
					<img src="../img/imagen2.jpg" alt="">
					<img src="../img/imagen3.jpg" alt="">
					<img src="../img/imagen4.jpg" alt="">	
				</div>
				<div id="htmlcaption" class="nivo-html-caption">
					<h1>Bienvenido a Elegant Man</h1>
				</div>
			</div>

			<div class="wrapper">
				<h3 id="about">Bienvenido a Elegant Man</h3> 
				<br>

				<h2>Nuestra mision</h2><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint sit eligendi voluptates. Natus, nisi, placeat! Commodi animi, dolores ea veritatis, perspiciatis non obcaecati aliquid voluptate corrupti mollitia enim nulla quaerat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus numquam consequuntur, quod tempora laboriosam quos culpa praesentium ipsum rerum sed commodi minus, voluptatibus quam temporibus a corporis eligendi ipsam doloremque.
				</p> <br>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint sit eligendi voluptates. Natus, nisi, placeat! Commodi animi, dolores ea veritatis, perspiciatis non obcaecati aliquid voluptate corrupti mollitia enim nulla quaerat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus numquam consequuntur, quod tempora laboriosam quos culpa praesentium ipsum rerum sed commodi minus, voluptatibus quam temporibus a corporis eligendi ipsam doloremque.
				</p> <br> <br>

				<h2>Nuestros Barberos</h2><br><br>
				
				<ul class="names_barberos">
					<li><h4 id="ruben">Ruben</h4></li>
					<li><h4 id="marco">Marco</h4></li>
					<li><h4 id="lucas">Lucas</h4></li>
				</ul>
				<ul class="names_barberos">
					<li><h4 id="ruben"><hr class="sep_names"></h4></li>
					<li><h4 id="marco"><hr class="sep_names"></h4></li>
					<li><h4 id="lucas"><hr class="sep_names"></h4></li>
				</ul>

				<br>

				<ul id="lista_barberos">
					<li><img src="../img/lucas.jpg" alt=""></li>
					<li><img src="../img/ruben.jpg" alt=""></li>
					<li><img src="../img/marco.jpg" alt=""></li>
				</ul>

			</div>
		</main>
		
		<footer>
			<div id="copy">
				<a href="#"><i class="fab fa-facebook-square"></i></a>
				<a href="#"><i class="fab fa-instagram-square"></i></a>
				<a href="#"><i class="fab fa-twitter-square"></i></a>
				
				<p>&copy; 2020 Nice Solutions</p>
			</div>
		</footer>
	</body>
</html>