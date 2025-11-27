<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<?php
include("conexion.php");
$link=conectarse();
$nom=$_POST['nom'];
$dep=$_POST['departamento'];

$fec=$_POST['fecha_ini'];
$fec_fin=$_POST['fecha_fin'];

$departamento=mysql_query("select ciudad from ciudad where id_ciudad='$dep'",$link);
$f1=mysql_fetch_array($departamento);
$departa=$f1['ciudad'];

$muni=$_POST['municipio'];


$municipio=mysql_query("select municipio from municipio where id_municipio='$muni'",$link);
$f2=mysql_fetch_array($municipio);
$munici=$f2['municipio'];
$com=$_POST['comunidad'];

$pro=$_POST['produc'];
$cant=$_POST['cant'];
$tip=$_POST['tipo'];
$det=$_POST['det'];
$_FILES['img'];

$directorio = $_SERVER['DOCUMENT_ROOT'].'servicios/';
$nombre = $_FILES['img']['name'];
$tipo = $_FILES['img']['type'];
$tamano = $_FILES['img']['size'];

move_uploaded_file($_FILES['img']['tmp_name'],"servicios/".$_FILES['img']['name']);

 $query= "INSERT INTO servicios(nombre_propietario,departamento,municipio,comunidad,producto,cantidad,detalle,tipo,imagen,fecha,fecha_fin)VALUES('$nom','$departa','$munici','$com','$pro','$cant','$det','$tip','$nombre','$fec','$fec_fin')";
$consulta=mysql_query($query,$link);
$men='Los datos fueron almacenados correctamente';
header('Location: servicios.php?men='.urlencode($men));

?>
<body>
</body>
</html>