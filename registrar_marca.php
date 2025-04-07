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
    <title>Registrar Marca</title>
</head>
<body>
    <h2>Registro de Marca</h2>
    <form action="procesar_marca.php" method="post">
        <label>Nombre de la marca:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Página web:</label><br>
        <input type="url" name="pagina_web" required><br><br>

        <button type="submit">Registrar Marca</button>
    </form>
</body>
</html>
