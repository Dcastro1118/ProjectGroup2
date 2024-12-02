<?php

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('users')]
class User{
    #[Id]
    #[Column, GeneratedValue]
    private int $user_id;
    #[Column(nullable: false)]
    private string $name;
    #[Column(name: 'user_name')]
    private string $user_name;
    #[Column(nullable: false)]
    private string $password;
    #[Column(name:'last_name')]
    private string $last_name;
    #[Column(nullable: false)]
    private string $identificacion;
    #[Column(nullable: false)]
    private string $phone;
    #[Column(nullable: false)]
    private string $email;
    #[Column(nullable: false)]
    private string $gender;


    public function getId() {
        return $this->user_id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getUsername() {
        return $this->user_name;
    }

    public function setUsername($username) {
        $this->user_name = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function setLastName($lastName) {
        $this->last_name = $lastName;
    }

    public function getIdentification() {
        return $this->identificacion;
    }

    public function setIdentification($identification) {
        $this->identificacion = $identification;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }


}