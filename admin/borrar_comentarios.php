<?php 
include 'conexion.php';

$con=conectarse();
if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla como minimo para borrar';
			 header('Location:index.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];

foreach ($x as $value){

$sel=mysql_query("select * from comentario where id_comentario=".$value."",$con);
$fila=mysql_fetch_array($sel);


$res=mysql_query("delete from comentario where id_comentario=".$value."",$con);
//move_uploaded_file();

if($res){

header('Location: index.php');

}

}
}
?>

