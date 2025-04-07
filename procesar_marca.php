<?php
session_start();
if (!isset($_SESSION["usuario_id"])) {
    header("Location: index.php");
    exit();
}

require 'conexion.php';

$nombre = $_POST["nombre"];
$pagina_web = $_POST["pagina_web"];

$stmt = $conn->prepare("INSERT INTO marcas (nombre, pagina_web) VALUES (:nombre, :pagina_web)");
$stmt->bindParam(":nombre", $nombre);
$stmt->bindParam(":pagina_web", $pagina_web);
$stmt->execute();

echo "Marca registrada exitosamente. <a href='dashboard.php'>Volver al dashboard</a>";
?>
