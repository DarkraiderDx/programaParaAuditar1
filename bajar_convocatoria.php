<?php
session_start();

include("conexion.php");
$link = conectarse();

// Proteger el ID contra inyección SQL
$id = intval($_REQUEST['id']);

$qry = "SELECT * FROM convocatorias WHERE id_convocatorias = $id";

// Ejecutar consulta con MySQLi
$res = mysqli_query($link, $qry);

if (!$res) {
    die("Error en la consulta: " . mysqli_error($link) . " || qry::$qry");
}

$obj = mysqli_fetch_object($res);

if (!$obj) {
    die("No existe el archivo solicitado.");
}

// Encabezados de descarga
header("Content-Type: {$obj->tipo}");
header('Content-Disposition: attachment; filename="'.$obj->nombre_archi.'"');

// Mostrar archivo
echo $obj->archivo;

// Cerrar conexión
mysqli_close($link);
?>
