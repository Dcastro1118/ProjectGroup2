<?php

// Incluir el archivo de configuración y el controlador
require_once '../Config/dbConection.php';
require_once '../Config/Bootstrap.php';
require_once '../Model/User.php';
require_once '../Service/UserService.php';


$authService = new UserService();

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos de la solicitud (pueden ser JSON o datos de formulario)



    $data = json_decode(file_get_contents('php://input'), true); // Obtener datos en formato JSON


    if ($data['action'] == 'register') {
        // Registrar 
        $response = $authService->registrarUsuario($data);
        // Responder con el resultado
        echo json_encode(['message' => $response]);
    } elseif ($data['action'] == 'login') {
        // Login
        $authService->loginUsuario($data);
    } elseif ($data['action'] == 'logout'){
        // Logout 
        $authService->logoutUsuario();
    }
        
} else {
    echo json_encode(['message' => 'Método no permitido']);
}
    


