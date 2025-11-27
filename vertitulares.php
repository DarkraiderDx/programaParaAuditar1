<!DOCTYPE HTML>
<?php 
require_once('conexion.php');
$link=conectarse();

$query = "SELECT * FROM noticias order by id_noticias desc";

$consulta = mysql_query($query,$link);

while($row=mysql_fetch_assoc($consulta))

{

$id= $row['id_noticias'];



$row['titulo'].'<br/>';	

{ ?>
<marquee direction="up" scrollamount="1"  onmouseover="this.scrollAmount='0'" onmouseout="this.scrollAmount='1'">
<a  id="textitu"href="ver_detalles_not.php?id=<?php echo $row['id_noticias']; ?>"><div id="titulares">

<?php echo $row['titulo']; ?>

</div></a>

<?php }}mysql_free_result($consulta); ?>
</marquee>
