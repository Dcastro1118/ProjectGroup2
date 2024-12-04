<?php

include_once '../../Backend/Model/User.php';



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
        return isset($_SESSION['username']);
    }

    // Cierra la sesión
    public function cerrarSesion() {
        session_start();
        session_unset();
        session_destroy();
    }

    public function middleware(){
        if (!$this->isLoggedIn()){
            header("Location: http://localhost/ProjectGroup2/Frontend/HTML/Login.php");
        }
    }
}
