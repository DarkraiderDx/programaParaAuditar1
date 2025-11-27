<?PHP
	include("conexion.php");
	$link=conectarse();
	$si_subio=false;
	$id_archivo="";
	$id=$_POST['id'];
	$nom_evento=$_POST['nom_evento'];
	$tiempo=$_POST['tiempo'];
	$lugar=$_POST['lugar'];
	$fecha_ini=$_POST['fecha_ini'];
	$fecha_fin=$_POST['fecha_fin'];
	$tipo_evento=$_POST['tipo_evento'];
	$expositor=$_POST['expositor'];
	$contactos=$_POST['contactos'];
	if (isset($_FILES['archivo']) )
	{
		
		$tipos = array("application/msword","application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.ms-excel","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
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
					$query = "UPDATE eventos SET evento='$nom_evento',
					tiempo_duracion='$tiempo',
					lugar='$lugar',
					fecha_ini='$fecha_ini',
					fecha_fin='$fecha_fin',
					expositor='$expositor',
					contactos='$contactos',
					nombre_archivo='$nombre_archivo',
					archivo='$contenido',tipo='$tipo',
					tipo_evento='$tipo_evento' where id_evento='$id'";
					
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
					header('Location:actualizar_evento.php?men='.urlencode($men).'&id='.urlencode($id));
				}
				
				if($si_subio)
				{	$men="La actualizacion fue correcta";
					header('Location:actualizar_evento.php?men='.urlencode($men).'&id='.urlencode($id));
				}
			} 
			else 
			{
				$men= "Tamaño de Archivo demasiado grande";
				header('Location:actualizar_evento.php?men='.urlencode($men).'&id='.urlencode($id));
			}				
		} else 
		{
			$men="El formato del archivo no es correcto Solo Word y Excel";
			
				header('Location:actualizar_evento.php?men='.urlencode($men).'&id='.urlencode($id));
			
		}
	}
	else 
			$men="No Ha seleccionado";
			header('Location:actualizar_evento.php?men='.urlencode($men).'&id='.urlencode($id));


?>