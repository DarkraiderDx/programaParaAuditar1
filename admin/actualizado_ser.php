<?php
include('conexion.php');
$link=conectarse();
$nom=$_POST['nom'];
$dep=$_POST['departamento'];
$mun=$_POST['municipio'];
$comu=$_POST['comunidad'];
$producto=$_POST['produc'];
$cantidad=$_POST['cant'];
$tipo=$_POST['tipo'];
$det=$_POST['det'];
$fec=$_POST['fecha_ini'];
$fec_fin=$_POST['fecha_fin'];
$id=$_POST['id'];
$departamento=mysql_query("select ciudad from ciudad where id_ciudad='$dep'",$link);
$f1=mysql_fetch_array($departamento);
$departa=$f1['ciudad'];

$municipio=mysql_query("select municipio from municipio where id_municipio='$mun'",$link);
$f2=mysql_fetch_array($municipio);
$munici=$f2['municipio'];
$imagen=$_FILES['img'];
$nombre_ima=$_FILES['img']['name'];
$destino=$_SERVER['DOCUMENT_ROOT'].'servicios/';
move_uploaded_file($_FILES['img']['tmp_name'],"servicios/".$_FILES['img']['name']);

$fecha =date("d-M-Y-"); $hora=date('H:i:s'); $tiempo = $fecha."A las ".$hora;

 


echo $query= "UPDATE servicios SET nombre_propietario='$nom',departamento='$departa',municipio='$munici',comunidad='$comu',producto='$producto',cantidad='$cantidad',detalle='$det',tipo='$tipo',imagen='$nombre_ima',fecha='$fec',fecha_fin='$fec_fin' where id_servicio='$id'";


$consulta=mysql_query($query,$link);
	if(!$consulta){
		header('Location: '.$_SERVER['HTTP_REFERER'].'?error=no');
		}else{
			$men='Los datos fueron Actualizados Correctamente';
		header('Location:actualizar_ser.php?men='.urlencode($men)."&id=".urlencode($id));
		}
?>