<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../src/Database.php';

class UserController {
    public function showRegisterForm() {
        require __DIR__ . '/../views/register.php';
    }

    public function register() {
        $db = (new Database())->dbConnection();
        $user = new User($db);
        $user->username = $_POST['username'];
        $user->password = $_POST['password'];
        $user->email = $_POST['email'];
        if ($user->register()) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar";
        }
    }
}