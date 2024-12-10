<?php

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;


#[Entity]
#[Table('rooms')]
class Room{
    #[Id]
    #[Column(name:"room_id"), GeneratedValue]
    private int $roomId;
    #[Column(name:"reservation_id")]
    private int $reservationId;
    #[Column(nullable: false)]
    private int $capacity;
    #[Column(nullable: false)]
    private int $price;
    #[Column(nullable: false)]
    private int $floor;
    #[Column(name:"room_type", nullable: false)]
    private string $roomType;
    #[Column(name:"room_number", nullable: false)]
    private int $roomNumber;
    #[Column(nullable: false)]
    private string $mayordomo;

    public function getRoomId(){
        return $this->roomId;   
    }

    public function getReservationId(){
        return $this->reservationId;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getFloor(){
        return $this->floor;
    }

    public function setFloor($floor){
        $this->capacity = $floor;
    }
    public function getRoomType(){
        return $this->roomType;
    }

    public function setRoomType($roomType){
        $this->roomType = $roomType;
    }
    public function getRoomNumber(){
        return $this->roomNumber;
    }

    public function setRoomNumber($roomNumber){
        $this->roomNumber = $roomNumber;
    }
    public function getMayordomo(){
        return $this->mayordomo;
    }

    public function setMayordomo($mayordomo){
        $this->mayordomo = $mayordomo;
    }


}