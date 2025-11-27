<?php 
include 'conexion.php';

$con=conectarse();


if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla..';
			 header('Location:eliminar_personal_direccion.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];

foreach ($x as $value){

$sel=mysql_query("select * from direccion where id_direccion=".$value."",$con);
$fila=mysql_fetch_array($sel);
$cla=$fila['clave'];
$resu=mysql_query("delete from usuarios where clave=".$cla."",$con);

$res=mysql_query("delete from direccion where id_direccion=".$value."",$con);
$men='Los datos fueron eliminados correctamente';
header('Location:eliminar_personal_direccion.php?men='.urlencode($men));	

if($res){

$men='Los datos fueron eliminados correctamente';
header('Location:eliminar_personal_direccion.php?men='.urlencode($men));	
}

}
}
?>

