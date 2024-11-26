<?php

// Incluir el archivo de configuración y el controlador
require_once '../Config/dbConection.php';
require_once '../Config/Bootstrap.php';
require_once '../Model/User.php';
require_once '../Service/UserService.php';

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos de la solicitud (pueden ser JSON o datos de formulario)



    $data = json_decode(file_get_contents('php://input'), true); // Obtener datos en formato JSON


    if ($data['action'] == 'register') {
        // Crear instancia de AuthController
        $authController = new UserService();

        // Registrar el usuario
        $response = $authController->registrarUsuario($data);

        // Responder con el resultado
        echo json_encode(['message' => $response]);

    } elseif ($data['action'] == 'login') {
        // Crear instancia de AuthController
        $authController = new UserService();

        // Registrar el usuario
        $response = $authController->loginUsuario($data);
    
        // Responder con el resultado
        echo json_encode(['message' => $response]);
    }
        
} else {
    echo json_encode(['message' => 'Método no permitido']);
}
    


