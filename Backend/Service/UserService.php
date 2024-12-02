<?php

// Incluir la clase de conexión y las dependencias necesarias
require_once '../Config/dbConection.php';
require_once '../Model/User.php';
require_once '../Config/Bootstrap.php';
require_once 'SessionService.php';

class UserService
{
    private $entityManager;
    private $SessionService;

    public function __construct()
    {
        // Obtener la conexión desde dbConection (requiere un EntityManager de Doctrine)
        $this->entityManager = Bootstrap::getEntityManager();
        $this->SessionService = new SessionService();

    }

    public function loginUsuario($data) {
        if (isset($data['identificacion'], $data['password'])) {
            $user = $this->entityManager->getRepository(User::class)->findOneBy(['identificacion' => $data['identificacion']]);

            if (!$user) {
                header('Content-Type: application/json', true, 404);
                echo json_encode(['error' => 'Usuario no encontrado']);
                return;
            }
            // Validar contraseña (asumiendo que usas hashing de contraseñas)
            if (!password_verify($data['password'], $user->getPassword())) {

                header('Content-Type: application/json', true, 401);

                json_encode(['error' => 'Contraseña incorrecta']);
                return;
            }
            // Si el login es exitoso, devolver respuesta

            $this->SessionService->iniciarSesion($user);
            $usuario = [
                "id" => $user->getId(),
                "nombre" => $user->getName() . " " . $user->getLastName(),
                "email" => $user->getEmail()
            /*  "foto" => "https://ejemplo.com/foto.jpg"*/
            ];
            header('Content-Type: application/json', true, 200);
            echo json_encode(['Usuario' => $usuario]);
            return;
        } else {
            header('Content-Type: application/json', true, 400);
            echo json_encode(['error' => 'Datos incompletos']);
            return;
        }
        
    }



    public function registrarUsuario($data)
    {
        // Verificar que todos los campos necesarios estén presentes
        if (isset($data['name'], $data['username'], $data['password'], $data['lastName'], $data['email'], $data['phone'], $data['gender'], $data['identificacion'])) {
            // Saneamiento de datos
            $name = htmlspecialchars(strip_tags($data['name']));
            $username = htmlspecialchars(strip_tags($data['username']));
            $password = htmlspecialchars(strip_tags($data['password']));
            $lastName = htmlspecialchars(strip_tags($data['lastName']));
            $email = htmlspecialchars(strip_tags($data['email']));
            $phone = htmlspecialchars(strip_tags($data['phone']));
            $gender = htmlspecialchars(strip_tags($data['gender']));
            $identificacion = htmlspecialchars(strip_tags($data['identificacion']));

            // Crear un nuevo objeto User
            $user = new User();
            $user->setName($name);
            $user->setUsername($username);
            $user->setPassword(password_hash($password, PASSWORD_BCRYPT)); // Cifrado de la contraseña
            $user->setLastName($lastName);
            $user->setIdentification($identificacion);
            $user->setPhone($phone);
            $user->setEmail($email);
            $user->setGender($gender);


            try {
                // Persistir la entidad en la base de datos
                $this->entityManager->persist($user); // Persistir el objeto User
                $this->entityManager->flush(); // Ejecutar la operación de inserción en la base de datos

                header('Content-Type: application/json', true, 200);
                echo json_encode(['Successful' => 'Usuario registrado']);
                exit;
            } catch (\Exception $e) {
                header('Content-Type: application/json', true, 400);
                echo json_encode(['error' => 'Intento fallido de registro']);
                exit;
            }
        } else {
            header('Content-Type: application/json', true, 400);
            echo json_encode(['error' => 'Todos los campos son requeridos']);
            exit;
        }
    }
}
