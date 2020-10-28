function validarLogin() {
	// defino datos a capturar
	var usuario, clave;
	// capturo datos desde login.php
	usuario = document.getElementById("usuario").value;
	clave = document.getElementById("contraseña").value;

	//verifico datos vacios
	if (usuario === "" || clave === "") {
		alert("Todos los campos son obligatorios");
		return false;
	} //verifico largo de datos ingresados
	else if (usuario.length > 30 || clave.length > 30) {
		alert("El nombre es muy largo");
		return false;
	} 
}