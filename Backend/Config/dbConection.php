<?php

use Doctrine\DBAL\DriverManager;

class dbConection{
    private $host = "localhost"; // Dirección del servidor
    private $db_name = "hotel_bitsu_db"; // Nombre de la base de datos
    private $username = "root"; // Usuario de la base de datos
    private $password = "Luna24+"; // Contraseña de la base de datos
    private $conn; // Variable para almacenar la conexión

    // Método para obtener la conexión
    public function getConnection(){
        $connectionParams = [
            'dbname' => $this->db_name,
            'user' => $this->username,
            'password' => $this->password,
            'host' => $this->host,
            'driver' => 'pdo_mysql',
        ];
        try {
            $this->conn = DriverManager::getConnection($connectionParams);
        } catch (\Doctrine\DBAL\Exception $e) {
            // Manejo de errores si la conexión falla
            echo "Error de conexión: " . $e->getMessage();
            exit();
        }

        return $this->conn; // Retorna la conexión
    }

    public function closeConnection() {
        $this->conn = null; // Cerrar la conexión
    }

}
