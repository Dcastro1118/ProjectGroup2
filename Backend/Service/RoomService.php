<?php
use Doctrine\ORM\EntityManagerInterface;

class RoomService{


    private $em;


    public function __construct()
    {
        $this->em = Bootstrap::getEntityManager();
    }


    public function createRooms(){
        for ($i = 0; $i < $quantity; $i++) {
            $room = new Room();
            $room->setType($roomType);
            $room->setName($baseName . ' ' . ($baseNumber + $i));
            $room->setNumber($baseNumber + $i); 
            $this->em->persist($room);
        }
        $this->em->flush(); // Guarda todo en la base de datos de una sola vez
    }
}
