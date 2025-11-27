<?php 
include 'conexion.php';

$con=conectarse();


if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla..';
			 header('Location:eliminar_personal_proyectos.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];

foreach ($x as $value){

$sel=mysql_query("select * from reg_proyecto where id_reg_proyecto=".$value."",$con);
$fila=mysql_fetch_array($sel);
$cla=$fila['clave'];
$resu=mysql_query("delete from usuarios where clave=".$cla."",$con);


$res=mysql_query("delete from reg_proyecto where id_reg_proyecto=".$value."",$con);

$men='Los datos fueron eliminados correctamente';
header('Location:eliminar_personal_proyectos.php?men='.urlencode($men));			  
		  
if($res){

$men='Los datos fueron eliminados correctamente';
header('Location:eliminar_personal_proyectos.php?men='.urlencode($men));			  
		  
}

}
}
?>

