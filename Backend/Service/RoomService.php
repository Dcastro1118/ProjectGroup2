<?php
require_once '../../Backend/Config/dbConection.php';
require_once '../../Backend/Model/Room.php';
require_once '../../Backend/Config/Bootstrap.php';
require_once '../../Backend/Service/SessionService.php';

class RoomService
{


    private $em;


    public function __construct()
    {
        $this->em = Bootstrap::getEntityManager();
    }

    function createRoom($data)
    {
        if (isset($data['type'], $data['capacity'], $data['floor'], $data['price'], $data['room-number'], $data['mayordomo'])) {
            // Saneamiento de datos
            $type = htmlspecialchars(strip_tags($data['type']));
            $capacity = htmlspecialchars(strip_tags($data['capacity']));
            $floor = htmlspecialchars(strip_tags($data['floor']));
            $price = htmlspecialchars(strip_tags($data['price']));
            $roomNumber = htmlspecialchars(strip_tags($data['room-number']));
            $mayordomo = htmlspecialchars(strip_tags($data['mayordomo']));


            // Crear un nuevo objeto User
            $room = new Room();

            $room->setRoomType($type);
            $room->setCapacity($capacity);
            $room->setFloor($floor);
            $room->setPrice($price);
            $room->setRoomNumber($roomNumber);
            $room->setMayordomo($mayordomo);


            try {
                // Persistir la entidad en la base de datos
                $this->em->persist($room); // Persistir el objeto User
                $this->em->flush(); // Ejecutar la operación de inserción en la base de datos

                header('Content-Type: application/json', true, 200);
                echo json_encode(['Successful' => 'Usuario registrado']);
                exit;
            } catch (\Exception $e) {
                header('Content-Type: application/json', true, 400);
                echo json_encode(['error' => 'Intento fallido de registro']);
                exit;
            }

        }
    }
    function getAllRooms()
    {
        $roomRepository = $this->em->getRepository(Room::class);
        $rooms = $roomRepository->findAll();
        return $rooms;
    }
}
