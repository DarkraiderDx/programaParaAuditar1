<?PHP
	include("conexion.php");
	$link=conectarse();
	$si_subio=false;
	$id_archivo="";
	$clave=$_POST['clave'];
	echo $clave;
	$detalle=$_POST['detalle'];
	$fecha=date("d-M-Y");
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
					$query = "INSERT INTO informacion (nombre,
														archivo,
														tipo,
														fecha,
														clave,
														detalle)
												 VALUES('$nombre_archivo',
												 		'$contenido',
														'$tipo',
														'$fecha',
														'$clave',
														'$detalle')";
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
					$men= "No fue posible subir el archivo";
									header('Location:enviar_informacion_personal_2.php?men='.urlencode($men).'&clave='.urlencode($clave));
				}
				
				if($si_subio)
				{			$men='Los datos se enviaron correctamente ';
									header('Location:enviar_informacion_personal_2.php?men='.urlencode($men).'&clave='.urlencode($clave));
				}
			} 
			else 
			{
				$men= "Tamanño de Archivo demasiado grande";
				header('Location:enviar_informacion_personal_2.php?men='.urlencode($men).'&clave='.urlencode($id));
			}				
		} else 
		{
			$men= "El formato del archivo no es correcto Solo Word y Excel";
			
				header('Location:enviar_informacion_personal_2.php?men='.urlencode($men).'&clave='.urlencode($clave));
		
		}
	}
	else 
			$men= "No Ha seleccionado";
							header('Location:enviar_informacion_personal_2.php?men='.urlencode($men).'&clave='.urlencode($clave));


?>