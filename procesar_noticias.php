<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
</head>
<body>
<p>
<?php
require_once('conexion.php');
mysql_set_charset('utf8');
$link=conectarse();

$titulo=$_POST['titu'];
$_FILES['img'];
$des=$_POST['des'];
$conte=nl2br($_POST['conte']);
$noticia = str_replace("'", '\\\'', $conte);
$fecha =date("d-M-Y-");
$hora=date('H:i:s'); 
$tiempo = $fecha."A las ".$hora;
echo $titulo.'<br>';
echo $_FILES['img'].'<br>';
echo $des.'<br>';
echo $conte.'<br>';
$directorio = $_SERVER['DOCUMENT_ROOT'].'img/';
$nombre = $_FILES['img']['name'];
$tipo = $_FILES['img']['type'];
$tamano = $_FILES['img']['size'];

move_uploaded_file($_FILES['img']['tmp_name'],"img/".$_FILES['img']['name']);

$query= "INSERT INTO noticias (titulo,descripcion,texto,fecha,imagen)VALUES ('$titulo','$des','$noticia','$tiempo','$nombre')";
$consulta=mysql_query($query,$link);
header('Location: noticias.php');
?>

  
  
</p>

</body>
</html>