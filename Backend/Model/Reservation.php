<?php

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;


#[Entity]
#[Table('reservations')]
class Reservation{
    #[Id]
    #[Column, GeneratedValue]
    private int $reservationId;
    #[Column(nullable: false)]
    private int $user_id;
    #[Column(nullable: false)]
    private DateTime $checkIn;
    #[Column(nullable: false)]
    private DateTime $checkOut;


    public function getReservationId(){
        return $this->reservationId;   
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function getCheckIn(){
        return $this->checkIn;
    }

    public function setCheckIn($checkIn){
        $this->checkIn = $checkIn;
    }

    public function getCheckOut(){
        return $this->checkOut;
    }

    public function setCheckout($checkOut){
        $this->checkOut = $checkOut;
    }
}