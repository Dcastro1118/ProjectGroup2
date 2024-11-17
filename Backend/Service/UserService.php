<?php

// Incluir la clase de conexión y las dependencias necesarias
require_once '../Config/dbConection.php';
require_once '../Model/User.php';
require_once '../Config/Bootstrap.php';

class UserService
{
    private $entityManager;

    public function __construct()
    {
        // Obtener la conexión desde dbConection (requiere un EntityManager de Doctrine)
        $this->entityManager = Bootstrap::getEntityManager();
    }

    public function registrarUsuario($data)
    {
        // Verificar que todos los campos necesarios estén presentes
        if (isset($data['name'], $data['username'], $data['password'], $data['lastName'], $data['email'], $data['phone'], $data['gender'])) {
            // Saneamiento de datos
            $name = htmlspecialchars(strip_tags($data['name']));
            $username = htmlspecialchars(strip_tags($data['username']));
            $password = htmlspecialchars(strip_tags($data['password']));
            $lastName = htmlspecialchars(strip_tags($data['lastName']));
            $email = htmlspecialchars(strip_tags($data['email']));
            $phone = htmlspecialchars(strip_tags($data['phone']));
            $gender = htmlspecialchars(strip_tags($data['gender']));

            // Crear un nuevo objeto User
            $user = new User();
            $user->setName($name);
            $user->setUsername($username);
            $user->setPassword(password_hash($password, PASSWORD_BCRYPT)); // Cifrado de la contraseña
            $user->setLastName($lastName);
            $user->setPhone($phone);
            $user->setEmail($email);
            $user->setGender($gender);


            try {
                // Persistir la entidad en la base de datos
                $this->entityManager->persist($user); // Persistir el objeto User
                $this->entityManager->flush(); // Ejecutar la operación de inserción en la base de datos

                return "Usuario registrado exitosamente";
            } catch (\Exception $e) {
                return "Error al registrar usuario: " . $e->getMessage();
            }
        } else {
            return "Todos los campos son requeridos";
        }
    }
}
