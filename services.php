<?php
session_start(); // Iniciar la sesión al principio de cada archivo PHP
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Verde Escolar</title>
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

    <!-- Contenido principal -->
    <div class="container">
        <h1 class="title">Nuestros Servicios</h1>

        <!-- Grid de servicios -->
        <div class="service-grid">
            <!-- Servicio de Limpieza -->
            <div class="service-card">
                <img src="img/imagen 4 la misma vaina que la imagen 3.png" alt="Servicio de Limpieza" class="service-image">
                <div class="service-content">
                    <h2>Limpieza de Áreas Verdes</h2>
                </div>
                <div class="service-details">
                    <h3>Descripción</h3>
                    <p>Nos encargamos de mantener áreas verdes impecables para que siempre luzcan hermosas y sanas.</p>
                    <h3>Precio</h3>
                    <p>Desde $50 por metro cuadrado.</p>
                    <button class="service-button">Contratar Servicio</button>
                </div>
            </div>

            <!-- Servicio de Sembrado -->
            <div class="service-card">
                <img src="img/Imagen 3 hombre anciano recogiendo cafe.png" alt="Servicio de Sembrado" class="service-image">
                <div class="service-content">
                    <h2>Sembrado de Plantas</h2>
                </div>
                <div class="service-details">
                    <h3>Descripción</h3>
                    <p>Ofrecemos un servicio integral de sembrado de árboles y plantas, con enfoque en la sostenibilidad.</p>
                    <h3>Precio</h3>
                    <p>Desde $100 por árbol o planta.</p>
                    <button class="service-button">Contratar Servicio</button>
                </div>
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