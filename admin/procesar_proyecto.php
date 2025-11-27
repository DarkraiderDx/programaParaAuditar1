<?php
require_once('conexion.php');
mysql_set_charset('utf8');
$link=conectarse();

$nom=$_POST['nom'];
$dep=$_POST['departamento'];
$muni=$_POST['municipio'];
$com=$_POST['comunidad'];
$departamento=mysql_query("select ciudad from ciudad where id_ciudad='$dep'",$link);
$f1=mysql_fetch_array($departamento);
$departa=$f1['ciudad'];

$municipio=mysql_query("select municipio from municipio where id_municipio='$muni'",$link);
$f2=mysql_fetch_array($municipio);
$munici=$f2['municipio'];



$tiem=$_POST['tiem'];
$ben=$_POST['ben'];
$tipo=$_POST['tipo'];
$obj_e=$_POST['ob_especificos'];
$objetivo_es=nl2br($obj_e);
$obj_g=$_POST['ob_general'];
$objetivo_ge=nl2br($obj_g);
$resultados=$_POST['resultados'];
$resulta=nl2br($resultados);
$fecha =date("d-M-Y");



$query= "INSERT INTO proyectos (nombre,departamento,municipio,comunidad,tiempo_ejc,beneficiario,tipo,ob_especificos,ob_general,resultados,fecha)VALUES ('$nom','$dep','$muni','$com','$tiem','$ben','$tipo','$objetivo_es','$objetivo_ge','$resulta','$fecha')";
echo $query.'<br>';
$consulta=mysql_query($query,$link);
$men="los datos fueron registrados Correctamente";
header('Location: proyectos.php?men='.$men);
?>

  
  
