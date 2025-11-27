<?php
$titulo=$_POST['titu'];

$not=$_POST['conte'];
$id=$_POST['id'];
$imagen=$_FILES['img'];
$nombre_ima=$_FILES['img']['name'];
$destino=$_SERVER['DOCUMENT_ROOT'].'noticias/';
move_uploaded_file($_FILES['img']['tmp_name'],"noticias/".$_FILES['img']['name']);

if($titulo==''){
	header('Location:'.$_SERVER['HTTP_REFERER'].'?id='.$id);
	}else{		
		
		
			if($not==''){
			header('Location: '.$_SERVER['HTTP_REFERER'].'?error=noticia');
		}else{

$tit=nl2br($titulo);

$noticia=nl2br($not);


$fecha =date("d-M-Y-"); $hora=date('H:i:s'); $tiempo = $fecha."A las ".$hora;

 
include('conexion.php');
$link=conectarse();


$query= "UPDATE noticias SET titulo='$tit',texto='$noticia',fecha='$tiempo',imagen='$nombre_ima' where id_noticias='$id'";


$consulta=mysql_query($query,$link);
	if(!$consulta){
		$men='';
		header('Location: '.$_SERVER['HTTP_REFERER'].'?error=no');
		}else{
			$men='Los datos fueron actualizados correctamente';
		header('Location:actualizar_not.php?men='.urlencode($men).'&id='.urlencode($id));
		}}}
?>