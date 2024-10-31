<?php
session_start(); // Iniciar la sesión al principio de cada archivo PHP
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Header -->
    <header>
        <a href="index.php" class="logo">
            <img src="img/Logo.png" alt="Home">
        </a>
        <nav>
            <!-- Enlaces principales -->
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

    <!-- Contenido del foro -->
    <div class="forum-container">
        <div class="forum-category">
            <h2>Discusión General</h2>
            <p>Comparte tus opiniones sobre el medio ambiente, zonas verdes y sostenibilidad.</p>

            <!-- Hilo del foro -->
            <div class="forum-thread">
                <a href="#">¿Cómo podemos mejorar las zonas verdes en las ciudades?</a>
                <span class="thread-details">10 respuestas - Última publicación: 05/09/2024</span>
            </div>

            <div class="forum-thread">
                <a href="#">Plantas nativas vs. Plantas exóticas</a>
                <span class="thread-details">7 respuestas - Última publicación: 04/09/2024</span>
            </div>

            <div class="forum-thread">
                <a href="#">El impacto de los parques en la biodiversidad urbana</a>
                <span class="thread-details">5 respuestas - Última publicación: 03/09/2024</span>
            </div>
        </div>

        <div class="forum-category">
            <h2>Proyectos Comunitarios</h2>
            <p>Comparte y discute proyectos relacionados con la mejora de áreas verdes.</p>

            <!-- Hilo del foro -->
            <div class="forum-thread">
                <a href="#">Iniciativa de reforestación en el parque central</a>
                <span class="thread-details">8 respuestas - Última publicación: 05/09/2024</span>
            </div>

            <div class="forum-thread">
                <a href="#">Creación de un huerto comunitario</a>
                <span class="thread-details">12 respuestas - Última publicación: 04/09/2024</span>
            </div>

            <div class="forum-thread">
                <a href="#">Voluntariado para limpieza de parques</a>
                <span class="thread-details">15 respuestas - Última publicación: 03/09/2024</span>
            </div>
        </div>
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

</body>

</html>