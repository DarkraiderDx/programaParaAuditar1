<?php 
include 'conexion.php';

$con=conectarse();
if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla como minimo para borrar';
			 header('Location:foro.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];

foreach ($x as $value){

$sel=mysql_query("select * from foromensajes where id_msj_foro=".$value."",$con);
$fila=mysql_fetch_array($sel);


$res=mysql_query("delete from foromensajes where id_msj_foro=".$value."",$con);
//move_uploaded_file();

if($res){

header('Location: foro.php');

}

}
}
?>

