<?php require_once('conexion.php'); ?>
<!doctype html>
<html>
<head>
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>

	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src="js/menu_jquery.js"></script>

<script language="javascript" src="js/jquery.js" ></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    
    
<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}
.tr th {
	font-weight: bold;
}
.tr th {
	font-weight: normal;
}
</style>
</head>
<body>
<div id="cabeza">
<div id="imaCabeza">
  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="150">
      <param name="movie" value="images/animacionCDI.swf">
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="8.0.35.0">
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="images/animacionCDI.swf" width="1000" height="150">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="swfversion" value="8.0.35.0">
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
        <div>
          <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
  </object>
</div>
</div>
<div style="clear:both;"></div>
<div class="contenedorMenu">
  <div id="menu">
    <nav>
      <ul class="men">
        <li class="subme" onClick="direccion('index.php')">INICIO</li>
        <li class="subme"onClick="direccion('quienes_somos.php')">QUIENES SOMOS</li>
        <li class="subme"onClick="direccion('proyectos.php')">PROYECTOS</li>
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS</li>
        <li class="subme"onClick="direccion('noticias.php')">NOTICIAS</li>
        <li class="subme"onClick="direccion('galeria.php')">GALERIA</li>
        <li class="subme"onClick="direccion('contactos.php')">CONTACTENOS</li>
        <li class="subme"onClick="direccion('personal.php')">PERSONAL</li> 
        <li class="subme"onClick="direccion('convocatorias.php')">CONVOCATORIAS</li> 
               </ul>
    </nav>
    <div style="clear:both;"></div>
  </div>
  </div>
  		<!-- slider-holder -->

		<!-- end of slider-holder -->
 <div style="clear:both;"></div>
<div class="contenedor">
		<header>
	    <span class="resaltado">El CDE-I</span> (Centro de Desarrollo y Promoción Económica Integral),<span class="resaltado"> es una organización no lucrativa, dedicada a potenciar capacidades de gestión económica, social, productiva e investigación</span> para implementar procesos de desarrollo local integral en espacios comunales, municipales, regionales, departamentales y nacionales. </header>
        
		<section>
		  
		   <br>
		      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr align="left">
          <td width="26%" valign="top" bgcolor="#FFFFFF" class="fondomenu2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><h2></h2></td>
            </tr>
            <tr>
              <td><div id="menu_lateral">
                
                <ul class="menu">
					
		<li class="item2"><a>Personal</a>
			<ul>
				<li class="subitem1"><a href="personal.php">Registrar Personal</a></li>
				<li class="subitem2"><a href="editar_personal_administrativo.php">Actualizar Personal Administrativo</a></li>
				<li class="subitem2"><a href="editar_personal_planificacion.php">Actualizar Personal Planificacion</a></li>                
    			<li class="subitem2"><a href="editar_personal_direccion.php">Actualizar Personal Direccion</a></li>                
   				<li class="subitem2"><a href="editar_personal_proyectos.php">Actualizar Personal Proyectos</a></li>
                <li class="subitem2"><a href="eliminar_personal_administrativo.php">Eliminar Personal Administrativo</a></li>                
                <li class="subitem2"><a href="eliminar_personal_planificacion.php">Eliminar Personal Planificacion</a></li>
                <li class="subitem2"><a href="eliminar_personal_direccion.php">Eliminar Personal Direccion</a></li>
                <li class="subitem2"><a href="eliminar_personal_proyectos.php">Eliminar Personal Proyectos</a></li>
                
                <li class="subitem2"><a href="rec_informacion_personal.php">Recibir Informacion</a></li>
                <li class="subitem2"><a href="enviar_informacion_personal.php">Enviar Informacion</a></li>
				
			</ul>
		</li>
		
		
	</ul>

</div></td>
            </tr>
          </table></td>
          <td width="72%" align="center" valign="top"><p>
          
            <?php
$link=conectarse();
$us=$_POST['clave'];

$sql=mysql_query("select * from administracion where clave='$us'",$link);
$fila=mysql_fetch_assoc($sql);

$sql1=mysql_query("select * from planificacion where clave='$us'",$link);
$fila1=mysql_fetch_assoc($sql1);

$sql2=mysql_query("select * from direccion where clave='$us'",$link);
$fila2=mysql_fetch_assoc($sql2);

$sql3=mysql_query("select * from reg_proyecto where clave='$us'",$link);
$fila3=mysql_fetch_assoc($sql3);



//$d=mysql_query("select id_personal from personal where usuario='$us'",$link);
//$fid=mysql_fetch_array($d);
if($fila['clave']==$us)
{
$ides=$fila['clave'];


$n=0;
$n1=1;

$sql=mysql_query("select * from informacion_des where clave='$ides'",$link);

?>			<div align="left">Nombre:<?php echo $fila['nombre'].' '.$fila['apellido'];?></div>
			<div align="left">Cargo:<?php echo $fila['cargo'];?></div>	
          </p><p><h2 style="color:#333333;">descargar</h2></p>
            <table border="1" cellpadding="0" cellspacing="0" class="comentario2" >
            <tr class="tr">
              <th width="19"><span class="h3">Nº</span></th>
              <th width="45" align="left"><span class="h3">Fecha</span></th>
              <th align="left"><span class="h3">Detalle</span></th>
              <th align="left"><span class="h3">Nombre Archivo</span></th>
              <th width="59"><span class="h3">Archivo</span></th>
            </tr>
            <?php 
while($fila=mysql_fetch_array($sql)){
?>
            <tr class="tr">
              <?php if($n==0){?>
              <th class="f1"><?php echo $n1;?></th>
              <th align="left" class="f1"><?php echo $fila['fecha']; ?></th>
              <th width="130" align="left"class="f1"><?php echo $fila['detalle']; ?></th>
              <th width="117" align="left"class="f1"><?php echo $fila['nombre']; ?></th>
              <th><?php echo '<a href="bajar_archivo.php?id='.$fila['id_informacion'].'"><button class="boton_act">descargar</button></a>';?></th>
             
			  <?php $n=1; $n1++; }
              elseif($n==1){?>
             
              <th width="17"><?php echo $n1;?></th>
              <th width="17" align="left" class="f1" ><?php echo $fila['fecha']; ?></th>
              <th width="76" align="left" class="f1"><?php echo $fila['detalle']; ?></th>
              <th width="148" align="left" class="f1"><?php echo $fila['nombre']; ?></th>
              <th width="17"><?php echo '<a href="bajar_archivo.php?id='.$fila['id_informacion'].'"><button class="boton_act">descargar</button></a>';?></th>
              
            </tr>
            </table>
            <?php $n=0; $n1++; }?>
            <?php }}elseif($fila1['clave']==$us)
{
$ides=$fila1['clave'];


$n=0;
$n1=1;

$sql=mysql_query("select * from informacion_des where clave='$ides'",$link);

?><div align="left">Nombre:<?php echo $fila1['nombre'].' '.$fila1['apellido'];?></div>
			<div align="left">Cargo:<?php echo $fila1['cargo'];?></div>	
          </p><p><h2 style="color:#333333;">descargar</h2></p>
            <table border="1" cellpadding="0" cellspacing="0" class="comentario2" >
            <tr class="tr">
              <th><span class="h3">Nº</span></th>
              <th align="left"><span class="h3">Fecha</span></th>
              <th align="left"><span class="h3">Detalle</span></th>
              <th align="left"><span class="h3">Nombre Archivo</span></th>
              <th><span class="h3">Archivo</span></th>
            </tr>
            <?php 
while($fila=mysql_fetch_array($sql)){
?>
            <tr class="tr">
              <?php if($n==0){?>
              <th class="f1"><?php echo $n1;?></th>
              <th align="left" class="f1"><?php echo $fila['fecha']; ?></th>
              <th width="100" align="left"class="f1"><?php echo $fila['detalle']; ?></th>
              <th width="200" align="left"class="f1"><?php echo $fila['nombre']; ?></th>
              <th><?php echo '<a href="bajar_archivo.php?id='.$fila['id_informacion'].'"><button class="boton_act">descargar</button></a>';?></th>
              <?php $n=1; $n1++; }
              else if($n==1){?>
              <th><?php echo $n1;?></th>
              <th align="left" ><?php echo $fila['fecha']; ?></th>
              <th width="100" align="left"><?php echo $fila['detalle']; ?></th>
              <th width="200" align="left"><?php echo $fila['nombre']; ?></th>
              <th><?php echo '<a href="bajar_archivo.php?id='.$fila['id_informacion'].'"><button class="boton_act">descargar</button></a>';?></th>
              
            </tr>
            </table><?php $n=0; $n1++; }?>
            <?php }}elseif($fila2['clave']==$us)
{
$ides=$fila2['clave'];


$n=0;
$n1=1;

$sql=mysql_query("select * from informacion_des where clave='$ides'",$link);

?><div align="left">Nombre:<?php echo $fila2['nombre'].' '.$fila2['apellido'];?></div>
			<div align="left">Cargo:<?php echo $fila2['cargo'];?></div>	
          </p><p><h2 style="color:#333333;">descargar</h2></p>
            <table border="1" cellpadding="0" cellspacing="0" class="comentario2" >
            <tr class="tr">
              <th><span class="h3">Nº</span></th>
              <th align="left"><span class="h3">Fecha</span></th>
              <th align="left"><span class="h3">Detalle</span></th>
              <th align="left"><span class="h3">Nombre Archivo</span></th>
              <th><span class="h3">Archivo</span></th>
            </tr>
            <?php 
while($fila=mysql_fetch_array($sql)){
?>
            <tr class="tr">
              <?php if($n==0){?>
              <th class="f1"><?php echo $n1;?></th>
              <th align="left" class="f1"><?php echo $fila['fecha']; ?></th>
              <th width="100" align="left"class="f1"><?php echo $fila['detalle']; ?></th>
              <th width="200" align="left"class="f1"><?php echo $fila['nombre']; ?></th>
              <th><?php echo '<a href="bajar_archivo.php?id='.$fila['id_informacion'].'"><button class="boton_act">descargar</button></a>';?></th>
              <?php $n=1; $n1++; }
              else if($n==1){?>
              <th><?php echo $n1;?></th>
              <th align="left" ><?php echo $fila['fecha']; ?></th>
              <th width="100" align="left"><?php echo $fila['detalle']; ?></th>
              <th width="200" align="left"><?php echo $fila['nombre']; ?></th>
              <th><?php echo '<a href="bajar_archivo.php?id='.$fila['id_informacion'].'"><button class="boton_act">descargar</button></a>';?></th>
             
            </tr>
            </table> <?php $n=0; $n1++; }?>
           <?php }}elseif($fila3['clave']==$us)
{
$ides=$fila3['clave'];


$n=0;
$n1=1;

$sql=mysql_query("select * from informacion_des where clave='$ides'",$link);

?><div align="left">Nombre:<?php echo $fila3['nombre'].' '.$fila3['apellido'];?></div>
			<div align="left">Cargo:<?php echo $fila3['cargo'];?></div>	
          </p><p><h2 style="color:#333333;">descargar</h2></p>
            <table border="1" cellpadding="0" cellspacing="0" class="comentario2" >
            <tr class="tr">
              <th><span class="h3">Nº</span></th>
              <th align="left"><span class="h3">Fecha</span></th>
              <th align="left"><span class="h3">Detalle</span></th>
              <th align="left"><span class="h3">Nombre Archivo</span></th>
              <th><span class="h3">Archivo</span></th>
            </tr>
            <?php 
while($fila=mysql_fetch_array($sql)){
?>
            <tr class="tr">
              <?php if($n==0){?>
              <th class="f1"><?php echo $n1;?></th>
              <th align="left" class="f1"><?php echo $fila['fecha']; ?></th>
              <th width="100" align="left"class="f1"><?php echo $fila['detalle']; ?></th>
              <th width="200" align="left"class="f1"><?php echo $fila['nombre']; ?></th>
              <th><?php echo '<a href="bajar_archivo.php?id='.$fila['id_informacion'].'"><button class="boton_act">descargar</button></a>';?></th>
              <?php $n=1; $n1++; }
              else if($n==1){?>
              <th><?php echo $n1;?></th>
              <th align="left" ><?php echo $fila['fecha']; ?></th>
              <th width="100" align="left"><?php echo $fila['detalle']; ?></th>
              <th width="200" align="left"><?php echo $fila['nombre']; ?></th>
              <th><?php echo '<a href="bajar_archivo.php?id='.$fila['id_informacion'].'"><button class="boton_act">descargar</button></a>';?></th>
              
            </tr>
           
          </table><?php $n=0; $n1++; }}}?>
            
         </td>
         
        
        
      </table>
</td>
</table>
           
		 
		  
</section>
		
    <div style="clear:both;"></div>
      
    <br>
    <br>
    <br>
    <br>
    
<footer></footer>


<div id="piePagina">
      <p>DIRECCION: 
    Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p>
</div>
</body>
</html>