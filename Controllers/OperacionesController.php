<?php
require_once 'model/OperacionModel.php';

class OperacionesController {
    public function realizarOperacion($num1, $num2, $operacion) {
        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    return "Error: División por cero";
                }
                break;
            default:
                return "Operación no válida";
        }

        $operacionModel = new OperacionModel();
        $guardado = $operacionModel->guardarOperacion($num1, $num2, $operacion, $resultado);

        if ($guardado) {
            return $resultado;
        } else {
            return "Error al guardar la operación";
        }
    }
}
?>
