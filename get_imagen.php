<?php

if (isset($_GET['raza'])) {
    $raza = $_GET['raza'];  // Obtenemos con GET la raza seleccionada.
    
    // Generamos la URL a partir de la raza seleccionada en el formulario.
    $apiUrl = "https://dog.ceo/api/breed/$raza/images/random";
    
    // Usando "file_get_contents" obtenemos el contenido que devuelve la API, pasándole la URL que queremos recibir.
    $imagenData = file_get_contents($apiUrl);
    
    // Decodificamos la respuesta JSON.
    $imagenData = json_decode($imagenData, true);
    
    if ($imagenData && $imagenData['status'] === 'success') {  // Verificamos si se procesa correctamente.
        $imagenUrl = $imagenData['message']; // Obtenemos del JSON la url de las imagenes, que está en "message"
        
        // Obtenemos la extensión de la imagen.
        $extension = pathinfo($imagenUrl, PATHINFO_EXTENSION);
        
        // Enviamos la imagen como respuesta, con el encabezado correcto, según la extensión leida desde pathinfo.
        header("Content-Type: image/$extension");
        echo file_get_contents($imagenUrl);
    } else {
        // Si no se puede obtener la imagen de la API, o no decodifica bien el JSON, damos este mensaje.
        echo "No se pudo obtener la imagen de la raza seleccionada.";  
    }
} else {
    // Si la opción no está definida o no existe, damos este otro mensaje.
    echo "Raza no especificada.";
}

?>
