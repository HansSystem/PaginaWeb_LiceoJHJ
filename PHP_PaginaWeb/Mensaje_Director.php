<?php
    // Inicializar la variable
    $nombreDirector = "";
    $mensajeDirector =  "";
    // Detalles de conexión
    $servername = "localhost"; // Cambiar si tu servidor no está en localhost
    $username = "root"; // Reemplaza con tu nombre de usuario correcto
    $password = ""; // Reemplaza con tu contraseña correcta
    $dbname = "pagina_db"; // Asegúrate de que el nombre de la base de datos sea correcto
    // Crear conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }
    $sql = "SELECT nombre_director, mensaje FROM mensaje_director LIMIT 1";
    $result = $conn->query($sql);
    if ($result === false) {
        die("Error en la consulta: " . $conn->error);
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nombreDirector = $row['nombre_director'];
            $mensaje = $row['mensaje'];
            echo "<h2>$nombreDirector</h2>";
            echo "<p>$mensaje</p>";
    }
    } else {
        echo "No hay mensajes disponibles.";
    }
    $conn->close();
?>      