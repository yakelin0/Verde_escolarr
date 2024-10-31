<?php
session_start(); // Iniciar la sesión al principio de cada archivo PHP
?>
<?php
include 'db_connection.php';

$error_message = "";
$success_message = "";

// Procesa el formulario de registro cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Verifica que las contraseñas coincidan
    if ($password !== $confirm_password) {
        $error_message = "Las contraseñas no coinciden.";
    } else {
        // Si todo está correcto, guarda el usuario
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre_usuario, correo, contraseña) VALUES ('$username', '$email', '$password_hashed')";

        if ($conn->query($sql) === TRUE) {
            $success_message = "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            $error_message = "Error: " . $conn->error;
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
        </nav>
    </header>

    <!-- Registro -->
    <div class="register-container">
        <h2>Crear una cuenta</h2>

        <!-- Mensajes de éxito o error -->
        <?php if (!empty($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <?php if (!empty($success_message)): ?>
            <p style="color: green;"><?php echo $success_message; ?></p>
        <?php endif; ?>

        <form action="" method="POST">
            <input type="text" name="username" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="password" name="confirm_password" placeholder="Confirmar contraseña" required>
            <button type="submit">Registrarse</button>
        </form>

        <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
    </div>
</body>
</html>
