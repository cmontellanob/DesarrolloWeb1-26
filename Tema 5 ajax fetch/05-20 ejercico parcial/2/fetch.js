function cargarModal(abrir) {
	var contenedor;
	contenedor = document.getElementById('espacio-modal');

	fetch(abrir)
		.then(response => response.text())
		.then(data => {
			contenedor.innerHTML=data
			cargarTipos();
			document.getElementById('modal-crear').style.visibility="visible";
			});
	
}
function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');

	fetch(abrir)
		.then(response => response.text())
		.then(data => {
			contenedor.innerHTML=data
			});
	
}


function registrarReceta() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	forminsertar= document.getElementById('form-receta');
	var datos = new FormData(forminsertar);
	fetch("create.php",
		{method:"POST",
		body:datos})
		.then(response => response.text())
		.then(data => {
			contenedor.innerHTML=data
			document.getElementById('modal-crear').style.visibility="hidden";
		});

	
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

function cargarTipos(){
	var contenedor;
	contenedor = document.getElementById('idtiporeceta');
	fetch('tipos_receta.php')
		.then(response => response.text())
		.then(data => {
			tiposrecetas = JSON.parse(data);
		
			console.log(tiposrecetas);
			let html = ``;
			tiposrecetas.forEach(tiporeceta => {
				html += `
					<option value=${tiporeceta.id}>
					${tiporeceta.tiporeceta}
					</option>
				`;
			});
			contenedor.innerHTML = html;
		});
}
 function aumentar(){
	
        color=document.getElementById("color").value
        tema=document.getElementById("tema").value
        contenedor=document.getElementById("contenedor")
 	html=`<div style= "background-color:${color}> 
    ${tema}</div>`
     contenedor.innerHTML+=html
    }
	alert(html);