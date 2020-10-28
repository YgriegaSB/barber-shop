<script type="text/javascript">
    // funcion que redirige en caso de que los datos no existan
	function enviarRegistrar() {
		alert("Los datos ingresados son incorrectos");
		window.location = "../vistas/login.php";
	}
</script>

<script type="text/javascript">
    //funcion que redirige en caso de que los datos sean correctos
	function enviarCliente() {
        alert("Succesfull Loged");
		window.location = "../vistas/index.php";
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
        $records = $conn->prepare('SELECT * FROM usuario WHERE name_user=:username AND pass=:password');
        // convierto las variables :variable en los datos del formulario
        $records->bindParam(':username', $name);
        $records->bindParam(':password', $cont);
        // ejecuto consulta sql
        $records->execute();
        // almaceno los datos en results
        $results = $records->fetch(PDO::FETCH_ASSOC);
        // trycatch para iniciar sesion en caso de que los datos existan
        try {
            $_SESSION['user'] = $results['id'];
            echo "<script>enviarCliente()</script>";
        } catch (Exception $e) {
            echo "<script>enviarRegistrar()</script>";   
        }
    }

?>