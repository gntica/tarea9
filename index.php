<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>DWES Tarea 9</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header></header>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Perretes</a>
        <a href="#">Gatetes</a>
    </nav>

    <section>   
        <h1>Generador de imágenes aleatorias</h1>

        <form action="get_imagen.php" method="GET" id="formCargarImagen">  <!-- el formulario se procesará en "get_imagen.php" -->
            <label for="raza">Selecciona una raza de perro:</label>
            <select name="raza" id="raza">
               
                <option value="beagle">Beagle</option>
                <option value="boxer">Boxer</option>
                <option value="chihuahua">Chihuahua</option>
                <option value="dalmatian">Dálmata</option>
                <option value="doberman">Doberman</option>
                <option value="husky">Husky</option>
                <option value="labrador">Labrador</option>
                <option value="pitbull">Pitbull</option>
                <option value="rottweiler">Rottweiler</option>

            </select>
            <button type="submit">Cargar imagen</button>
        </form>

        <div id="imagen"><img src="img/fondo.jpg"></div>

        <script type="text/javascript" src="js/script.js"></script> <!-- cargamos JavaScript al final-->
    </section> 
</body>

</html>
