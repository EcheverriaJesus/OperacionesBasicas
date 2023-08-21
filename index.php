<?php
require 'Controllers/OperacionesController.php';

$operacionesController = new OperacionesController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    $resultado = $operacionesController->realizarOperacion($num1, $num2, $operacion);
    include 'views/resultado.php';
} else {
    include 'views/formulario.php';
}
?>