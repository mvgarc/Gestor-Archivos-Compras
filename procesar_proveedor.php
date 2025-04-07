<?php
session_start();
if (!isset($_SESSION["usuario_id"])) {
    header("Location: index.php");
    exit();
}

require 'conexion.php';

// Primero insertamos la marca
$marca_nombre = $_POST["marca"];
$pagina_web = $_POST["pagina_web"];

$stmt = $conn->prepare("INSERT INTO marcas (nombre, pagina_web) VALUES (:nombre, :pagina_web)");
$stmt->bindParam(":nombre", $marca_nombre);
$stmt->bindParam(":pagina_web", $pagina_web);
$stmt->execute();
$marca_id = $conn->lastInsertId();

// Luego insertamos el proveedor con esa marca
$stmt = $conn->prepare("INSERT INTO proveedores (nombre, direccion_fiscal, vendedor_nombre, vendedor_telefono, marca_id)
                        VALUES (:nombre, :direccion, :vendedor_nombre, :vendedor_telefono, :marca_id)");

$stmt->bindParam(":nombre", $_POST["nombre"]);
$stmt->bindParam(":direccion", $_POST["direccion"]);
$stmt->bindParam(":vendedor_nombre", $_POST["vendedor_nombre"]);
$stmt->bindParam(":vendedor_telefono", $_POST["vendedor_telefono"]);
$stmt->bindParam(":marca_id", $marca_id);
$stmt->execute();

echo "Proveedor registrado correctamente. <a href='dashboard.php'>Volver al dashboard</a>";
?>