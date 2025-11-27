<?php
require_once('conexion.php');
$link=conectarse();
$titulo=$_POST['titu'];
echo $_FILES['img'];
$des=$_POST['des'];
$fec=$_POST['fecha_ini'];
$directorio = $_SERVER['DOCUMENT_ROOT'].'galeria/';
$nombre = $_FILES['img']['name'];
$tipo = $_FILES['img']['type'];
$tamano = $_FILES['img']['size'];
$nuevonom = substr(md5(uniqid(rand())),0,6); 
if($titulo==''||$des==''||$_FILES['img']==''){
	$men="Debe llenar todos los campos";
	header("Location:galeria.php?men=".urlencode($men));
}
else{
	$nomfinal=$nuevonom.'_'.$nombre;
move_uploaded_file($_FILES['img']['tmp_name'],"galeria/".$nuevonom.'_'.$_FILES['img']['name']);

$query= "INSERT INTO imagen (titulo,
							descripcion,
							archivo,
							fecha)
							VALUES 
							('$titulo',
							'$des',
							'$nomfinal',
							'$fec')";
$consulta=mysql_query($query,$link);
$men='Datos almacenados Correctamente';
header('Location: galeria.php?men='.urlencode($men));
}

?>

  
  
