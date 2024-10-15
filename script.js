// Función para mostrar/ocultar la barra de búsqueda
function toggleSearchBar() {
    const searchBar = document.getElementById('full-search-bar');
    if (searchBar.style.display === 'none' || searchBar.style.display === '') {
        searchBar.style.display = 'block';
    } else {
        searchBar.style.display = 'none';
    }
}

// Función de búsqueda (la misma que antes)
function searchPages() {
    const pages = [
        { name: "Mensaje del Director", url: "Nuestro Liceo/MensajeDirector.html" },
        { name: "Nuestra Historia", url: "Nuestro Liceo/NuestraHistoria.html" },
        { name: "Misión y Visión", url: "Nuestro Liceo/Mision&Vision.html" },
        { name: "Sellos Educativos", url: "Nuestro Liceo/SellosEducativos.html" },
        { name: "Proyecto Educativo", url: "Nuestro Liceo/ProyectoEducativo.html" },
        { name: "Calendario de Actividades", url: "Nuestro Liceo/Calendario.html" },
        { name: "Organigrama", url: "Nuestro Liceo/Organigrama.html" },
        { name: "Nuestros Espacios", url: "Nuestro Liceo/NuestrosEspacios.html" },
        { name: "Equipo Directivo", url: "02.Nuestro Equipo/EquipoDirectivo.html" },
        { name: "Docentes U.T.P", url: "02.Nuestro Equipo/DocentesUTP.html" },
        { name: "Orientación y Convivencia", url: "02.Nuestro Equipo/Orientacion&Convivencia.html" },
        { name: "C.R.A", url: "02.Nuestro Equipo/CRA.html" },
        { name: "Innovación", url: "02.Nuestro Equipo/Innovacion.html" },
        { name: "Documentos de Gestión", url: "Documentos Institucionales/DocumentosGestion.php" },
        { name: "Protocolos", url: "Documentos Institucionales/Protocolos.php" },
        { name: "Planes De Estudios", url: "Documentos Institucionales/PlanesEstudio.php" },
        { name: "Primer Ciclo", url: "Cursos/PrimerCiclo.php" },
        { name: "Segundo Ciclo", url: "Cursos/SegundoCiclo.php" },
        { name: "EPJA", url: "Cursos/EPJA.php" },
        { name: "Consejo Escolar", url: "05.Comunidad/ConsejoEscolar.html" },
        { name: "C.E.A.L.", url: "05.Comunidad/CEAL.html" },
        { name: "Centro de Padres y Apoderados", url: "05.Comunidad/CentroPadres.html" },
        { name: "C.P.H.S.", url: "05.Comunidad/CPHS.html" },
        { name: "Equipo de Bienestar", url: "05.Comunidad/EquipoBienestar.html" },
        { name: "Ex Estudiantes", url: "05.Comunidad/ExEstudiantes.html" },
        { name: "Galería", url: "Galeria/Galeria.php" },
        { name: "Noticias y Comunicados", url: "07.Noticias & Comunicados/Noticias&Comunidad.html" },
        { name: "Intranet", url: "Intranet/intranet.php" }
    ];

    const searchQuery = document.getElementById('search-input').value.toLowerCase();
    const filteredPages = pages.filter(page => page.name.toLowerCase().includes(searchQuery));

    const resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = '';

    if (searchQuery.length > 0) {
        filteredPages.forEach(page => {
            const link = document.createElement('a');
            link.href = page.url;
            link.textContent = page.name;
            resultsContainer.appendChild(link);
        });
        resultsContainer.style.display = 'block';
    } else {
        resultsContainer.style.display = 'none';
    }
}

// Función para cerrar todos los dropdowns
function closeAllDropdowns() {
    document.querySelectorAll('.dropdown-content').forEach(dropdown => {
        dropdown.classList.remove('show');
    });
}

// Cerrar los dropdowns si se hace clic fuera de ellos
window.onclick = function() {
    closeAllDropdowns();
}
function openNav() {
    document.getElementById("sidebar").style.width = "250px";
}

//Funcion Slider Imagenes//
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlide(index) {
    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }
    document.querySelector('.slider').style.transform = `translateX(-${currentSlide * 100}%)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

setInterval(nextSlide, 5000); // Cambia de imagen cada 5 segundos

// Reiniciar la animación de la barra de progreso al cambiar la imagen manualmente
document.querySelectorAll('.prev, .next').forEach(button => {
    button.addEventListener('click', () => {
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            bar.style.animation = 'none';
            bar.offsetHeight; /* Trigger reflow */
            bar.style.animation = 'progress 5s linear infinite'; /* Re-enable the animation */
        });
    });
});

//Funcion MAP//
function initMap() {
    // Coordenadas de la ubicación deseada (reemplaza con las coordenadas correctas)
    var location = {lat: -36.897069, lng: -72.031277}; // Ejemplo: Santiago, Chile

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15, // Ajusta el nivel de zoom según sea necesario
        center: location
    });

    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}
window.initMap = initMap;
