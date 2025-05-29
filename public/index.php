<?php
require_once '../src/Database.php';
require_once '../src/User.php';
require_once '../src/config/config.php';
require_once __DIR__ . '/../routes/web.php';

$database = new Database();
$db = $database->dbConnection();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Display the registration form
    include 'register.php';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $user = new User($db);
    $user->username = $_POST['username'];
    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->email = $_POST['email'];

    if ($user->register()) {
        echo "Registration successful!";
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>