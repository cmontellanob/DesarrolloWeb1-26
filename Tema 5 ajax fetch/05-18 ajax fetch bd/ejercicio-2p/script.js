function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function cargarContenido2(abrir) {
    var contenedor;
    contenedor = document.querySelector('.tabla');
    fetch(abrir)
        .then(response => response.text())
        .then(data => contenedor.innerHTML=data);
}
