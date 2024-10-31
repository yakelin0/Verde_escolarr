<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start(); // Iniciar sesión

// Verificar si el usuario ya está autenticado
if (isset($_SESSION['correo'])) {
    header("Location: index.php"); // Redirigir a la página principal si está autenticado
    exit();
}

// Procesar el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

    // Conectar a la base de datos
    $conn = new mysqli('localhost', 'root', '', 'verde_escolar'); // Cambia 'nombre_db' por el nombre real de tu base de datos

    // Comprobar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar credenciales
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE correo = ? AND contraseña = ?");
    $stmt->bind_param("ss", $correo, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $_SESSION['correo'] = $correo; // Establecer la sesión

        // Registrar el inicio de sesión en el historial
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $stmt_historial = $conn->prepare("INSERT INTO historial_inicios_sesion (correo, ip_address) VALUES (?, ?)");
        $stmt_historial->bind_param("ss", $correo, $ip_address);
        $stmt_historial->execute();

        header("Location: index.php"); // Redirigir a la página principal
        exit(); // Asegúrate de que esto esté presente
    } else {
        // Mostrar mensaje de error si las credenciales son incorrectas
        $error = "Correo o contraseña incorrectos.";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Header -->
    <header>
        <a href="index.php" class="logo">
            <img src="img/image-removebg-preview.png" alt="Home">
        </a>
        <nav>
            <div class="main-links">
                <a href="zonas_verdes.php" class="zonas-verdes" style="background-color: green; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none;">Zonas Verdes</a>
                <a href="forum.php">Foros</a>
                <a href="help.php">Ayuda</a>
                <a href="aboutus.php">Sobre Nosotros</a>
                <a href="services.php">Servicios</a>
            </div>
        </nav>
    </header>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
