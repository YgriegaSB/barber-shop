<script type="text/javascript">
	function enviarHome() {
		window.location = "../vistas/index.php";
	}
</script>

<?php 
	session_start();
	// finalizo sesion
	unset($_SESSION['user']);
	echo "<script>enviarHome()</script>";
?>

<?php 
	session_start();
	// finalizo sesion
	unset($_SESSION['admin']);
	echo "<script>enviarHome()</script>";
?>