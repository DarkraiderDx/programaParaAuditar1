<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<?php
include("conexion.php");
$link=conectarse();
$evento=$_POST['nom_evento'];
$tiempo=$_POST['tiempo'];
$lugar=$_POST['lugar'];
$fecha_ini=$_POST['fecha_ini'];
$fecha_fin=$_POST['fecha_fin'];
$tip_evento=$_POST['tipo_evento'];
$expositor=$_POST['expositor'];
$ex=nl2br($expositor);
$contactar=nl2br($_POST['contactos']);

if (isset($_FILES['archivo']) )
	{
		
		$tipos = array("application/msword","application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.ms-excel","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		$maximo = 100204000;		
		if (in_array($_FILES['archivo']['type'],$tipos)) 
		{ 
			if($_FILES['archivo']['size'] <= $maximo)
			{
				$archivo = $_FILES["archivo"]["tmp_name"];
				$tamanio=array();
				$tamanio = $_FILES["archivo"]["size"];
				$tipo = $_FILES["archivo"]["type"];
				$nombre_archivo = $_FILES["archivo"]["name"];
				extract($_REQUEST);
				if ( $archivo != "none" )
				{
					$fp = fopen($archivo, "rb");
					$contenido = fread($fp, $tamanio);
					$contenido = addslashes($contenido);
					fclose($fp);
					$query = "INSERT INTO eventos (evento,tiempo_duracion,lugar,fecha_ini,fecha_fin,expositor,contactos,nombre_archivo,archivo,tipo,tipo_evento)VALUES ('$evento','$tiempo','$lugar','$fecha_ini','$fecha_fin','$ex','$contactar','$nombre_archivo','$contenido','$tipo','$tip_evento')";
					if (mysql_query($query,$link)) 
					{			
						$si_subio=true;
						$id_archivo=mysql_insert_id();
					}
					else 
					{
						$si_subio=false;
						echo mysql_error();
					}
				}else
				{
					$men="No fue posible subir el archivo";
					header('Location:reg_evento.php?men='.urlencode($men));
				}
				
				if($si_subio)
				{	$men='los datos fueron almacenados correctamente';
					header('Location:reg_evento.php?men='.urlencode($men));
				}
			} 
			else 
			{
				$men= "Tamanño de Archivo demasiado grande";
				header('Location:reg_evento.php?men='.urlencode($men));
			}				
		} else 
		{
			$men= "El formato del archivo no es correcto Solo Word,pdf y Excel";
			
			header('Location:reg_evento.php?men='.urlencode($men));
			
		}
	}
	else 
			$men="No Ha seleccionado";
			
			header('Location:reg_evento.php?men='.urlencode($men));


?>

<body>
</body>
</html>