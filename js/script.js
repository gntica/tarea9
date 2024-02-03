const formBusqueda = document.getElementById("formCargarImagen");  // Obtenenmos nuestro formulario.
const divImagen = document.getElementById("imagen"); // Obtanemos el div donde irá la imagen dentro.

// Añadimos un evento listener al "submit" formulario, que lance esta función.
formBusqueda.addEventListener("submit", function(evento) {
    evento.preventDefault(); // Con el método "preventDefault()" evitamos recargar la página.

    const razaSeleccionada = document.getElementById("raza").value; // Obtenemos la raza seleccionada en el selector.

    // Realizamos una solicitud AJAX para obtener la imagen en base a la selección anterior.
    fetch(`get_imagen.php?raza=${razaSeleccionada}`)  // hacemos la llamada a "get_imagen.php" aádiendo la raza seleccionada.
        .then((respuesta) => {
            if (respuesta.ok) {
                // Si la respuesta es correcta, metemos la imagen dentro del div destinado a ello.
                divImagen.innerHTML = `<img src="${respuesta.url}" alt="${razaSeleccionada}">`; 
            } else {
                // Si la respuesta es errónea, damos el mensaje de error por consola.
                console.error("Error al obtener la imagen:", respuesta.statusText);
            }
        })
        .catch((error) => {
            // Capturamos cualquier otro error y lo mostramos por consola.
            console.error("Error al obtener la imagen:", error);
        });
});
