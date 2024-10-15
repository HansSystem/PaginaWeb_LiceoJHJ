<?php
    // Inicializar la variable
    $titulo_valores5 = "";
    $descripcion_valores5 =  "";
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
    $sql = "SELECT titulo_valores1, descripcion_valores1, titulo_valores2, descripcion_valores2, titulo_valores3, descripcion_valores3, titulo_valores4, descripcion_valores4, titulo_valores5, descripcion_valores5, titulo_valores6, descripcion_valores6, titulo_valores7, descripcion_valores7 FROM valores LIMIT 1";
    $result = $conn->query($sql);
    if ($result === false) {
        die("Error en la consulta: " . $conn->error);
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $titulo_valores5 = $row['titulo_valores5'];
            $descripcion_valores5 = $row['descripcion_valores5'];
            echo "<h2>$titulo_valores5</h2>";
            echo "<p>$descripcion_valores5</p>";
        }
    } else {
        echo "No hay mensajes disponibles.";
    }
    $conn->close();
?>