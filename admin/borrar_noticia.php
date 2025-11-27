<?php 
include 'conexion.php';

$con=conectarse();
if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla como minimo..';
			 header('Location:borrar_editar_noticias.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];

foreach ($x as $value){

$sel=mysql_query("select * from noticias where id_noticias=".$value."",$con);
$fila=mysql_fetch_array($sel);
echo $fila['imagen'];
$directorio='noticias/';
$res=mysql_query("delete from noticias where id_noticias=".$value."",$con);
unlink($directorio.$fila['imagen']);

if($res){
$men='Los Datos Fueron Eliminados correctamente';
header('Location: borrar_editar_noticias.php?men='.urlencode($men));

}

}
}
?>

