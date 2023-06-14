<?php

class ItemModel {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    /**
     * Summary of getItemsFromAPI
     * @return mixed
     */
    public function getItemsFromAPI() {
        $url = "https://api.mercadolibre.com/sites/MLA/search?q=chromecast&limit=50";
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        return $data['results'];
    }

    public function insertItem($data) {
        // prepara la consulta SQL
        // id 	nombre 	precio 	estado 	categoria_id 	
        $stmt = $this->db->prepare("INSERT INTO Item (nombre, precio, estado, categoria_id) VALUES (?, ?, ?, ?, ?)");
    
        // bindea los parámetros a la consulta SQL
        $stmt->bind_param("isssi",
            $data['id'],
            $data['nombre'],
            $data['precio'],
            $data['estado'],
            $data['categoria_id']);
    
        // ejecuta la consulta
        $stmt->execute();
    
        // cierra la consulta
        $stmt->close();
    }
    
}
