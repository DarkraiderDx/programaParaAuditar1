<?php
include 'conexion.php';
$q=$_POST['q'];

$con=conectarse();
$res=mysql_query("select * from comunidad where id_municipio=".$q."",$con);

?>
<select name="com" >
<?php while($f=mysql_fetch_array($res)){ ?>
 <option><?php echo $f['comunidad']; ?></option>
<?php } ?>

</select>

