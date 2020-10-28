<script type="text/javascript">
    //Genero script para redirigir en caso de ingreso de datos erroneo  
    function enviarRegistrar() {
		alert("Los datos ingresados son incorrectos");
		window.location = "../vistas/loginBarberos.php";
	}
</script>

<script type="text/javascript">
//Genero script para redirigir en caso de login correcto
	function enviarCliente() {

		window.location = "../vistas/interJefe.php";
	}
</script>

<?php
    //abro sesion
    session_start();
    //necesito base de datos
    require '../modelos/database.php';
    //variables para almacenar datos del formulario login
    $name = $_POST['username'];
    $cont = $_POST['password'];
    //verifico datos llenos
    if (!empty($cont) && !empty($name)) {
        //creo consulta sql
        $records = $conn->prepare('SELECT * FROM trabajadores WHERE name_user=:username AND password=:password');
        // convierto las variables :variable en los datos del formulario
        $records->bindParam(':username', $name);
        $records->bindParam(':password', $cont);
        // ejecuto consulta sql
        $records->execute();
        // almaceno los datos en results
        $results = $records->fetch(PDO::FETCH_ASSOC);
        // trycatch para iniciar sesion en caso de que los datos existan
        try {
            $_SESSION['admin'] = $results['id'];
            echo "<script>enviarCliente()</script>";
        } catch (Exception $e) {
            echo "<script>enviarRegistrar()</script>";   
        }
    }

?>