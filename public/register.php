<?php
require_once '../src/Database.php';
require_once '../src/User.php';

$db = new Database();
$conn = $db->dbConnection();

$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $user = new User($conn);
    $user->setUsername($username);
    $user->setPassword($password);
    $user->setEmail($email);

    if ($user->register()) {
        $message = '<div class="alert alert-success">¡Registro exitoso!</div>';
    } else {
        $message = '<div class="alert alert-danger">El registro falló. Inténtalo de nuevo.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Registro de Usuario</h3>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($message)) echo $message; ?>
                        <form method="POST" action="register.php">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>&copy; <?php echo date('Y'); ?> - Registro</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>