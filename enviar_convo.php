<?PHP
	include("conexion.php");
	$link=conectarse();
	$si_subio=false;
	$id_archivo="";
	echo $id_convo=$_POST['id_convo'];
echo 	$convo=$_POST['convo'];
	echo $fecha=date("d-M-Y");
	
	if(isset($_FILES['archivo']) )
	{
		
		$tipos = array("application/msword",
						"application/pdf",
						"application/vnd.openxmlformats-officedocument.wordprocessingml.document",
						"application/vnd.ms-excel","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		$maximo = 100204000;		
		if (in_array($_FILES['archivo']['type'],$tipos)) 
		{ 
			if($_FILES['archivo']['size'] <= $maximo)
			{
				 $archivo = $_FILES["archivo"]["tmp_name"];
				$tamanio=array();
				$tamanio = $_FILES["archivo"]["size"];
				$tipo = $_FILES["archivo"]["type"];
				echo $nombre_archivo = $_FILES["archivo"]["name"];
				extract($_REQUEST);
				if ( $archivo != "none" )
				{
					$fp = fopen($archivo, "rb");
					$contenido = fread($fp, $tamanio);
					$contenido = addslashes($contenido);
					fclose($fp);
					$query = "INSERT INTO curriculun (convocatoria,fecha_recibida,nombre_archi,archivo,tipo,id_convocaroria)
												 VALUES('$convo',
												 		'$fecha',
												 		'$nombre_archivo',
												 		'$contenido',
														'$tipo',
														'$id_convo'
														)";
					if (mysql_query($query,$link)) 
					{			
						$si_subio=true;
						$id_archivo=mysql_insert_id();
						$men="El archivo fue enviada Correctamente";
			header('Location:convocatorias.php?men='.$men);
					}
					else 
					{
						$si_subio=false;
						echo mysql_error();
					}
				}else
				{
					$men= "No fue posible subir el archivo";
					header('Location:convocatorias.php?men='.$men);
				}
				
				if($si_subio)
				{			
					header('Location:convocatorias.php');
				}
			} 
			else 
			{
				$men="Tamanño de Archivo demasiado grande";
				header('Location:convocatorias.php?men='.$men);
			}				
		} else 
		{
			$men ="El formato del archivo no es correcto Solo Word y Excel";
			
			header('Location:convocatorias.php?men='.$men);
			
		}
	}
	else 
			$men="No Ha seleccionado";
			header('Location:convocatorias.php?men='.$men);


?>