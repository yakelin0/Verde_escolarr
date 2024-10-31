<?php
session_start(); // Iniciar la sesión al principio de cada archivo PHP
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
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

    <!-- Contenido de Sobre Nosotros -->
    <div class="about-container">
        <h2>Sobre Nosotros</h2>
        <p>Somos estudiantes de grado 11 de media técnica de la institución educativa república de Uruguay, ubicada en el municipio de Medellín, Antioquia. Nuestro proyecto de grado se basa en diseñar una página web que facilite el acceso a información de
            las zonas verdes que se encuentran dentro de la institución, con el fin de concientizar a la comunidad educativa sobre los respectivos cuidados de estas.
        </p>

        <!-- Equipo -->
        <div class="team">
            <h3>Conoce a Nuestro Equipo</h3>
            <div class="team-members">
                <div class="team-member">
                    <img src="img/Andrés.jpeg" alt="Miembro del equipo">
                    <p><strong>Andrés Felipe londoño</strong><br>Diseñador Web</p>
                    <p>Andrés, es el encargado de la parte visual de nuestro proyecto.</p>
                </div>
                <div class="team-member">
                    <img src="img/Yakeline.jpeg" alt="Miembro del equipo">
                    <p><strong>Yakeline Pelaéz Durango</strong><br>Diseñadora Web</p>
                    <p>Junto a Andrés, Yakeline es la encargada de la parte visual de la pagina web.</p>
                </div>
                <div class="team-member">
                    <img src="img/Daniel.png" alt="Miembro del equipo">
                    <p><strong>Daniel Felipe Serna</strong><br>Desarrollador Web</p>
                    <p>Daniel, es el encargado del front-end y back-end de la pagina web</p>
                </div>
                <div class="team-member">
                    <img src="img/Esteban.jpeg" alt="Miembro del equipo">
                    <p><strong>Estaban Pimineta Higuita</strong><br>Desarrollador Web</p>
                    <p>Esteban, junto a Daniel, se encarga de hacer camboios en el codigo de la pagina web</p>
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