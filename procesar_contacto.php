<?php
require_once('conexion.php');
$link=conectarse();
$nom=$_POST['nom'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$pais=$_POST['pais'];
$skipe=$_POST['skipe'];
$ciudad=$_POST['ciudad'];
$motivo=$_POST['motivo'];
$detalle=$_POST['detalle'];

if(!isset($nom)||!isset($email)||!isset($tel)||!isset($pais)||!isset($ciudad)||!isset($motivo)||!isset($detalle)){
	$men='debe llenar todos los  datos';
	header('Location:contactos.php?men='.urlencode($men));
}
elseif (!preg_match('{^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$}',$_POST['email']))
    {
        $men='correo no admitido';	
		header('Location:contactos.php?men='.urlencode($men));
    }	

		elseif(!is_numeric($tel))
		{
		$men='solo numeros en campo telefono';	
		header('Location:contactos.php?men='.urlencode($men));
		}
else{
if(!isset($_POST['tipo_contacto']) || $_POST['tipo_contacto'] == "")
{
$tipo_cont=$_POST['tipo_contacto'] ;	
$fecha =date("d-M-Y-");
$hora=date('H:i:s'); 
$tiempo = $fecha."A las ".$hora;
echo 'dd'.$skipe.'<br>';
echo $query= "INSERT INTO contactos
 (nombre,email,telefono,skipe,pais,ciudad,motivo,detalle,tipo_contacto)
 VALUES 
 ('$nom','$email','".$tel."','$skipe','$pais','$ciudad','$motivo','$detalle','$tipoc_cont')";
$consulta=mysqli_query($link,$query)or die("error");
	$men='Los datos fueron enviados Corrrectamente1';
	header('Location:contactos.php?men='.urlencode($men));
}
else
{

/* $tipo_cont="$tipoc_cont"; */

$fecha =date("d-M-Y-");
$hora=date('H:i:s'); 
$tiempo = $fecha."A las ".$hora;


echo $query= "INSERT INTO contactos 
(nombre,email,telefono,skipe,pais,ciudad,motivo,detalle,tipo_contacto)
VALUES
('$nom','$email','".$tel."','$skipe','$pais','$ciudad','$motivo','$detalle','$tipoc_cont')";
$consulta=mysqli_query($link,$query)or die("error");
	$men='Los datos fueron enviados Corrrectamente';
	header('Location:contactos.php?men='.urlencode($men));
}
}
?>

  
  
