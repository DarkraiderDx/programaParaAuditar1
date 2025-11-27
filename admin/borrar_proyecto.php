<?php 
include 'conexion.php';

$con=conectarse();


if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla..';
			 header('Location:eliminar_proyectos.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];
foreach ($x as $value){

$sel=mysql_query("select * from proyectos where id_proyecto=".$value."",$con);
$fila=mysql_fetch_array($sel);


$res=mysql_query("delete from proyectos where id_proyecto=".$value."",$con);


if($res){
	$men='Los datos fueron eliminados Correctamente';

header('Location: eliminar_proyectos.php?men='.urlencode($men));
}

}
}
?>

