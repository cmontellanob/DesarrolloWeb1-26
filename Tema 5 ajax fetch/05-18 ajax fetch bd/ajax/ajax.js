function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
		
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
			setTimeout
			(
				function() {cargarContenido('index.php');
				}
			)
		}
	}
	ajax.send(datos);
}
function cargarEditar(id) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", 'form-editar.php?id='+id, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();

}
function update() {
var contenedor;
	contenedor = document.getElementById('contenido');
	formeditar= document.getElementById('form-editar');

	var datos = new FormData(formeditar);
	
	ajax = new XMLHttpRequest()
	ajax.open("POST", "update.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send(datos);
}
function eliminar(id)
{
	var modal = document.querySelector('.modal');
	modal.style.visibility = 'visible';
	var btnConfirmar = document.getElementById('btn-confirmar');
	var btnCancelar = document.getElementById('btn-cancelar');
	btnConfirmar.onclick = function() {
		var contenedor;
		contenedor = document.getElementById('contenido');
		var ajax = new XMLHttpRequest() //crea el objetov ajax 
		ajax.open("get", 'delete.php?id='+id, true);
		ajax.onreadystatechange = function () {
			if (ajax.readyState == 4) {
				modal.style.visibility = 'hidden';
				contenedor.innerHTML = ajax.responseText;
			}
		}
		ajax.send();
	}
	btnCancelar.onclick = function() {
		modal.style.visibility = 'hidden';
	}
}
