<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['user'];
$user_image = $_SESSION['user_image'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>entrada</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <div class="logo-container2">
        <img src="/img/logo.png" alt="Logo de la empresa">
    </div>
    <div class="login-container2">
        <div class="entrada-container">
            <h1>Bienvenido <?php echo htmlspecialchars($username); ?></h1>
            <div class="user-image-container">
                <img src="img/<?php echo htmlspecialchars($user_image); ?>" alt="Imagen de perfil de <?php echo htmlspecialchars($username); ?>">
            </div>
            <a href="logout.php" class="logout-button">Cerrar sesión</a>
        </div>
    </div>
</body>
</html>