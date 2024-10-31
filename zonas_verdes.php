<?php
session_start(); // Iniciar la sesión al principio de cada archivo PHP
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonas Verdes</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Leaflet CSS para el mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="js/map.js"></script>
</head>

<body>

    <!-- Header -->
    <header>
        <a href="index.php" class="logo">
            <img src="img/Logo.png" alt="Home">
        </a>
        <nav>
            <div class="main-links">
                <a href="zonas_verdes.php" class="zonas-verdes" style="background-color: green; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none;">Zonas Verdes</a>
                <a href="forum.php">Foros</a>
                <a href="help.php">Ayuda</a>
                <a href="aboutus.php">Sobre Nosotros</a>
                <a href="services.php">Servicios</a>
            </div>
            <!-- Enlaces de autenticación (Login y Sign-in) o Cerrar sesión -->
            <div class="auth-links">
                <?php if (isset($_SESSION['correo'])): ?>
                    <!-- Si el usuario está autenticado, muestra "Cerrar sesión" como enlace -->
                    <a href="logout.php" style="color: white; text-decoration: underline;">Cerrar sesión</a>
                <?php else: ?>
                    <a href="login.php">Login</a>
                    <a href="signin.php">Sign-in</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <!-- Contenido de Zonas Verdes -->
    <div class="map-container">
        <h2>Explora las Zonas Verdes</h2>
        <p>Selecciona en el mapa las diferentes zonas verdes disponibles en tu área.</p>
        <!-- Contenedor del mapa -->
        <div id="map"></div>
    </div>

    <!-- Footer -->
    <footer>
        <div style="display: flex; align-items: center;">
            <hr style="flex-grow: 1; border: none; height: 1px; background-color: white; margin: 0 10px;">
            <div class="social-buttons">
                <a href="https://www.instagram.com" target="_blank">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook.png" alt="Facebook">
                </a>
                <a href="https://www.whatsapp.com" target="_blank">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/whatsapp.png" alt="WhatsApp">
                </a>
                <a href="mailto:example@gmail.com" target="_blank">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/gmail.png" alt="Gmail">
                </a>
            </div>
            <hr style="flex-grow: 1; border: none; height: 1px; background-color: white; margin: 0 10px;">
        </div>
    </footer>

    <!-- Leaflet JS para el mapa 
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inicializar el mapa
        var map = L.map('map').setView([4.60971, -74.08175], 13); // Coordenadas centradas en Bogotá, por ejemplo

        // Añadir capa de mapa (usando OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Añadir marcadores de zonas verdes (puedes personalizar las coordenadas y descripciones)
        L.marker([4.6486259, -74.247895]).addTo(map)
            .bindPopup('<b>Parque Simón Bolívar</b><br>Zonas verdes, ciclovía y más.');

        L.marker([4.6126385, -74.0654875]).addTo(map)
            .bindPopup('<b>Jardín Botánico</b><br>Increíbles jardines y áreas de preservación.');

        L.marker([4.658083, -74.093429]).addTo(map)
            .bindPopup('<b>Cerro de Monserrate</b><br>Zona verde y turística.');
    </script>-->

</body>

</html>