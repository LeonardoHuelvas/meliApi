<?php
class CategoryModel {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    public function insertCategory($data) {
        // Prepara la consulta SQL
        $stmt = $this->db->prepare("INSERT INTO Category (descripcion, path) VALUES (?, ?)");

        // Bindea los parámetros a la consulta SQL
        $stmt->bind_param("ss", $data['descripcion'], $data['path']);

        // Ejecuta la consulta
        $stmt->execute();

        // Cierra la consulta
        $stmt->close();
    }
}
?>
