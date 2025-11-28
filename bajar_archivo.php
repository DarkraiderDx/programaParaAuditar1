<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: personal.php');
    exit();
}

include("conexion.php");
$link = conectarse();

// Sanitizar id para evitar SQL Injection
$id = intval($_REQUEST['id']);

$qry = "SELECT * FROM informacion WHERE id_informacion = $id";

// Ejecutar consulta usando MySQLi
$res = mysqli_query($link, $qry);

if (!$res) {
    die("Error en la consulta: " . mysqli_error($link) . " || qry::$qry");
}

$obj = mysqli_fetch_object($res);

if (!$obj) {
    die("No existe el archivo solicitado.");
}

// Encabezados para la descarga
header("Content-Type: {$obj->tipo}");
header('Content-Disposition: attachment; filename="'.$obj->nombre.'"');

// Mostrar el archivo almacenado en la BD
echo $obj->archivo;

// Cerrar conexión
mysqli_close($link);
?>
