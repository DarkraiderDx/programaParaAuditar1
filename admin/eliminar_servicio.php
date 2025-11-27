<?php 
include 'conexion.php';

$con=conectarse();
if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla..';
			 header('Location:eliminar_servicios.php?men='.urlencode($men));			  
		  }
else{

$x=$_POST['casilla'];

foreach ($x as $value){

$res=mysql_query("delete from servicios where id_servicio=".$value."",$con);

if($res){
$men='los Datos fueron Eliminados correctamente';

header('Location: eliminar_servicios.php?men='.urlencode($men));

}

}
}
?>

