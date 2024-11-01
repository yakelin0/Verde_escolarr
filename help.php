<?php
session_start(); // Iniciar la sesión al principio de cada archivo PHP
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="stylesheet" href="css/styles.css">
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

    <!-- Contenido de Ayuda -->
    <div class="help-container">
        <h2>Centro de Ayuda</h2>

        <h3>Preguntas Frecuentes (FAQ)</h3>
        <p>Aquí encontrarás respuestas a algunas de las preguntas más comunes:</p>
        <ul>
            <li><strong>¿Cómo puedo registrarme?</strong><br> Para registrarte, haz clic en el botón "Sign-in" en la parte superior derecha del sitio y completa el formulario de registro.</li>
            <li><strong>¿Olvidaste tu contraseña?</strong><br> Haz clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión para restablecer tu contraseña.</li>
            <li><strong>¿Cómo puedo participar en los foros?</strong><br> Debes tener una cuenta para publicar en los foros. Una vez registrado, simplemente inicia sesión y dirígete a la sección de foros.</li>
            <li><strong>¿Qué son las Zonas Verdes?</strong><br> Es un espacio dedicado a proyectos de medio ambiente y biodiversidad en la comunidad. Puedes obtener más información o unirte a proyectos en la sección Zonas Verdes.</li>
        </ul>

        <h3>Contacto</h3>
        <p>Si no encuentras la respuesta que buscas, por favor contáctanos a través de:</p>
        <ul>
            <li>Correo electrónico: <a href="verdeescolar1@gmail.com">verdeescolar1@gmail.com</a></li>
            <li>Teléfono: +57 305 354 4648</li>
            <li>WhatsApp: <a href="https://wa.me/3053544648">Enviar mensaje por WhatsApp</a></li>
        </ul>
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