<?php
include("class.mysql.php");
include("class.combos.php");
$selects = new selects();
$paises = $selects->cargarPaises();
foreach($paises as $key=>$value)
{
		echo "<option value=\"$key\">$value</option>";
}
?>