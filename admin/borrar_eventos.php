<?php 
include 'conexion.php';

$con=conectarse();
if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla..';
			 header('Location:eliminar_evento.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];

foreach ($x as $value){

$sel=mysql_query("select * from eventos where id_evento=".$value."",$con);
$fila=mysql_fetch_array($sel);


$res=mysql_query("delete from eventos where id_evento=".$value."",$con);
//move_uploaded_file();

if($res){
$men='Se eliminaron Correctamente';
header('Location:eliminar_evento.php?men='.urlencode($men));

}

}
}
?>

