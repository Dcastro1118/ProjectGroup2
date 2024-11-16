<?php
// contactoController.php

// Verificar si la solicitud es POST
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

    // Procesar los datos recibidos (por ejemplo, enviarlos por correo)
    procesarFormulario($data);
} else {
    // Si no es una solicitud POST, devolver un error
    echo json_encode(["error" => "Método no permitido"]);
    http_response_code(405); // Código de error 405 (Method Not Allowed)
    exit;
}

function procesarFormulario($data) {
    // Extraer los datos del JSON recibido
    $nombre = isset($data['nombre']) ? $data['nombre'] : '';
    $email = isset($data['correo']) ? $data['correo'] : '';
    $telefono = isset($data['telefono']) ? $data['telefono'] : '';
    $identificacion = isset($data['identificacion']) ? $data['identificacion'] : '';
    $tipoConsulta = isset($data['tipoConsulta']) ? $data['tipoConsulta'] : '';
    $message = isset($data['comentarios']) ? $data['comentarios'] : '';

    // Validaciones básicas (si fuera necesario)
    if (empty($nombre) || empty($email) || empty($telefono) || empty($identificacion) || empty($tipoConsulta)) {
        echo json_encode(["error" => "Todos los campos son obligatorios"]);
        http_response_code(400);
        return;
    }

    // Enviar un correo (ejemplo básico):
    $to = "hotelbatsu@gmail.com"; // Cambia a tu dirección de correo
    $subject = "Contactar a $nombre";
    $body = 
    "Nombre: $nombre
    \nCorreo: $email
    \nTelefono: $telefono
    \nIdentificacion: $identificacion
    \nTipo de Consulta: $tipoConsulta
    \nMensaje:\n$message";
    
    $headers = "From: example@example.com";

    // Intentar enviar el correo y devolver una respuesta en JSON
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["success" => "Mensaje enviado correctamente"]);
        http_response_code(200); // Código de éxito 200 (OK)
    } else {
        echo json_encode(["error" => "Hubo un error al enviar el mensaje"]);
        http_response_code(500); // Código de error 500 (Internal Server Error)
    }
}
?>
