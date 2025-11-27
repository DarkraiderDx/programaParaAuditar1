<?PHP
	include("conexion.php");
	$link=conectarse();
	$si_subio=false;
	$id_archivo="";
	$clave=$_POST['clave'];
	echo $clave;
	$detalle=$_POST['detalle'];
	$fecha=date("d-M-Y");
	if(isset($_FILES['archivo']) )
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
					$query = "INSERT INTO informacion_des (nombre,
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
					echo "No fue posible subir el archivo";
					//header('Location:enviar_informacion.php');
				}
				
				if($si_subio)
				{			
					//header('Location:enviar_informacion.php');
				}
			} 
			else 
			{
				echo "Tamanño de Archivo demasiado grande";
				//header('Location:enviar_informacion.php');
			}				
		} else 
		{
			echo "El formato del archivo no es correcto Solo Word y Excel";
			
			//header('Location:enviar_informacion.php');
			
		}
	}
	else 
			echo "No Ha seleccionado";
			//header('Location:enviar_informacion.php');


?>