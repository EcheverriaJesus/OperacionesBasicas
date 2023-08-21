<?php
/* Variables para la conexion */
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';

/* Conexion a BD con las variables */
$conn = new mysqli($db_host, $db_user, $db_password);

/* Condicion para ver si hay errores con la conexion */
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

/* Nombre BD */
$db_name = 'operaciones_basicas';
/* Crear base de datos */
$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

/* Seleccionar BD de  MySql*/
$conn->select_db($db_name);
?>
