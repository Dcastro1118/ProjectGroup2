<?php

// Incluir la clase de conexión y las dependencias necesarias
require_once '../../Backend/Config/dbConection.php';
require_once '../../Backend/Model/User.php';
require_once '../../Backend/Config/Bootstrap.php';
require_once '../../Backend/Service/SessionService.php';

class UserService
{
    private $entityManager;
    private $sessionService;

    public function __construct()
    {
        // Obtener la conexión desde dbConection (requiere un EntityManager de Doctrine)
        $this->entityManager = Bootstrap::getEntityManager();
        $this->sessionService = new SessionService();
    }

    public function loginUsuario($data)
    {
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

            $this->sessionService->iniciarSesion($user);
            $usuario = [
                "id" => $user->getId(),
                "nombre" => $user->getName() . " " . $user->getLastName(),
                "email" => $user->getEmail()
                /*  "foto" => "https://ejemplo.com/foto.jpg"*/
            ];

            $response = [
                "Usuario" => $usuario
            ];

            header('Content-Type: application/json', true, 200);
            echo json_encode($response);
            return;
        } else {
            header('Content-Type: application/json', true, 400);
            echo json_encode(['error' => 'Datos incompletos']);
            return;
        }
    }

    public function logoutUsuario()
    {
        $this->sessionService->cerrarSesion();
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

    function getAllUsers()
    {
        $userRepository = $this->entityManager->getRepository(User::class);
        $users = $userRepository->findAll();
        return $users;
    }

    function getUserByIdentification($data)
    {
        $userRepository = $this->entityManager->getRepository(User::class);
        $users = $userRepository->findOneBy(['identificacion' => $data['identification']]);
        return $users;
    }

    public function deleteUser($userId)
    {
        try {
            // Buscar el usuario por su ID
            $user = $this->entityManager->find(User::class, $userId);

            // Si no se encuentra el usuario, lanzar una excepción
            if (!$user) {
                header('Content-Type: application/json', true, 404);
                echo json_encode(['error' => 'Usuario no encontrado']);
                return;
            }

            // Eliminar el usuario
            $this->entityManager->remove($user);
            $this->entityManager->flush();

            // Responder con éxito
            header('Content-Type: application/json', true, 200);
            echo json_encode(['success' => 'Usuario eliminado correctamente']);
            return true;
        } catch (\Exception $e) {
            // Manejar errores y responder
            header('Content-Type: application/json', true, 500);
            echo json_encode(['error' => 'Error al intentar eliminar el usuario']);
            return false;
        }
    }


    function updateUsers($data)
    {

        $user = $this->entityManager->find(User::class, $data['user_id']);
        if (!$user) {
            throw new Exception('Usuario no encontrado');
        }
        // Actualizamos los campos del usuario con los datos proporcionados
        if (isset($data['nombre'])) {
            $user->setName($data['nombre']);
        }
        if (isset($data['user-name'])) {
            $user->setUsername($data['user-name']);
        }
        if (isset($data['password'])) {
            $user->setPassword($data['password']);
        }
        if (isset($data['apellido'])) {
            $user->setLastName($data['apellido']);
        }
        if (isset($data['telefono'])) {
            $user->setPhone($data['telefono']);
        }
        if (isset($data['e-mail'])) {
            $user->setEmail($data['e-mail']);
        }
        if (isset($data['genero'])) {
            $user->setGender($data['genero']);
        }
        // Guardamos los cambios en la base de datos
        $this->entityManager->flush();

        return $user;
    }
}
