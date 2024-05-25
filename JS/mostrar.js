function mostrarSeccion (idSeccion) {
	
	//Ocultar las secciones de la pagina

	var secciones = document.getElementsByTagName('section');
	for (var i = 0; i < secciones.length; i++) {

		secciones[i].style.display = 'none';
	}

	//Mostrar la seccion selecccionada

	var seccion = document.getElementById(idSeccion);

	seccion.style.display = 'block';

}