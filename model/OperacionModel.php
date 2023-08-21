

<?php
class OperacionModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->crearTabla();
    }

    private function crearTabla() {
        $sql = "CREATE TABLE IF NOT EXISTS operaciones (
            id INT AUTO_INCREMENT PRIMARY KEY,
            num1 FLOAT NOT NULL,
            num2 FLOAT NOT NULL,
            operacion VARCHAR(20) NOT NULL,
            resultado FLOAT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        $this->conn->query($sql);
    }

    public function guardarOperacion($num1, $num2, $operacion, $resultado) {
        $sql = "INSERT INTO operaciones (num1, num2, operacion, resultado) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ddsd", $num1, $num2, $operacion, $resultado);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
