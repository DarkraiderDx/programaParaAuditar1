<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<?php
include("conexion.php");
$link=conectarse();
$nom=$_POST['nom'];
$ape=$_POST['apel'];
$correo=$_POST['correo'];
$skipe=$_POST['skipe'];

$telefono=$_POST['telefono'];
$tipo1=$_POST['ti'];
$area=$_POST['area'];
$cargo=$_POST['cargo'];
$clave=$_POST['clave'];
$_FILES['img'];



$nombre = $_FILES['img']['name'];
$tipo = $_FILES['img']['type'];
$tamano = $_FILES['img']['size'];
$control=mysql_query("select * from administracion where correo='$correo' or clave='$clave'",$link);
			$cont=mysql_fetch_assoc($control);
			$contro2=mysql_query("select * from planificacion where correo='$correo' or clave='$clave'",$link);
			$cont2=mysql_fetch_assoc($contro2);
			$contro3=mysql_query("select * from direccion where correo='$correo' or clave='$clave'",$link);
			$cont3=mysql_fetch_assoc($contro3);
			$control4=mysql_query("select * from reg_proyecto where correo='$correo' or clave='$clave'",$link);
			$cont4=mysql_fetch_assoc($control4);
if(empty($nom)||empty($ape)||empty($correo)||empty($telefono)||empty($area)||empty($cargo)||empty($clave))
	{
	$men='debe llenar todos los datos';	
	header('Location:personal.php?men='.urlencode($men));
	}
	elseif (!preg_match('{^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$}',$_POST['correo']))
    {
        $men='correo no admitido';	
		header('Location:personal.php?men='.urlencode($men));
    }	

		elseif(!is_numeric($telefono))
		{
		$men='solo numeros en campo telefono';	
		header('Location:personal.php?men='.urlencode($men));
		}
	elseif(( $cont['correo']==$correo) || ($cont['clave']==$clave)){
				$men='ya existe correo o clave1';
				header('Location:personal.php?men='.urlencode($men));
				}
				elseif(($cont2['correo']==$correo) ||($cont2['clave']==$clave)){
					$men='ya existe correo o clave2';	
					header('Location:personal.php?men='.urlencode($men));
					}
				elseif(($cont3['correo']==$correo) || ($cont3['clave']==$clave)){
					$men='ya existe correo o clave3';	
				header('Location:personal.php?men='.urlencode($men));
					}
				elseif(($cont4['correo']==$correo) || ($cont4['clave']==$clave)){
					$men='ya existe correo o clave4';	
					header('Location:personal.php?men='.urlencode($men));
					}

else{
	if($area=="Administracion")
	{
		$tabla='administracion';
	}
	if($area=="Planificacion y monitoreo")
	{
		$tabla='planificacion';
	}
	if($area=="Direccion")
	{
		$tabla='direccion';
	}
	if($area=="Proyectos")
	{
		$tabla='reg_proyecto';
	}
	move_uploaded_file($_FILES['img']['tmp_name'],"registro/".$_FILES['img']['name']);
		$nombre_com=$nom." ".$ape;
		echo $query= "INSERT INTO".' '.$tabla.' '."(nombre,apellido,correo,skipe,telefono,cargo,clave,imagen)VALUES ('$nom','$ape','$correo','$skipe','$telefono','$cargo','$clave','$nombre')";
		if($tipo1=='Administrador')
				{
					$var='a';
				}
				else
				{
					$var='u';
				}
				echo $var;
		@mysql_query("INSERT INTO usuarios (nombre,correo,clave,tipo_user)VALUES ('$nombre_com','$correo','$clave','$var')",$link);
		$consulta=mysql_query($query,$link);
		$men='se realizo el registro correctamente';	
		header('Location:personal.php?men='.urlencode($men));
}
	
?>
<body>
</body>
</html>