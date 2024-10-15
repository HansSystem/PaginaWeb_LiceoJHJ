<?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pagina_db";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Consulta para obtener el último proyecto educativo
    $sql = "SELECT nombre_imagen, ruta_imagen, nombre_documento, ruta_documento FROM proyecto_educativo ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rutaImagen = $row['ruta_imagen'];
            $nombreImagen = $row['nombre_imagen'];
            $rutaDocumento = $row['ruta_documento'];
            $nombreDocumento = $row['nombre_documento'];
            
            // Mostrar la imagen
            /*echo '<img src="' . $rutaImagen . '" alt="Imagen del Proyecto Educativo" style="max-width: 25%; height: auto;  margin: 10px; border-radius: 50%">';*/


            // Mostrar el enlace para descargar el documento
            echo '<a href="' . $rutaDocumento . '" PHP/uploads/documents="' . $nombreDocumento . '">Descargar Documento</a>';
        }
    } else {
        echo "No se encontraron archivos.";
    }

    $conn->close();
?>