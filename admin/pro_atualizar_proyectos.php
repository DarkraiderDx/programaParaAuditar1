<?php
include('conexion.php');
$link=conectarse();
$nom=$_POST['nom'];
$dep=$_POST['departamento'];
$mun=$_POST['municipio'];
$comu=$_POST['comunidad'];

$id=$_POST['id'];
$departamento=mysql_query("select ciudad from ciudad where id_ciudad='$dep'",$link);
$f1=mysql_fetch_array($departamento);
$departa=$f1['ciudad'];

$municipio=mysql_query("select municipio from municipio where id_municipio='$mun'",$link);
$f2=mysql_fetch_array($municipio);
$munici=$f2['municipio'];

$tiem=$_POST['tiem'];
$ben=$_POST['ben'];
$tipo=$_POST['tipo'];
$obje_especifico=$_POST['ob_especificos'];
$obje_general=$_POST['ob_general'];
$resultado=$_POST['resultados'];
$fecha=date("d-M-Y");
echo $query1="UPDATE proyectos SET nombre='$nom',
									departamento='$dep',
									municipio='$mun',
									comunidad='$comu',
									tiempo_ejc='$tiem',
									beneficiario='$ben',
									tipo='$tipo',
									ob_especificos='$obje_especifico',
									ob_general='$obje_general',
									resultados='$resultado',
									fecha='$fecha' where id_proyecto='$id'";

$consulta1=mysql_query($query1,$link);
header('Location:editar_proyectos.php');	
?>