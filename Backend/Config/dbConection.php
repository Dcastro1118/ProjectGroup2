<?php

class dbConection {
    private $host = "localhost"; // Dirección del servidor
    private $db_name = "hotel_bitsu_db"; // Nombre de la base de datos
    private $username = "root"; // Usuario de la base de datos
    private $password = ""; // Contraseña de la base de datos
    private $conn; // Variable para almacenar la conexión

    // Método para obtener la conexión
    public function getConnection() {
        $this->conn = null;

        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4";
            $this->conn = new PDO($dsn, $this->username, $this->password);

            // Configurar atributos de PDO
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Manejo de errores
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Resultados como arrays asociativos
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }

        return $this->conn;
    }
}
