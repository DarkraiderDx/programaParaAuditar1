<?php
require_once('conexion.php');
$link=conectarse();


$id=$_POST['id'];



$des_sl_1=$_POST['des_sl_1'];
$des_sl_2=$_POST['des_sl_2'];
$des_sl_3=$_POST['des_sl_3'];
$des_sl_4=$_POST['des_sl_4'];
$des_sl_5=$_POST['des_sl_5'];
$directorio = $_SERVER['DOCUMENT_ROOT'].'image/slider/';
$nombre = $_FILES['ima1']['name'];
$tipo = $_FILES['ima1']['type'];
$tamano = $_FILES['ima1']['size'];

$nombre2 = $_FILES['ima2']['name'];
$tipo2 = $_FILES['ima2']['type'];
$tamano2 = $_FILES['ima2']['size'];

$nombre3 = $_FILES['ima3']['name'];
$tipo3 = $_FILES['ima3']['type'];
$tamano3 = $_FILES['ima3']['size'];

$nombre4 = $_FILES['ima4']['name'];
$tipo4 = $_FILES['ima4']['type'];
$tamano4 = $_FILES['ima4']['size'];

$nombre5 = $_FILES['ima5']['name'];
$tipo5 = $_FILES['ima5']['type'];
$tamano5 = $_FILES['ima5']['size'];
if($nombre==''||$nombre2==''|$nombre3==''||$nombre4==''||$nombre5=='')
{
$men="Debe llenar Todos archivos Para cambiar";
header("Location:index.php?men=".urlencode($men));
}
elseif($id==""){

$nuevonom = substr(md5(uniqid(rand())),0,6); 
$nomfinal=$nuevonom.'_'.$nombre;

$nuevonom2 = substr(md5(uniqid(rand())),0,6); 
$nomfinal2=$nuevonom2.'_'.$nombre2;

$nuevonom3 = substr(md5(uniqid(rand())),0,6); 
$nomfinal3=$nuevonom3.'_'.$nombre3;

$nuevonom4 = substr(md5(uniqid(rand())),0,6); 
$nomfinal4=$nuevonom4.'_'.$nombre4;

$nuevonom5 = substr(md5(uniqid(rand())),0,6); 
$nomfinal5=$nuevonom5.'_'.$nombre5;

move_uploaded_file($_FILES['ima1']['tmp_name'],"images/slider/".$nuevonom.'_'.$_FILES['ima1']['name']);
move_uploaded_file($_FILES['ima2']['tmp_name'],"images/slider/".$nuevonom2.'_'.$_FILES['ima2']['name']);
move_uploaded_file($_FILES['ima3']['tmp_name'],"images/slider/".$nuevonom3.'_'.$_FILES['ima3']['name']);
move_uploaded_file($_FILES['ima4']['tmp_name'],"images/slider/".$nuevonom4.'_'.$_FILES['ima4']['name']);
move_uploaded_file($_FILES['ima5']['tmp_name'],"images/slider/".$nuevonom4.'_'.$_FILES['ima5']['name']);

$query= "INSERT INTO opciones_generales(ima1,ima2,ima3,ima4,ima5,ima1_des,ima2_des,ima3_des,ima4_des,ima5_des)
							VALUES 
							('$nomfinal',
							'$nomfinal2',
							'$nomfinal3',
							'$nomfinal4',
							'$nomfinal5',
							'$des_sl_1',
							'$des_sl_2',
							'$des_sl_3',
							'$des_sl_4',
							'$des_sl_5')";
$consulta=mysql_query($query,$link);
$men1='Datos almacenados Correctamente';
header('Location:index.php?men1='.urlencode($men1));

}
else{

$direc='images/slider/';
$sel=mysql_query("select ima1,ima2,ima3,ima4 from opciones_generales where id='$id'" ,$link);
$fila=mysql_fetch_array($sel);


unlink($direc.$fila['ima1']);
unlink($direc.$fila['ima2']);
unlink($direc.$fila['ima3']);
unlink($direc.$fila['ima4']);
unlink($direc.$fila['ima5']);

$nuevonom = substr(md5(uniqid(rand())),0,6); 
$nomfinal=$nuevonom.'_'.$nombre;

$nuevonom2 = substr(md5(uniqid(rand())),0,6); 
$nomfinal2=$nuevonom2.'_'.$nombre2;

$nuevonom3 = substr(md5(uniqid(rand())),0,6); 
$nomfinal3=$nuevonom3.'_'.$nombre3;

$nuevonom4 = substr(md5(uniqid(rand())),0,6); 
$nomfinal4=$nuevonom4.'_'.$nombre4;

$nuevonom5 = substr(md5(uniqid(rand())),0,6); 
$nomfinal5=$nuevonom5.'_'.$nombre5;

move_uploaded_file($_FILES['ima1']['tmp_name'],"images/slider/".$nuevonom.'_'.$_FILES['ima1']['name']);
move_uploaded_file($_FILES['ima2']['tmp_name'],"images/slider/".$nuevonom2.'_'.$_FILES['ima2']['name']);
move_uploaded_file($_FILES['ima3']['tmp_name'],"images/slider/".$nuevonom3.'_'.$_FILES['ima3']['name']);
move_uploaded_file($_FILES['ima4']['tmp_name'],"images/slider/".$nuevonom4.'_'.$_FILES['ima4']['name']);
move_uploaded_file($_FILES['ima5']['tmp_name'],"images/slider/".$nuevonom5.'_'.$_FILES['ima5']['name']);

$query= "UPDATE opciones_generales SET ima1='$nomfinal'
									  ,ima2='$nomfinal2',
									  ima3='$nomfinal3',
									  ima4='$nomfinal4',
									  ima5='$nomfinal5',
									  ima1_des='$des_sl_1',
									  ima2_des='$des_sl_2',
									  ima3_des='$des_sl_3',
									  ima4_des='$des_sl_4',
									  ima5_des='$des_sl_5'
									  where id='$id'";

$consulta=mysql_query($query,$link);
	$men1="Los datos de cambiaron Correctamente";
header('Location:index.php?men1='.urlencode($men1));
}

?>

  
  
