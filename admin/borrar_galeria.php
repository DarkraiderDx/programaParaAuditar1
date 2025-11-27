<?php 
include 'conexion.php';

$con=conectarse();
if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla como minimo ..';
			 header('Location:eliminar_galeria.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];

foreach ($x as $value){

$sel=mysql_query("select * from imagen where id=".$value."",$con);
$fila=mysql_fetch_array($sel);

$directorio='galeria/';
$res=mysql_query("delete from imagen where id=".$value."",$con);
unlink($directorio.$fila['archivo']);

if($res){
$men='Los dato se eliminaron Correctamente';
header('Location: eliminar_galeria.php?men='.urlencode($men));
}

}
}
?>

