<?php

#[Entity]
#[Table('rooms')]
class Room{

    #[Colum, GeneratedValue]
    private int $roomId;
    #[Colum(nullable: false)]
    private int $reservationId;
    #[Colum(nullable: false)]
    private int $capacity;
    #[Colum(nullable: false)]
    private int $price;
    #[Colum(nullable: false)]
    private int $floor;

    public function getRoomId(){   
    }

    public function getReservationId(){

    }

    public function getCapacity(){

    }

    public function setCapacity(){

    }

    public function getPrice(){

    }

    public function setPrice(){

    }

    public function getFloor(){

    }

    public function setFloor(){

    }


}