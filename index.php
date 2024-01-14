<?php
/* Requerir el controlador para las operaaciones */
require 'Controllers/OperacionesController.php';
/* Requerir la configuracion de la BD */
require 'db_config.php';

/* Variable para ocupra la clase del Controlador */
$operacionesController = new OperacionesController($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /* Obtnencion de los valores */
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

/* Enviar los dtaos al metodo RealizarOperacion en el Controlador */
    $resultado = $operacionesController->realizarOperacion($num1, $num2, $operacion);
    /* Llamar vista para el resultado */
    include 'views/resultado.php';
} else {
    /* volver a llamar formulario si no hubo resultado */
    include 'views/formulario.php';
}
?>