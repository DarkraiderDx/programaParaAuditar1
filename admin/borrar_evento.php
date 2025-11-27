<?php 
include 'conexion.php';

$con=conectarse();

$x=$_POST['casilla'];

foreach ($x as $value){

$sel=mysql_query("select * from eventos where id_evento=".$value."",$con);
$fila=mysql_fetch_array($sel);


$res=mysql_query("delete from evento where id_evento=".$value."",$con);


if($res){

header('Location: eliminar_eventos.php');
}

}

?>

