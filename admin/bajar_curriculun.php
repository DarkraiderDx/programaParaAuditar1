<?php
session_start();
	include("conexion.php");
	$link=conectarse();
	
	$qry="Select * from curriculun where id_curriculun={$_REQUEST['id']}";
	$res=mysql_query($qry) or die(mysql_error()." qry::$qry");
	$obj=mysql_fetch_object($res);		
	header("Content-type: {$obj->tipo}");
	header('Content-Disposition: attachment; filename="'.$obj->nombre_archi.'"');
	print $obj->archivo;
	mysql_close();
?>