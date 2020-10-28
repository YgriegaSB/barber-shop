<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Elegant Man | Reservar</title>
		<link rel="stylesheet" href="../estilos/regis.css">
		<script src="https://kit.fontawesome.com/211a499387.js" crossorigin="anonymous"></script>
		<script src="../js/validar.js"></script>
		<link rel="stylesheet" type="text/css" href="../estilos/tcal.css" />
		<script type="text/javascript" src="../js/tcal.js"></script> 
	</head>

	<body>

		<form action="" method="POST" class="formulario" onsubmit="return validar();">
			<h1>Reserva</h1>
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
					<label for="">Barbero:</label>
					<select name="barberos" id="">
					<option value=""><?php echo $mostrar['servicio'] ?></option>
					<option value=""><?php echo $mostrar['servicio'] ?></option>
					<option value=""><?php echo $mostrar['servicio'] ?></option>
					<option value=""><?php echo $mostrar['servicio'] ?></option>
					<option value=""><?php echo $mostrar['servicio'] ?></option>
					<option value=""><?php echo $mostrar['servicio'] ?></option>
					</select>	
				</div>
				<div class="input-copntenedor">
					<label for="">Servicio:</label>
					<select name="Servicio" id="">
						<option value="1">Corte Clasico</option>
						<option value="2">Prefilado barba</option>
						<option value="3">Corte con perfilado</option>
						<option value="4">Afeitado al ras</option>
					</select>	
				</div>

				<div class="input-contenedor">
					<label for="">Fecha:</label>
					<div><input type="text" name="date" class="tcal" value="" /></div>	
				</div>

				<div class="input-copntenedor">
					<i class="fas fa-phone"></i>
					<input id="celular" name="phone" type="text" placeholder="9 9999 9999" > 	
				</div>
				<input id="registrar" type="submit" value="Reservar" class="btnregistrar">

			</div>
		</form>
	</body>
</html>