<?php
require_once 'db_config.php';

class OperacionModel {
    public function guardarOperacion($num1, $num2, $operacion, $resultado) {
        global $conn;

        $sql = "INSERT INTO operaciones (num1, num2, operacion, resultado) VALUES ('$num1', '$num2', '$operacion', '$resultado')";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>
