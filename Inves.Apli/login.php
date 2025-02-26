<?php
session_start();

$valid_users = [
    "Carlos" => ["password" => "12345", "image" => "Foto1.png"],
    "Kevin" => ["password" => "12345", "image" => "foto2.jpg"],
    "Edgar" => ["password" => "12345", "image" => "foto2.jpg"],
    "Yohana" => ["password" => "12345", "image" => "foto2.jpg"],
    "Lucia" => ["password" => "12345", "image" => "foto2.jpg"]
];


$error_message = "";
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if (array_key_exists($username, $valid_users) && $valid_users[$username]['password'] === $password) {
        $_SESSION['user'] = $username;
        $_SESSION['user_image'] = $valid_users[$username]['image'];
        header("Location: index.php");
        exit();
    } else {
        $error_message = "<p class='error'>El usuario o la contraseña es incorreta</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
    <div class="logo-container">
        <img src="/img/logo.png" alt="Logo de la empresa">
    </div>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php echo $error_message; ?>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Usuario" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>

