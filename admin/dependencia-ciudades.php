<html lang="es">
<?php
include("class.mysql.php");
include("class.combos.php");
echo'<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
$ciudades = new selects();
$ciudades->code = $_GET["code"];
$ciudades = $ciudades->cargarCiudades();
foreach($ciudades as $key=>$value)
{
		echo "<option value=\"$key\">$value</option>";
}
?>
</html>