<?php


$reservationService = new ReservationService();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    
    $data = json_decode(file_get_contents('php://input'), true); // Obtener datos en formato JSON

if (isset($formObject['roomType'], $formObject['checkIn'], $formObject['checkOut'])) {
    $roomType = $formObject['roomType'];
    $checkIn = \DateTime::createFromFormat('Y-m-d', $formObject['checkIn']); // Convierte la fecha
    $checkOut = \DateTime::createFromFormat('Y-m-d', $formObject['checkOut']);
    
    // Valida que las fechas sean válidas y que $checkIn sea menor que $checkOut
    if ($checkIn && $checkOut && $checkIn < $checkOut) {
        // Llama a la función consultarDisponibilidad

        $availableRooms = $this->reservationService->consultarDisponibilidad($roomType, $checkIn, $checkOut);

        // Respuesta al cliente
        echo json_encode([
            'success' => true,
            'availableRooms' => $availableRooms,
        ]);
    } else {
        // Error en las fechas
        http_response_code(400);
        echo json_encode(['error' => 'Las fechas son inválidas']);
    }
} else {
    // Error en los datos del JSON
    http_response_code(400);
    echo json_encode(['error' => 'Faltan datos en la solicitud']);
}



}



