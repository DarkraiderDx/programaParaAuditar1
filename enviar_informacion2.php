<?php 
session_start();
include("conexion.php");
if(!isset($_SESSION['usuario'])) 
{
	
  header('Location: personal.php'); 
  exit();
}?>
<!doctype html>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif" />
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
   <script language="javascript">
function VerDatos()
	{
		if((document.form.detalle.value=="")||(document.form.archivo.value==""))
		{
			alert("Tiene que escribir en todos los campos...!!!");
		}
		
		else
			document.form.submit();
	}
</script>
<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}
</style>
</head>
<body>
<div id="cabeza">
<div id="imaCabeza">
  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="150">
      <param name="movie" value="admin/images/animacionCDI.swf">
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="8.0.35.0">
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="admin/images/animacionCDI.swf" width="1000" height="150">
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
        <li class="subme"onClick="direccion('foro/index.php')">FORO</li>        
        <li class="subme"onClick="direccion('galeria.php')">GALERIA</li>
        <li class="subme"onClick="direccion('contactos.php')">CONTACTENOS</li>
        <li class="subme"onClick="direccion('personal.php')" id="active1">PERSONAL</li> 
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
		      <table width="100%" border="0" cellpadding="0" >
        <tr align="left">
          <td width="21%" valign="top" bgcolor="#FFFFFF" class="fondomenu2">
          <table width="100%" border="0" cellspacing="0" >
            <tr>
              <td><h2></h2></td>
            </tr>
            <tr>
              <td><div id="menu_lateral">

	<ul class="menu">
		<li class="item1"><a href='personal.php'>Personal</a>
		 <li class="item2"><a href='ver_informacion.php'>Ver Informacion</a></li>
         <li class="item5"><a href='enviar_informacion.php'>Enviar Informacion</a></li>

		
	</ul>

</div></td>
            </tr>
          </table></td>
          <td width="53%" align="center" valign="top">
          <?php
$link=conectarse();
$us=$_SESSION['usuario'];

$sql=mysql_query("select * from administracion where correo='$us'",$link);
$fila=mysql_fetch_assoc($sql);

$sql1=mysql_query("select * from planificacion where correo='$us'",$link);
$fila1=mysql_fetch_assoc($sql1);

$sql2=mysql_query("select * from direccion where correo='$us'",$link);
$fila2=mysql_fetch_assoc($sql2);

$sql3=mysql_query("select * from reg_proyecto where correo='$us'",$link);
$fila3=mysql_fetch_assoc($sql3);



//$d=mysql_query("select id_personal from personal where usuario='$us'",$link);
//$fid=mysql_fetch_array($d);
if($fila['correo']==$us)
{
$ides=$fila['clave'];


$n=0;
$n1=1;

$sql=mysql_query("select * from informacion where clave='$ides'",$link);


?></p>
          <form action="enviar_informacion1.php" method="post" enctype="multipart/form-data" id="fomColor2" name="form">
            <legend>
            <h2 style="color:#666666;">Enviar Información </h2>
            <p >&nbsp;</p>
            </legend>
            <?php ?>
            <table border="0" cellspacing="0" class="comentario1">
              <tr>
                <td align="left">NOMBRE
                  <input type="hidden" name="clave" value="<?php echo $ides; ?>"/></td>
                <td><input name="nom" type="text" required id="titu4" value="<?php echo $fila['nombre'];?>" size="30" maxlength="34"></td>
              </tr>
              <tr>
                <td width="102" align="left">APELLIDO</td>
                <td width="201"><input name="titu2" type="text" required id="titu5" value="<?php echo $fila['apellido'];?>" size="30" maxlength="34"></td>
              </tr>
              <tr>
                <td align="left">EMAIL</td>
                <td align="left"><input name="correo2" type="email" required id="correo2" value="<?php echo $fila['correo']; ?>" size="30" maxlength="34"></td>
              </tr>
              <tr>
                <td align="left">CARGO</td>
                <td align="left"><input name="titu2" type="text" required id="titu7" value="<?php echo $fila['cargo']; ?>" size="30" maxlength="34"></td>
              </tr>
              <tr>
                <td align="left">DETALLE</td>
                <td align="left"><input name="detalle" type="text" required id="titu8" size="30" maxlength="34"></td>
              </tr>
              <tr>
                <td colspan=2><label for="archivo"></label>
                  <input type="file" name="archivo" id="archivo"></td>
              </tr>
              <tr>
                <td><input name="Enviar3" type=submit  value="Enviar"></td>
                <td align="center"><input name="Enviar3" type=reset class="boton_reset" value="Limpiar"></td>
              </tr>
            </table>
          </form>
          <p>
          
          <h3 class="h3">&nbsp;</h3></p>   
          <?php $usu=$_SESSION['usuario'];
   $sql=mysql_query("select * from administracion where correo='$usu'",$link);
   $fila=mysql_fetch_array($sql);?></td>
          <td width="10%" valign="top" class="fondomenu2"><?php echo'<a  style="color:#4A71D5;" href="cerrar session.php">Cerrar Sesión</a>';?>
            <p>
              <div class="foto">
                <table width="100%"border="0" cellspacing="0"  class="user">
                  <tr>
                    <td colspan="2" align="center"><?php
 echo'<h1 style="text-align:center; color:#666666; ">BIENVENIDO</h1>';
  
 

?></td>
                  </tr>
                  <tr><?php if($fila['imagen']==''){?>
	                  <td width="50%" rowspan="3" align="left" valign="middle"><span class="foto1"><img src="admin/registro/defecto.gif" class="foto" /></span></td>
                      <td width="50%" style=" font-size:11px;padding:2px;"><?php echo $fila['nombre'];?></td>
                  </tr>
                  <tr>
                    <td style=" font-size:11px; padding:2px;"><?php echo $fila['apellido'];?></td>
                  </tr>
                  <?php }else {?>
                  
                    <td width="50%" rowspan="3" align="left" valign="middle"><span class="foto1"><img src="admin/registro/<?php echo $fila['imagen']; ?>" class="foto" /></span></td>
					
                    <td width="50%" style=" font-size:11px;padding:2px;"><?php echo $fila['nombre'];?></td>
                  </tr>
                  <tr>
                    <td style=" font-size:11px; padding:2px;"><?php echo $fila['apellido'];?></td>
                  </tr>
                  </table>
                  <?php }}elseif($fila1['correo']==$us){
					  $ides=$fila1['clave'];


$n=0;
$n1=1;

$sql=mysql_query("select * from planificacion where clave='$ides'",$link);

?></p>
                  <form action="enviar_informacion1.php" method="post" enctype="multipart/form-data" id="fomColor" name="form">
                    <legend>
                    <h2 style="color:#666666;">Enviar Información </h2>
                    <p>&nbsp;</p>
                    </legend>
                    <?php ?>
                    <table border="0" cellspacing="0" class="comentario1">
                      <tr>
                        <td align="left">NOMBRE
                          <input type="hidden" name="clave" value="<?php echo $ides; ?>"/></td>
                        <td><input name="titu" type="text" required id="titu" value="<?php echo $fila1['nombre'];?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td width="102" align="left">APELLIDO</td>
                        <td width="201"><input name="titu" type="text" required id="titu2" value="<?php echo $fila1['apellido'];?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td align="left">EMAIL</td>
                        <td align="left"><input name="correo" type="email" required id="correo" value="<?php echo $fila1['correo']; ?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td align="left">CARGO</td>
                        <td align="left"><input name="titu" type="text" required id="titu3" value="<?php echo $fila1['cargo']; ?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td align="left">DETALLE</td>
                        <td align="left"><input name="detalle" type="text" required id="titu6" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td colspan=2><label for="archivo2"></label>
                          <input type="file" name="archivo" id="archivo"></td>
                      </tr>
                      <tr>
                        <td><input name="Enviar" type=submit  value="Enviar"></td>
                        <td align="center"><input name="Enviar" type=reset class="boton_reset" value="Limpiar"></td>
                      </tr>
                    </table>
                  </form>
          <?php $usu=$_SESSION['usuario'];
   $sql=mysql_query("select * from planificacion where correo='$usu'",$link);
   $fila=mysql_fetch_array($sql);?>
            <td width="10%" valign="top" class="fondomenu2">
            <?php echo'<a style="color:#4A71D5;" href="cerrar session.php">Cerrar Sesión</a>';?>
           
            <div class="foto">
<table width="100%"border="0" cellspacing="0" class="user" >
                  <tr>
                    <td colspan="2" align="center"><?php
 echo'<h1 style="text-align:center; color:#666666; ">BIENVENIDO</h1>';
  
 

?></td>
                  </tr>
                  <tr><?php if($fila['imagen']==''){?>
	                  <td width="50%" rowspan="3" align="left" valign="middle"><span class="foto1"><img src="admin/registro/defecto.gif" class="foto" /></span></td>
                      <td width="50%" style=" font-size:11px;padding:2px;"><?php echo $fila['nombre'];?></td>
                  </tr>
                  <tr>
                    <td style=" font-size:11px; padding:2px;"><?php echo $fila['apellido'];?></td>
                  </tr>
                  <?php }else {?>
                  
                    <td width="50%" rowspan="3" align="left" valign="middle"><span class="foto1"><img src="admin/registro/<?php echo $fila['imagen']; ?>" class="foto" /></span></td>
					
                    <td width="50%" style=" font-size:11px;padding:2px;"><?php echo $fila['nombre'];?></td>
                  </tr>
                  <tr>
                    <td style=" font-size:11px; padding:2px;"><?php echo $fila['apellido'];?></td>
                  </tr>
                  </table>
                 <?php }}elseif($fila2['correo']==$us){
					  $ides=$fila2['clave'];


$n=0;
$n1=1;

$sql=mysql_query("select * from planificacion where clave='$ides'",$link);

?><form action="enviar_informacion1.php"  name="form" method="post" enctype="multipart/form-data" id="fomColor">
                    <legend>
                    <h2 style="color:#666666;">Enviar Información </h2>
                    <p>&nbsp;</p>
                    </legend>
                    <?php ?>
                    <table border="0" cellspacing="0" class="comentario1">
                      <tr>
                        <td align="left">NOMBRE
                          <input type="hidden" name="clave" value="<?php echo $ides; ?>"/></td>
                        <td><input name="titu" type="text" required id="titu" value="<?php echo $fila2['nombre'];?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td width="102" align="left">APELLIDO</td>
                        <td width="201"><input name="titu" type="text" required id="titu2" value="<?php echo $fila2['apellido'];?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td align="left">EMAIL</td>
                        <td align="left"><input name="correo" type="email" required id="correo" value="<?php echo $fila2['correo']; ?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td align="left">CARGO</td>
                        <td align="left"><input name="titu" type="text" required id="titu3" value="<?php echo $fila2['cargo']; ?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td align="left">DETALLE</td>
                        <td align="left"><input name="detalle" type="text" required id="titu6" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td colspan=2><label for="archivo2"></label>
                          <input type="file" name="archivo" id="archivo"></td>
                      </tr>
                      <tr>
                        <td><input name="Enviar" type=submit  value="Enviar"></td>
                        <td align="center"><input name="Enviar" type=reset class="boton_reset" value="Limpiar"></td>
                      </tr>
                    </table>
                  </form>
            <?php $usu=$_SESSION['usuario'];
   $sql=mysql_query("select * from direccion where correo='$usu'",$link);
   $fila=mysql_fetch_array($sql);?>
              <td width="10%" valign="top" class="fondomenu3">
              <?php echo'<a  style="color:#4A71D5;" href="cerrar session.php">Cerrar Sesión</a>';?>
            <p>
              <div class="foto">
                <table width="100%"border="0" cellspacing="0" height="100"  class="user">
                  <tr>
                    <td colspan="2" align="center"><?php
 echo'<h1 style="text-align:center; color:#666666;">BIENVENIDO</h1>';
  
 

?></td>
                  </tr>
                  <tr><?php if($fila['imagen']==''){?>
	                  <td width="50%" rowspan="3" align="left" valign="middle"><span class="foto1"><img src="admin/registro/defecto.gif" class="foto" /></span></td>
                      <td width="50%" style=" font-size:11px;padding:2px;"><?php echo $fila['nombre'];?></td>
                  </tr>
                  <tr>
                    <td style="font-size:11px; padding:2px;"><?php echo $fila['apellido'];?></td>
                  </tr>
                  <?php }else {?>
                  
                    <td width="50%" rowspan="3" align="left" valign="middle"><span class="foto1"><img src="admin/registro/<?php echo $fila['imagen']; ?>" class="foto" /></span></td>
					
                    <td width="50%" style=" font-size:11px; padding:2px;"><?php echo $fila['nombre'];?></td>
                  </tr>
                  <tr>
                    <td style=" font-size:11px; padding:2px;"><?php echo $fila['apellido'];?></td>
                  </tr>
                  </table>
                  <?php }}elseif($fila3['correo']==$us){
					  $ides=$fila3['clave'];


$n=0;
$n1=1;

$sql=mysql_query("select * from direccion where clave='$ides'",$link);

?>
<form action="enviar_informacion1.php" method="post" enctype="multipart/form-data" id="fomColor">
                    <legend>
                    <h2 style="color:#666666;">Enviar Información </h2>
          <p>&nbsp;</p>
                    </legend>
                   
                    <table border="0" cellspacing="0" class="comentario1">
                      <tr>
                        <td align="left">NOMBRE
                          <input name="clave" type="hidden" id="clave" value="<?php echo $ides; ?>"/></td>
                        <td><input name="titu" type="text" required id="titu" value="<?php echo $fila3['nombre'];?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td width="102" align="left">APELLIDO</td>
                        <td width="201"><input name="titu" type="text" required id="titu2" value="<?php echo $fila3['apellido'];?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td align="left">EMAIL</td>
                        <td align="left"><input name="correo" type="email" required id="correo" value="<?php echo $fila3['correo']; ?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td align="left">CARGO</td>
                        <td align="left"><input name="titu" type="text" required id="titu3" value="<?php echo $fila3['cargo']; ?>" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td align="left">DETALLE</td>
                        <td align="left"><input name="detalle" type="text" required id="titu6" size="30" maxlength="34"></td>
                      </tr>
                      <tr>
                        <td colspan=2><label for="archivo"></label>
                        <input type="file" name="archivo" id="archivo"></td>
                      </tr>
                      <tr>
                        <td><input name="Enviar" type=submit  value="Enviar"></td>
                        <td align="center"><input name="Enviar" type=reset class="boton_reset" value="Limpiar"></td>
                      </tr>
                    </table>
                </form>

        <?php $usu=$_SESSION['usuario'];
   $sql=mysql_query("select * from reg_proyecto where correo='$usu'",$link);
   $fila=mysql_fetch_array($sql);?>
          <td width="10%" valign="top" class="fondomenu2"><?php echo'<a  style="color:#4A71D5;" href="cerrar session.php">Cerrar Sesión</a>';?>
            <p>
              <div class="foto">
                <?php
 echo'<h1 style="text-align:center; color:#666666; ">BIENVENIDO</h1>';
  
 

?>
                <table width="100%"border="0" cellspacing="0"  class="user">
                  <tr>
                    <td colspan="2" align="center">&nbsp;</td>
                  </tr>
                  <tr><?php if($fila['imagen']==''){?>
	                  <td width="50%" rowspan="3" align="left" valign="middle"><span class="foto1"><img src="admin/registro/defecto.gif" class="foto" /></span></td>
                      <td width="50%" style=" font-size:11px;padding:2px;"><?php echo $fila['nombre'];?></td>
                  </tr>
                  <tr>
                    <td style=" font-size:11px; padding:2px;"><?php echo $fila['apellido'];?></td>
                  </tr>
                  <?php }else {?>
                  
                    <td width="50%" rowspan="3" align="left" valign="middle"><span class="foto1"><img src="admin/registro/<?php echo $fila['imagen']; ?>" class="foto" /></span></td>
					
                    <td width="50%" style="font-size:11px;padding:2px;"><?php echo $fila['nombre'];?></td>
                  </tr>
                  <tr>
                    <td style=" font-size:11px; padding:2px;"><?php echo $fila['apellido'];?></td>
                  </tr>
                  </table>
                  <?php }}?>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table>
               </div>
              <div></div>
                      
        </tr>
      </table>
            <div style="clear:both;">
                  
            </div>
    <div id="comentarios"></div>
    <div style="clear:both;"></div>
<footer></footer>
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