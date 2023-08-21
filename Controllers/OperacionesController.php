<?php
class OperacionesController {
    public function realizarOperacion($num1, $num2, $operacion) {
        switch ($operacion) {
            case 'suma':
                return $num1 + $num2;
            case 'resta':
                return $num1 - $num2;
            case 'multiplicacion':
                return $num1 * $num2;
            case 'division':
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Error: División por cero";
                }
            default:
                return "Operación no válida";
        }
    }
}
?>
