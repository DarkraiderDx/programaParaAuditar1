<?php 
include 'conexion.php';

$con=conectarse();
if((!isset($_POST['casilla'])))
		  {
			 $men='Debe elegir una casilla..';
			 header('Location:contactos.php?men='.urlencode($men));			  
		  }
else{
$x=$_POST['casilla'];

foreach ($x as $value){
echo $value;
$sel=mysql_query("select * from contactos where id_contactos=".$value."",$con);
$fila=mysql_fetch_array($sel);


$res=mysql_query("delete from contactos where id_contactos=".$value."",$con);


if($res){

header('Location: contactos.php');
}

}
}
?>

