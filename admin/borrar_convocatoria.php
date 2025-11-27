<?php 
include 'conexion.php';

$con=conectarse();
if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla..';
			 header('Location:eliminar_convocatorial.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];
foreach ($x as $value){

$sel=mysql_query("select * from convocatorias where id_convocatorias=".$value."",$con);
$fila=mysql_fetch_array($sel);


$res=mysql_query("delete from convocatorias where id_convocatorias=".$value."",$con);


if($res){
	$men='Los datos se eliminaron corectamente';
	 header('Location:eliminar_convocatorial.php?men='.urlencode($men));


}

}
}
?>

