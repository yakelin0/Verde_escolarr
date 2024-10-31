<?php
session_start(); // Iniciar la sesión al principio de cada archivo PHP
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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

    <!-- Slide -->
    <div class="slide-container">
        <div class="slide">
            <img src="img/Parque natural.avif" alt="Parque Natural">
            <img src="img/6268805470192.jpeg" alt="Jardín Botánico">
            <img src="img/reserva.jpg" alt="Reserva Ecológica">
        </div>
        <!-- Controles del slider -->
        <div class="slider-controls">
            <button class="control-btn" id="prevBtn">❮</button>
            <button class="control-btn" id="nextBtn">❯</button>
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
    <script src="js/slide.js"></script>
</body>

</html>
