<?php
$titulo=$_POST['titu'];
$des=$_POST['des'];
$id=$_POST['id'];
$imagen=$_FILES['img'];
$fec=$_POST['fecha_ini'];
$nombre_ima=$_FILES['img']['name'];
$destino=$_SERVER['DOCUMENT_ROOT'].'img/';
move_uploaded_file($_FILES['img']['tmp_name'],"galeria/".$_FILES['img']['name']);

if($titulo==''){
	header('Location:'.$_SERVER['HTTP_REFERER'].'?id='.$id);
	}else{		
		
		if($des==''){
			header('Location: '.$_SERVER['HTTP_REFERER'].'?id='.$id);
			}
		else{

$tit=nl2br($titulo);
$descripcion=nl2br($des);
$noticia=nl2br($not);




 
include('conexion.php');
$link=conectarse();


$query= "UPDATE imagen SET titulo='$tit',descripcion='$descripcion',archivo='$nombre_ima',fecha='$fec' where id='$id'";


$consulta=mysql_query($query,$link);
	if(!$consulta){
		
		header('Location: '.$_SERVER['HTTP_REFERER'].'?error=no');
		}else{
			$men='Los datos fueron actualizados correctamente';
		header('Location:pro_edit_galeria.php?men='.urlencode($men).'&id='.urlencode($id));
		}}}
?>