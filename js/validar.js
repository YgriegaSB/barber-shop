function validar() {
	// defino variables de pestaña registrar
	var nombre, apellido, correo, usuario, clave, telefono, expresion;
	// capturo los datos
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	correo = document.getElementById("correo").value;
	usuario = document.getElementById("usuario").value;
	clave = document.getElementById("contraseña").value;
	telefono = document.getElementById("celular").value;

	//verifico correo
	expresion = /\w+@+\w+\.+[a-z]/;

	// Verifico datos vacios
	if (nombre === "" || apellido === "" || correo === "" || usuario === "" || clave === "" || telefono === "") {
		alert("Todos los campos son obligatorios");
		return false;
	} //verifico largo de dato
	else if (nombre.length > 40) {
		alert("El nombre es muy largo");
		return false;
	} //verifico largo de dato
	else if (apellido.length > 40) {
		alert("El apellido es muy largo");
		return false;
	} //verifico largo de dato
	else if (correo.length > 40) {
		alert("El correo es muy largo");
		return false;
	} //verifico largo de dato
	else if (!expresion.test(correo)) {
		alert("El correo no es valido");
		return false;
	} //verifico largo de dato
	else if (usuario.length > 30 || clave.length > 30) {
		alert("El nombre es muy largo");
		return false;
	} //verifico largo de dato
	else if (telefono.length > 9 || telefono.length < 9) {
		alert("El numero no es valido, ingrese correctamente el telefono sin espacios");
		return false;
	} //verifico que el numero no sea letra
	else if (isNaN(telefono)) {
		alert("El telefono ingrezado no es un número");
		return false;
	}

}