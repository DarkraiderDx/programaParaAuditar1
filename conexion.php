<?php 
function conectarse()
{
	if (!($link=mysql_connect("localhost","root","DarkraiderDx99")))
	{
		echo "Error conectando a la base de datos.";
		exit();
	}
	if (!mysql_select_db("cde_db",$link))
	{
		echo "Error seleccionando la base de datos.";
		exit();
	}
	return $link;
}

$link=conectarse();
mysql_close($link);
?>
