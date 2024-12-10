
<?php
include_once "../../Backend/Service/UserService.php";

$userService = new UserService();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // Recuperar el contenido del cuerpo de la solicitud (el JSON enviado)
    $jsonInput = file_get_contents('php://input');
    $data = json_decode($jsonInput, true);
    if ($data === null) {
        // Si el JSON no es válido, responder con un error
        echo json_encode(["error" => "El JSON no es válido"]);
        http_response_code(400); // Código de error 400 (Bad Request)
        exit;
    }

    if ($data['action'] === "searchUser") {

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
    } elseif ($data['action'] === "getAllUsers") {
        $users = $userService->getAllUsers();
        $usersArray = usersToArray($users);
        header('Content-Type: application/json', true, 200);
        echo json_encode($usersArray);
    } elseif ($data['action'] === "saveChanges") {
        $user = $userService->updateUsers($data);
        header('Content-Type: application/json', true, 200);
        echo json_encode($user);
    } elseif ($data['action'] === "deleteUser") {
        if ($userService->deleteUser($data['userId'])) {
            header('Content-Type: application/json', true, 200);
        } else {
            echo json_encode(["error" => "No se elimino el usuario"]);
            http_response_code(404); // Código de error 400 (Bad Request)
        }
    }
} else {
    // Si no es una solicitud POST, devolver un error
    echo json_encode(["error" => "Método no permitido"]);
    http_response_code(405); // Código de error 405 (Method Not Allowed)
    exit;
}

function usersToArray($users)
{
    $result = [];

    foreach ($users as $user) {
        $result[] = [
            'user_id' => $user->getId(),
            'name' => $user->getName(),
            'user_name' => $user->getUsername(),
            'last_name' => $user->getLastName(),
            'identificacion' => $user->getIdentification(),
            'phone' => $user->getPhone(),
            'email' => $user->getEmail(),
            'gender' => $user->getGender(),
        ];
    }

    return $result;
}
