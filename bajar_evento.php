<?php
session_start();
include("conexion.php");
$link = conectarse();

$id = intval($_REQUEST['id']); // seguridad

$qry = "SELECT * FROM eventos WHERE id_evento = $id";
$res = $link->query($qry);

if (!$res) {
    die("Error en la consulta: " . $link->error . " qry::$qry");
}

$obj = $res->fetch_object();

header("Content-type: {$obj->tipo}");
header('Content-Disposition: attachment; filename="'.$obj->nombre_archivo.'"');

echo $obj->archivo;

$link->close();
?>
