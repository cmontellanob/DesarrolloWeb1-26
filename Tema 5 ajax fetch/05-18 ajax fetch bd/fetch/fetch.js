function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}


function create() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	forminsertar= document.getElementById('forminsertar');
	var datos = new FormData(forminsertar);
	fetch("create.php",
		{method:"POST",
		body:datos})
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
	
}
function cargarEditar(id) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch('form-editar.php?id='+id)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function update() {
var contenedor;
	contenedor = document.getElementById('contenido');
	formeditar= document.getElementById('form-editar');

	var datos = new FormData(formeditar);
	
	fetch("update.php",
		{method:"POST",
		body:datos})
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
		
}

