<?PHP
	include("conexion.php");
	$link=conectarse();
	$si_subio=false;
	$id_archivo="";
	$convo=$_POST['convocatoria'];
	
	$fecha_ini=$_POST['fecha_ini'];
	$fecha_fin=$_POST['fecha_fin'];
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
echo 					$query = "UPDATE convocatorias SET 
					convocatorias='$convo',
					fecha_inicial='$fecha_ini',
					fecha_final='$fecha_fin',
					nombre_archi='$nombre_archivo',
					archivo='$contenido',
					tipo='$tipo' where id_convocatorias='$id'";
					
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
					header('Location:actualizar_convo.php?men='.urlencode($men).'&id='.urlencode($id));
				}
				
				if($si_subio)
			
				{			
					$men="Datos Actualizados correctamente";
					header('Location:actualizar_convo.php?men='.urlencode($men).'&id='.urlencode($id));
				}
			} 
			else 
			{
				$men="Tamaño de Archivo demasiado grande";
				header('Location:actualizar_convo.php?men='.urlencode($men).'&id='.urlencode($id));
			}				
		} else 
		{
			$men= "El formato del archivo no es correcto Solo Word y Excel";
			
				header('Location:actualizar_convo.php?men='.urlencode($men).'&id='.urlencode($id));
			
		}
	}
	else 
			$men="No Ha seleccionado";
			header('Location:actualizar_convo.php?men='.urlencode($men).'&id='.urlencode($id));


?>