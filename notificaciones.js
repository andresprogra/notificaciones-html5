document.addEventListener('DOMContentLoaded',function() {
	document.getElementById('boton').addEventListener('click',function(){
		if(! ('Notification' in window) ){
			alert("Servicio no disponible para tu dispositivo");
			return;
		}
		Notification.requestPermission(function(permission){	
			var notification = new Notification("Alumno agregado",
				{
					body:"Has agregado a  " +nombre.value + " " + apellido.value +  "  a nuestro registro.",
					icon:'icon.png',
					
				});

			setTimeout(function(){
				notification.close();
			},50000);
			
		});
		var label = document.createElement("label");
		label.setAttribute("id","Label-nuevo");
		labeltext = document.createTextNode(nombre.value);
		label.appendChild(labeltext);
		document.getElementById('NombreAlumno').appendChild(label);
		
		var nuevoLabel = document.createElement("label");
		nuevoLabel.setAttribute("id","Label-nuevo");
		labeltext = document.createTextNode(apellido.value);
		nuevoLabel.appendChild(labeltext);
		document.getElementById('ApellidoAlumno').appendChild(nuevoLabel);
		/*
		var Nombre = document.getElementById('labels');
		Nombre.innerHTML = nombre.value;*/

		/*var Apellido = document.getElementById('ape');
		Apellido.innerHTML = apellido.value;*/
		var apelli = document.getElementById('apellido').value;
		apelli.innerHTML = "Andres";


	});
});

