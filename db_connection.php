<?php
$servername = "localhost"; // o el nombre de tu servidor
$username = "root"; // tu usuario de MySQL
$password = ""; // tu contraseña de MySQL
$database = "verde_escolar"; // nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
