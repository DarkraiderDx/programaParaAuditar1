<?php
require_once('conexion.php');
$link=conectarse();
$titulo=$_POST['titu'];
$_FILES['img'];
$des=$_POST['des'];
$conte=$_POST['conte'];
$noticia=nl2br($conte);
$fecha =date("d-M-Y-");
$hora=date('H:i:s'); 
$tiempo = $fecha."A las ".$hora;

$directorio = $_SERVER['DOCUMENT_ROOT'].'noticias/';
$nombre = $_FILES['img']['name'];
$tipo = $_FILES['img']['type'];
$tamano = $_FILES['img']['size'];
$nuevonom = substr(md5(uniqid(rand())),0,6); 
if((!isset($titulo))||(!isset($conte))||(!isset($_FILES['img']))){
	$men="Debe llenar todos los campos";
	header("Location:noticias.php?men=".urlencode($men));
}
else{
$nomfinal=$nuevonom.'_'.$nombre;
move_uploaded_file($_FILES['img']['tmp_name'],"noticias/".$nuevonom.'_'.$_FILES['img']['name']);

$query= "INSERT INTO noticias (titulo,
								texto,
								fecha,
								imagen)
								VALUES
								('$titulo',
								'$noticia',
								'$tiempo',
								'$nomfinal')";
$consulta=mysql_query($query,$link);
$men='Datos almacenados Correctamente';
header('Location: noticias.php?men='.urlencode($men));
}
?>

  
  
