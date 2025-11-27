<?php
include('conexion.php');
$link=conectarse();
$nombre=$_POST['nom'];
$apellido=$_POST['apel'];
$correo=$_POST['correo'];
$cargo=$_POST['cargo'];
$telefono=$_POST['telefono'];
$clave=$_POST['clave'];
$cla=$_POST['cla'];

$tipo1=$_POST['ti'];

$id=$_POST['id'];
$imagen=$_FILES['img'];
$nombre_ima=$_FILES['img']['name'];
$destino=$_SERVER['DOCUMENT_ROOT'].'registro/';

$co=mysql_query("select administracion.correo from administracion where correo='$correo'",$link);
$f=mysql_fetch_array($co);

if(empty($nombre)||empty($apellido)||empty($correo)||empty($telefono)||empty($cargo)||empty($clave))
	{
	$men='debe llenar todos los datos';	
		header('Location:actualizar_personal.php?men='.urlencode($men));
	}
	elseif (!preg_match('{^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$}',$_POST['correo']))
    {
        $men='correo no admitido';	
		header('Location:actualizar_personal.php?men='.urlencode($men));
    }	

		elseif(!is_numeric($telefono))
		{
		$men='solo numeros en campo telefono';	
		header('Location:actualizar_personal.php?men='.urlencode($men));
		}

		
		
else{

move_uploaded_file($_FILES['img']['tmp_name'],"registro/".$_FILES['img']['name']);
$query= "UPDATE administracion SET nombre='$nombre',
								apellido='$apellido',
								correo='$correo',
								telefono='$telefono',
								cargo='$cargo',
								clave='$clave',
								imagen='$nombre_ima'
								where id_administracion='$id'";
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
	header('Location:actualizar_personal.php?men='.urlencode($men).'&id='.urlencode($id));
}
?>