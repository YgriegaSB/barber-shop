<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Elegant Man | Galeria</title>
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
			</div>
		</header>   

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
			
			<ul class="galery">
				<img src="../img/galeria1.jpg" alt="">
				<img src="../img/galeria2.jpg" alt="">
				<img src="../img/galeria3.jpg" alt="">
				<img src="../img/galeria4.jpg" alt="">
				<img src="../img/imagen1.jpg" alt="">
				<img src="../img/imagen2.jpg" alt="">
			</ul>
			
		</main>
		
		<footer>
			<div id="copy">

				<p>&copy; 2020 Nice Solutions</p>
			</div>
		</footer>
	</body>
</html>