<script type="text/javascript">
	function enviarRegistrar() {
		alert("Los datos ingresados son incorrectos");
		window.location = "../vistas/login.php";
	}
</script>

<script type="text/javascript">
	function enviarCliente() {
		alert("Uusario creado exitosamente");
		window.location = "../vistas/index.php";
	}
</script>

<?php
	//requiero base de datos para realizar el ingreso de datos
	require '../modelos/database.php';

	// verifico si los datos no estan vacios para ingresarlos ala base de datos
	if (!empty($_POST['name']) && !empty($_POST['lastName']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phone'])) {
		$sql = "INSERT INTO usuario (pass, name_user, nombre, apellido, telefono, correo) VALUES (:pass, :name_user, :nombre, :apellido, :telefono, :correo)";
		//preparo la base de datos
		$stmt = $conn->prepare($sql);
		//paso los datos
		$stmt->bindParam(':pass', $_POST['password']);
		$stmt->bindParam(':name_user',$_POST['username']);
		$stmt->bindParam(':nombre',$_POST['name']);
		$stmt->bindParam(':apellido',$_POST['lastName']);
		$stmt->bindParam(':telefono',$_POST['phone']);
		$stmt->bindParam(':correo',$_POST['email']);

		// Verifico si se ejecuto
		if ($stmt->execute()) {
			//lleno el mensaje con confirmacion 
			echo "<script>enviarCliente()</script>";

		} else {
			//lleno el mensaje con problema
			echo "<script>enviarRegistrar()</script>";
		}
	}
?>