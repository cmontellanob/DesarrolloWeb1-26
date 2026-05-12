function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			console.log(ajax)
			console.log(abrir)
			console.log(contenedor)
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}


function create() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	forminsertar= document.getElementById('forminsertar');

	var datos = new FormData(forminsertar);
	
	ajax = new XMLHttpRequest()
	ajax.open("POST", "create.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send(datos);
}
