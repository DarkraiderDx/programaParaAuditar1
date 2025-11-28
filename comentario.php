<?php 
include("conexion.php");
$link=conectarse();
mysqli_set_charset($link,'utf8');

$nom=$_POST['nom'];
$email=$_POST['email'];
$com=nl2br($_POST['come']);

$comentario = str_replace("'", '\\\'', $com);

$fecha =date("d-M-Y-"); $hora=date('H:i:s'); $tiempo = $fecha."A las ".$hora;
/* echo $link.'<br>'; */
echo $nom.'<br>';
echo $email.'<br>';
echo $com.'<br>';
echo $tiempo.'<br>';

$query="insert into comentario(texto,nombre,email,fecha) values('$comentario','$nom','$email','$tiempo')";
	echo $query.'<br>';
		$sql=mysqli_query($link,$query);
		echo $sql;
		if(!$sql){
			echo 'Error al publicar el comentario';
			}else{
				echo header('Location:'.$_SERVER['HTTP_REFERER'].'?id=si');
				}
		
		
?>