<?php
class OperacionModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->crearTabla();
    }

/* Crear Tabla junto con sus campos y atributos*/
    private function crearTabla() {
        $sql = "CREATE TABLE IF NOT EXISTS operaciones (
            id INT AUTO_INCREMENT PRIMARY KEY,
            num1 FLOAT NOT NULL,
            num2 FLOAT NOT NULL,
            operacion VARCHAR(20) NOT NULL,
            resultado FLOAT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        /* Mandar en codigo Sql a ejecucion para que se cree la tabla */
        $this->conn->query($sql);
    }

    /* Metodo para guardar los datos en la BD */
    /* Definir metodo pasandole los atributos */
    public function guardarOperacion($num1, $num2, $operacion, $resultado) {
        /* codigo sql para insertar un dato en la tabla operaciones */
        $sql = "INSERT INTO operaciones (num1, num2, operacion, resultado) VALUES (?, ?, ?, ?)";
        /* Guardar la consulta */
        $stmt = $this->conn->prepare($sql);
        /* Indicar los valores de losatributos y vincularlos en posicion */
        $stmt->bind_param("ddsd", $num1, $num2, $operacion, $resultado);

        /* Se ejecuta el sql guardado y retorna el boolean*/
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
