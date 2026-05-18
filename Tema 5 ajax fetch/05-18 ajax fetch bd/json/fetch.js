function listar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch('read.php')
		.then(response => response.text())
		.then(data => {
			personas = JSON.parse(data);
			console.log(personas);
			let html = `<table>
				<tr>
					<th>CI</th>
					<th>Nombres</th>
					<th>Primer Apellido</th>
					<th>Segundo Apellido</th>
					<th>Sexo</th>
					<th>Fecha de Nacimiento</th>
					<th>Celular</th>
					<th>Operaciones</th>
				</tr>`;
			personas.forEach(persona => {
				html += `
					<tr>
						<td>${persona.ci}</td>
						<td>${persona.nombres}</td>
						<td>${persona.primer_apellido}</td>
						<td>${persona.segundo_apellido}</td>
						<td>${persona.sexo}</td>
						<td>${persona.fecha_nacimiento}</td>
						<td>${persona.celular}</td>
						<td>
							<a href="javascript:cargarEditar(${persona.id})">Editar</a>
							<a href="javascript:eliminar(${persona.id})">Eliminar</a>
						</td>
					</tr>
				`;
			});
			html += `</table>`;
			contenedor.innerHTML = html;
		});
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

