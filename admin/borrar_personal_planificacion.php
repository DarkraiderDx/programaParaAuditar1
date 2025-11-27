<?php 
include 'conexion.php';

$con=conectarse();

if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla..';
			 header('Location:eliminar_personal_planificacion.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];
foreach ($x as $value){

$sel=mysql_query("select * from planificacion where id_planificacion=".$value."",$con);
$fila=mysql_fetch_array($sel);
$cla=$fila['clave'];
$resu=mysql_query("delete from usuarios where clave=".$cla."",$con);

$res=mysql_query("delete from planificacion where id_planificacion=".$value."",$con);


if($res){

header('Location: eliminar_personal_planificacion.php');
}

}
}
?>

