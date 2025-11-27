<?php
require_once('conexion.php');
$link=conectarse();
$nom=$_POST['nom'];
$email=$_POST['email'];
$pais=$_POST['pais'];
$ciudad=$_POST['ciudad'];
$clave=$_POST['clave'];

$fecha =date("d-M-Y-");
$hora=date('H:i:s'); 
$tiempo = $fecha."A las ".$hora;



$query= "INSERT INTO usuarios(nombre,pais,ciudad,correo,clave,fecha)VALUES
								  ('$nom','$pais','$ciudad','$email','$clave','$tiempo')"or die("error");
$consulta=mysql_query($query,$link);
header('Location: ../foro/');
?>

  
  
