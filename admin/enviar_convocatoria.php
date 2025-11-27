<?PHP
	include("conexion.php");
	$link=conectarse();
	$si_subio=false;
	$id_archivo="";
	$convo=$_POST['convocatoria'];
	echo $_FILES['archivo']['size']	;
	echo $_FILES['archivo']['name']	;
	$fecha_ini=$_POST['fecha_ini'];
	$fecha_fin=$_POST['fecha_fin'];
	
	if($convo==''||$fecha_ini==''||$fecha_fin==''||$_FILES['archivo']=='')
//	echo'error';
	{$men='Tiene que llenar todos los campos';
	header("Location:convocatorias.php?men=$men");
	}else{
	
	
	if (isset($_FILES['archivo']) )
	{
		
		$tipos = array("application/msword","application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.ms-excel","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		$maximo =100204000;	
		
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
					move_uploaded_file($_FILES['archivo']['tmp_name'],"convocatorias/".$_FILES['archivo']['name']);
				$query = mysql_query("INSERT INTO convocatorias (convocatorias,fecha_inicial,fecha_final,nombre_archi,archivo,tipo)VALUES ('$convo','$fecha_ini','$fecha_fin','$nombre_archivo','$contenido','$tipo')",$link);
				echo $query;
					if($query) 
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
				
					header("Location:convocatorias.php");

				}
				
				if($si_subio)
				{			
					$mensa='Los datos fueron subidos correctamente';
					header('Location:convocatorias.php?men='.urlencode($mensa));
					exit;
				}
			} 
			else 
			{
				$mensa='Tamaño de Archivo demasiado grande';
				
				header('Location:convocatorias.php?men='.urlencode($mensa));
			}				
		} else 
		
		{	
			
			
				
					$mensa="El formato del archivo no es correcto Solo Word y Excel o Pdf";
			
			header('Location:convocatorias.php?men='.urlencode($mensa));
				
		}
	}
	else {
		$mensa="El formato del archivo no es correcto Solo Word y Excel  o Pdf";
			header('Location:convocatorias.php?men='.urlencode($mensa));
	}			
	}
?>