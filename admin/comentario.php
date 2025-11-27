<?php 
include("conexion.php");
$link=conectarse();
$nom=$_POST['nom'];
$email=$_POST['email'];
$com=nl2br($_POST['come']);
$fecha =date("d-M-Y-"); $hora=date('H:i:s'); $tiempo = $fecha."A las ".$hora;
echo $link.'<br>';
echo $nom.'<br>';
echo $email.'<br>';
echo $com.'<br>';
echo $tiempo.'<br>';

$query="insert into comentario(texto,nombre,email,fecha) values('$com','$nom','$email','$tiempo')";
	echo $query.'<br>';
		$sql=mysql_query($query,$link);
		echo $sql;
		if(!$sql){
			echo 'Error al publicar el comentario';
			}else{
				echo header('Location:'.$_SERVER['HTTP_REFERER'].'?id=si');
				}
		
		
?>