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
    <title>Registrar Proveedor</title>
</head>
<body>
    <h2>Registro de Proveedor</h2>
    <form action="procesar_proveedor.php" method="post">
        <label>Nombre del proveedor:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Dirección fiscal:</label><br>
        <input type="text" name="direccion" required><br><br>

        <label>Nombre del vendedor:</label><br>
        <input type="text" name="vendedor_nombre" required><br><br>

        <label>Teléfono del vendedor:</label><br>
        <input type="text" name="vendedor_telefono" required><br><br>

        <label>Marca asociada:</label><br>
        <input type="text" name="marca" required><br><br>

        <label>Página web de la marca:</label><br>
        <input type="url" name="pagina_web" required><br><br>

        <button type="submit">Registrar Proveedor</button>
    </form>
</body>
</html>