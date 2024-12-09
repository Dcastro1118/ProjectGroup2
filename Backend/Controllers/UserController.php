
<?php
include_once "../../Backend/Service/UserService.php";

$userService = new UserService();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar el contenido del cuerpo de la solicitud (el JSON enviado)
    $jsonInput = file_get_contents('php://input');
    
    // Decodificar el JSON a un array asociativo de PHP
    $data = json_decode($jsonInput, true);

    // Verificar si la decodificación fue exitosa
    if ($data === null) {
        // Si el JSON no es válido, responder con un error
        echo json_encode(["error" => "El JSON no es válido"]);
        http_response_code(400); // Código de error 400 (Bad Request)
        exit;
    }

    $user = $userService->getUserByIdentification($data);
    $usuario = [
        "id" => $user->getId(),
        "nombre" => $user->getName(),
        "apellido" => $user->getLastName(),
        "username" => $user->getUsername(),
        "telefono" => $user->getPhone(),
        "email" => $user->getEmail(),
        "Identificacion" => $user->getIdentification(),
        "genero" => $user->getGender()
    ];

    $user = [
        "Usuario" => $usuario
    ];

    header('Content-Type: application/json', true, 200);
    echo json_encode($user);
    return;
} else {
    // Si no es una solicitud POST, devolver un error
    echo json_encode(["error" => "Método no permitido"]);
    http_response_code(405); // Código de error 405 (Method Not Allowed)
    exit;
}