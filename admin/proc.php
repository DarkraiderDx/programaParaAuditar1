<?php
include 'conexion.php';
$q=$_POST['q'];

$con=conectarse();
$res=mysql_query("select * from municipio where id_ciudad=".$q."",$con);

?>
<select name="com"onchange="municipio(this.value)" >
<?php while($f=mysql_fetch_array($res)){ ?>
 <option><?php echo $f['municipio']; ?></option>
<?php } ?>

</select>

