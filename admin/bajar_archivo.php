<?php
session_start();
 
	include("conexion.php");
	$link=conectarse();
	
	$qry="Select * from informacion_des where id_informacion={$_REQUEST['id']}";
	$res=mysql_query($qry) or die(mysql_error()." qry::$qry");
	$obj=mysql_fetch_object($res);		
	header("Content-type: {$obj->tipo}");
	header('Content-Disposition: attachment; filename="'.$obj->nombre.'"');
	print $obj->archivo;
	mysql_close();
?>