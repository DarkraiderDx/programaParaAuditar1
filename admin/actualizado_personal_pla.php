<?php
include('conexion.php');
$link=conectarse();
$nombre=$_POST['nom'];
$apellido=$_POST['apel'];
$correo=$_POST['correo'];
$cargo=$_POST['cargo'];
$telefono=$_POST['telefono'];
$clave=$_POST['clave'];
$skipe=$_POST['skipe'];
$id=$_POST['id'];
$cla=$_POST['cla'];

$tipo1=$_POST['ti'];
$imagen=$_FILES['img'];
$nombre_ima=$_FILES['img']['name'];
$destino=$_SERVER['DOCUMENT_ROOT'].'registro/';

$co=mysql_query("select planificacion.correo from planificacion where correo='$correo'",$link);
$f=mysql_fetch_array($co);
if(empty($nombre)||empty($apellido)||empty($correo)||empty($telefono)||empty($cargo)||empty($clave))
	{
	$men='debe llenar todos los datos';	
		header('Location:actualizar_personal_pla.php?men='.urlencode($men).'&id='.urlencode($id));
	}
	elseif (!preg_match('{^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$}',$_POST['correo']))
    {
        $men='correo no admitido';	
		header('Location:actualizar_personal_pla.php?men='.urlencode($men).'&id='.urlencode($id));
    }	

		elseif(!is_numeric($telefono))
		{
		$men='solo numeros en campo telefono';	
		header('Location:actualizar_personal_pla.php?men='.urlencode($men).'&id='.urlencode($id));
		}

		
		
else{
move_uploaded_file($_FILES['img']['tmp_name'],"registro/".$_FILES['img']['name']);
echo $query= "UPDATE planificacion SET nombre='$nombre',
								apellido='$apellido',
								correo='$correo',
								skipe='$skipe',
								telefono='$telefono',
								cargo='$cargo',
								clave='$clave',
								imagen='$nombre_ima'
								where id_planificacion='$id'";
if($tipo1=='Administrador')
				{
					$var='a';
				}
				else
				{
					$var='u';
				}
				 
 $queryu= "UPDATE usuarios SET nombre='$nombre',
								correo='$correo',
								clave='$clave',
								tipo_user='$var'
								where clave='$cla'";


$consulta1=mysql_query($queryu,$link)or die("error");
$consulta=mysql_query($query,$link);
	$men='Los datos fueron actualizados correctamente';
	header('Location:actualizar_personal_pla.php?men='.urlencode($men).'&id='.urlencode($id));
}
?>