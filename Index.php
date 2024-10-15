<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Web - Liceo JHJ</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-nombre">
                <img src="Imagenes/JHJ.png" alt="Logo del Liceo" class="logo">
                <h1 class="nombre-liceo">Liceo Bicentenario de Excelencia Polivalente Juvenal Hernandéz Jaque</h1>
            </div>
        </div>
        <div class="header-buttons">
            <a href="https://www.lirmi.com/cl/" class="btn-image">
                <img src="Iconos/lirmi.png" alt="boton 1">
            </a>
            <a href="https://demre.cl/" class="btn-image">
                <img src="Iconos/demre.png" alt="boton 2">
            </a>
            <a href="https://www.sistemadeadmisionescolar.cl/" class="btn-image">
                <img src="Iconos/SAE.png" alt="boton 3">
            </a>
        </div>
        <div class="search-icon">
            <i class="fas fa-search" id="search-toggle" onclick="toggleSearchBar()"></i>
         </div>
         <!-- Barra de búsqueda oculta inicialmente -->
        <div class="full-search-bar" id="full-search-bar">
            <input type="text" id="search-input" placeholder="Buscar..." oninput="searchPages()">
            <button type="submit" onclick="searchPages()">Buscar</button>
            <div id="search-results"></div>
        </div>
    </header>
    <main>
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn">NUESTRO LICEO</button>
                <div class="dropdown-content">
                    <a href="Nuestro Liceo/MensajeDirector.php">Mensaje del Director</a>
                    <a href="Nuestro Liceo/NuestraHistoria.php">Nuestra Historia</a>
                    <a href="Nuestro Liceo/Mision&Vision.php">Misión y Visión</a>
                    <a href="Nuestro Liceo/SellosEducativos.php">Valores</a>
                    <a href="Nuestro Liceo/ProyectoEducativo.php">Proyecto Educativo</a>
                    <a href="Nuestro Liceo/Calendario.php">Calendario de Actividades</a>
                    <a href="Nuestro Liceo/Organigrama.php">Organigrama</a>
                    <a href="Nuestro Liceo/NuestrosEspacios.php">Nuestros Espacios</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">NUESTRO EQUIPO</button>
                <div class="dropdown-content">
                    <a href="Equipo/EquipoDirectivo.php">Equipo Directivo</a>
                    <div class="dropdown">
                        <div class="dropdown-content">
                            <a href="Equipo/DocentesUTP.php">Docentes U.T.P</a>
                            <a href="Equipo/Orientacion&Convivencia.php">Orientación y Convivencia</a>
                            <a href="Equipo/CRA.php">C.R.A</a>
                            <a href="Equipo/Innovacion.php">Innovación</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">DOCUMENTOS INSTITUCIONALES</button>
                <div class="dropdown-content">
                    <a href="Documentos Institucionales/DocumentosGestion.php">Documentos de Gestión</a>
                    <a href="Documentos Institucionales/Protocolos.php">Procotolos</a>
                    <a href="Documentos Institucionales/PlanesEstudio.php">Planes De Estudios</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">CURSOS</button>
                <div class="dropdown-content">
                    <a href="Cursos/PrimerCiclo.php">Primer Ciclo</a>
                    <a href="Cursos/SegundoCiclo.php">Segundo Ciclo</a>
                    <a href="Cursos/EPJA.php">EPJA</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">COMUNIDAD</button>
                <div class="dropdown-content">
                    <a href="Comunidad/ConsejoEscolar.html">Consejo Escolar</a>
                    <a href="Comunidad/CEAL.html">C.E.A.L.</a>
                    <a href="Comunidad/CentroPadres.html">Centro de Padres y Apoderados</a>
                    <a href="Comunidad/CPHS.html">C.P.H.S.</a>
                    <a href="Comunidad/EquipoBienestar.html">Equipo de Bienestar</a>
                    <a href="Comunidad/ExEstudiantes.html">Ex Estudiantes</a>
                </div>
            </div>
            <a href="Galeria/Galeria.php">GALERÍA</a>
            <a href="Noticias & Comunicados/Noticias&Comunidad.html">NOTICIAS Y COMUNICADOS</a>
            <a href="Intranet/intranet.php">INTRANET</a>
        </div>
        <br>
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="" alt="Imagen 1">
                    <div class="progress-bar"></div>
                </div>
                <div class="slide">
                    <img src="" alt="Imagen 2">
                    <div class="progress-bar"></div>
                </div>
                <div class="slide">
                    <img src="" alt="Imagen 3">
                    <div class="progress-bar"></div>
                </div>
            </div>
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>                
        <br>
        <!-- Sellos educativos -->
    <div class="sellos">
        <div class="sello">
            <i class="fa-solid fa-bolt"></i>
                <?php
                    // Inicializar la variable
                    $titulo_valores1 = "";
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
                            $titulo_valores1 = $row['titulo_valores1'];
                            echo "<h2>$titulo_valores1</h2>";
                        }
                    } else {
                        echo "No hay mensajes disponibles.";
                    }
                    $conn->close();
                ?>
        </div>
        <div class="sello">
        <i class="fa-solid fa-bolt"></i>
                <?php
                    // Inicializar la variable
                    $titulo_valores2 = "";
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
                            $titulo_valores2 = $row['titulo_valores2'];
                            echo "<h2>$titulo_valores2</h2>";
                        }
                    } else {
                        echo "No hay mensajes disponibles.";
                    }
                    $conn->close();
                ?>
        </div>
        <div class="sello">
            <i class="fa-solid fa-pen"></i>
                <?php
                    // Inicializar la variable
                    $titulo_valores3 = "";
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
                            $titulo_valores3 = $row['titulo_valores3'];
                            echo "<h2>$titulo_valores3</h2>";
                        }
                    } else {
                        echo "No hay mensajes disponibles.";
                    }
                    $conn->close();
                ?>
        </div>
        <div class="sello">
            <i class="fa-solid fa-award"></i>
                <?php
                    // Inicializar la variable
                    $titulo_valores4 = "";
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
                            $titulo_valores4 = $row['titulo_valores4'];
                            echo "<h2>$titulo_valores4</h2>";
                        }
                    } else {
                        echo "No hay mensajes disponibles.";
                    }
                    $conn->close();
                ?>
        </div>
        <div class="sello">
            <i class="fa-solid fa-heart"></i>
                <?php
                    // Inicializar la variable
                    $titulo_valores5 = "";
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
                            echo "<h2>$titulo_valores5</h2>";
                        }
                    } else {
                        echo "No hay mensajes disponibles.";
                    }
                    $conn->close();
                ?>
        </div>
        <div class="sello">
            <i class="fa-solid fa-music"></i>
                <?php
                    // Inicializar la variable
                    $titulo_valores6 = "";
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
                            $titulo_valores6 = $row['titulo_valores6'];
                            echo "<h2>$titulo_valores6</h2>";
                        }
                    } else {
                        echo "No hay mensajes disponibles.";
                    }
                    $conn->close();
                ?>
        </div>
    </div>
    <br>
    <!--Mensaje director-->
    <section class="director-message">
        <div class="director-container">
            <div class="director-image">
                <img src="" alt="Director">
                    <?php include 'PHP_PaginaWeb/mensaje_director.php'?>
            </div>
        </div>
    </section>
    <br>
    <section class="news-and-gallery">
        <div class="news-section">
            <h2>Noticias</h2>
            <div class="news-grid">
                <div class="news-item">
                    <a href="https://www.facebook.com/photo/?fbid=757563308995518&set=pcb.757564538995395">
                        <h3>Charla PDI</h3>
                        <p>Charla Prevencion de Consumo de Drogas por PDI</p>
                    </a>
                </div>
                <div class="news-item">
                    <a href="https://www.facebook.com/photo/?fbid=757563378995511&set=pcb.757564538995395">
                        <h3>Reunion</h3>
                        <p>Reunion de Estudiantes en el Gimnacio del Liceo JHJ.</p>
                    </a>
                </div>
                <div class="news-item">
                    <a href="https://www.facebook.com/photo?fbid=757563255662190&set=pcb.757564538995395">
                        <h3>Ley 20.000</h3>
                        <p>Detalles de la Ley 20.000</p>
                    </a>
                </div>
                <div class="news-item">
                    <a href="https://www.facebook.com/photo?fbid=757563302328852&set=pcb.757564538995395">
                        <h3>Clasificacion de Drogas.</h3>
                        <p>informacion detallada de las peores drogas</p>
                    </a>
                </div>
                <div class="news-item">
                    <a href="https://www.facebook.com/photo/?fbid=757464932338689&set=pcb.757472569004592">
                        <h3>Charla Emotiva</h3>
                        <p>Una emotiva charla con los 1ros Medios.</p>
                    </a>
                </div>
                <div class="news-item">
                    <a href="https://www.facebook.com/photo/?fbid=757465009005348&set=pcb.757472569004592">
                        <h3>Recordatorio.</h3>
                        <p>Descripción breve de la noticia 6.</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="gallery-section">
            <h2>Galería</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="Imagenes/Alumnos1.jpg" alt="Imagen 1">
                </div>
                <div class="gallery-item">
                    <img src="Imagenes/alumnos2.jpg" alt="Imagen 2">
                </div>
                <div class="gallery-item">
                    <img src="Imagenes/Alumnos3.jpg" alt="Imagen 3">
                </div>
                <div class="gallery-item">
                    <img src="Imagenes/Alumnos4.jpg" alt="Imagen 4">
                </div>
                <div class="gallery-item">
                    <img src="Imagenes/Alumnos5.jpg" alt="Imagen 5">
                </div>
                <div class="gallery-item">
                    <img src="Imagenes/Alumnos6.jpg" alt="Imagen 6">
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- contactos -->
    <div class="contactos"><h3>Ubicación</h3>
        <div style="border: 0; height: 450px; width: 100%;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d954.4935719281555!2d-72.03196743033583!3d-36.89880102578585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966935cf8d0750ef%3A0x51a61149c0babfd3!2sLiceo%20Juvenal%20Hern%C3%A1ndez%20Jaque!5e1!3m2!1ses-419!2scl!4v1725019599959!5m2!1ses-419!2scl" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <br>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="JHJ.png" alt="Logo del Colegio">
            </div>
            <div class="footer-contacts">
                <h3>Liceo Bicentenario de Excelencia Polivalente Juvenal Hernandéz Jaque</h3>
                <p>Esmeralda #88, El Carmen, Región de Ñuble.</p>
                <p>© 2024 Liceo JHJ. Todos los derechos reservados.</p>
            </div>
            <div class="right-content">
                <p>contacto@colegio.com</p>
                <p>+56 9********</p>
                <a href="https://www.facebook.com" target="_blank">
                    <img src="Iconos/Icono-Facebook.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com/liceopolivalentejhj/" target="_blank">
                    <img src="Iconos/Icono-Instagram.png" alt="Instagram">
                </a>
            </div>
        </div>
    </footer>
    </main>
    <script src="script.js" defer></script>
</body>
</html>