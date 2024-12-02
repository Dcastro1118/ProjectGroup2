<?php

require_once '../Model/User.php';


class SessionService {
    // Inicia una sesión con los datos del usuario
    public function iniciarSesion($user) {
        session_start();
        $_SESSION['username'] = $user->getName();
        $_SESSION['identificacion'] = $user->getIdentification();
        $_SESSION['correo'] = $user->getEmail();
      //  $_SESSION['photo'] = $user->photo;
    }

    // Verifica si el usuario está logueado
    public function isLoggedIn() {
        session_start();
        return isset($_SESSION['user']);
    }

    // Cierra la sesión
    public function cerrarSesion() {
        session_start();
        session_unset();
        session_destroy();
    }
}
