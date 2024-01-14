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

/* Verificar si la base de datos ya existe */
$sql_check = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$db_name'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows == 0) {
    /* Crear la BD si no existe */
    $sql_create = "CREATE DATABASE $db_name";
    
    if ($conn->query($sql_create) === TRUE) {
        echo "Base de datos creada exitosamente";
    } else {
        echo "Error al crear la base de datos: " . $conn->error;
    }
}

/* Seleccionar BD de  MySql*/
$conn->select_db($db_name);
?>
