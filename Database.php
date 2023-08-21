<?php
// Configuración de la base de datos
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'YesPoint';

// Conexión a la base de datos
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Verificación de la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>