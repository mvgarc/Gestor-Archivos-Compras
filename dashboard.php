<?php
session_start();
if (!isset($_SESSION["usuario_id"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION["nombre"]); ?> 👋</h1>
    <p>Rol: <?php echo $_SESSION["rol"]; ?></p>

    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
