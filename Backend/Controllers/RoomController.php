<?php


include_once "../../Backend/Service/RoomService.php";

$roomService = new RoomService();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $jsonInput = file_get_contents('php://input');
    $data = json_decode($jsonInput, true);
    if ($data === null) {
        // Si el JSON no es válido, responder con un error
        echo json_encode(["error" => "El JSON no es válido"]);
        http_response_code(400); // Código de error 400 (Bad Request)
        exit;
    }
    if ($data['action'] === "createRoom") {
        // Recuperar el contenido del cuerpo de la solicitud (el JSON enviado)
        $roomService->createRoom($data);
        header('Content-Type: application/json', true, 200);
    } elseif ($data['action'] === "getAllRooms") {
        $rooms = $roomService->getAllRooms();
        $roomsArray = roomsToArray($rooms);
        header('Content-Type: application/json', true, 200);
        echo json_encode($roomsArray);
    }
}

function roomsToArray($rooms)
{
    $result = [];

    foreach ($rooms as $room) {
        $result[] = [
            'roomId' => $room->getId(),
            'type' => $room->getRoomType(),
            'capacity' => $room->getCapacity(),
            'floor' => $room->getFloor(),
            'price' => $room->getPrice(),
            'number' => $room->getRoomNumber(),
            'Mayordomo' => $room->getMayordomo()
        ];
    }

    return $result;
}
