<?php session_start();


?>

<!doctype html>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" j type="text/css"/>
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
form.login {			font-family:"Agency FB";
			font-size:15px;
	   		background: none repeat scroll 0 0 #F1F1F1;
		    border: 1px solid #DDDDDD;
		    margin: 0 auto;
		    padding: 20px;
		    width: 150px;
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
		      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr align="left">
          <td width="714" align="center" valign="middle"><p>&nbsp;
            <div class="titulo1"  ><h2 style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px;">Personal de Administracion<span style="text-align: center"></span></h2></div>
			<?php 
		   include('conexion.php');
		  $link=conectarse();
		  $res=mysql_query("select * from administracion  ",$link);
		  while($fila=mysql_fetch_array($res))
		  {
	 		if($fila['imagen']=='')
			{
		  ?>
            </p>
            <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios" >
              <tr>
                <td width="33%" rowspan="7"align="center"><img src="admin/registro/defecto.gif" alt="imagen" width="112" height="113" /></td>
                <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
                <td  style="font-size:18px;">&nbsp;</td>
                <td style="font-size:16px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="21%" height="35" align="left"  style="font-size:16px; color: #333333;">Nombre</td>
                <td width="43%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left"  style="font-size:16px;  color: #333333;">Apellido</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
              </tr>
              <tr>
                <td width="3%" rowspan="4" align="center" valign="middle" >&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px;  color: #333333;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666; "><?php echo $fila['cargo']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px;  color: #333333;">Telefono </td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
              </tr>
              <tr>
                <td height="48" align="left" style="font-size:15px; text-align:left; padding-right:16px; color: #333333;">Correo</td>
                <td height="48" align="left" style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
              </tr>
            
            </table><?php } else{?>
            <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
            <tr>
              <td width="33%" rowspan="7"  align="center"><img src="admin/registro/<?php echo $fila['imagen']; ?>" alt="imagen" width="112" height="113" /></td>
              <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
              <td  style="font-size:18px;">&nbsp;</td>
              <td style="font-size:16px;">&nbsp;</td>
            </tr>
            <tr>
              <td width="21%" height="35" align="left"  style="font-size:16px; color: #333333;">Nombre</td>
              <td width="43%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
            </tr>
            <tr>
              <td height="33" align="left"  style="font-size:16px; color: #333333;">Apellido</td>
              <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
            </tr>
            <tr>
              <td width="3%" rowspan="4" align="center" valign="middle" >&nbsp;</td>

            </tr>
            <tr>
              <td height="35" align="left" style="font-size:16px; color: #333333;">Cargo</td>
              <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
            </tr>
            <tr>
              <td height="35" align="left" style="font-size:16px; color: #333333;">Telefono </td>
              <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
            </tr>
            <tr>
              <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #333333;">Correo</td>
              <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
            </tr>
          </table>
          
            <?php }} ?>
            <div class="titulo1" style="text-align:left; "><h2 style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; text-align: center;">Personal de Planificacion y Monitoreo<span style="text-align: center"></span></h2></div>
            <p>
              <?php 
		   
		  $res=mysql_query("select * from planificacion ",$link);
		  while($fila=mysql_fetch_array($res))
		  {
	 		if($fila['imagen']==''){
		  ?>
            </p>
            <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
              <tr>
                <td width="33%" rowspan="7"  align="center"><img src="admin/registro/defecto.gif" alt="imagen" width="112" height="113" /></td>
                <td rowspan="3" bgcolor="#FFFFFF"><P style="text-align:center; font-weight: bold; color: #FFF;">&nbsp;</P></td>
                <td  style="font-size:16px;">&nbsp;</td>
                <td  style="font-size:14px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="20%" height="35" align="left"  style="font-size:16px; color: #333333;">Nombre</td>
                <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td height="33" align="left"  style="font-size:16px; color: #333333;">Apellido</td>
                <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
              </tr>
              <tr>
                <td width="3%" rowspan="4" align="center" valign="middle" >&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px;color:#666666; "><?php echo $fila['cargo']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Telefono</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
              </tr>
              <tr>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #333333;">Correo</td>
                <td height="48"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
              </tr>
            </table>
            <?php }
			else{?>
            <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
              <tr>
                <td width="33%" rowspan="7"  align="center"><img src="admin/registro/<?php echo $fila['imagen']; ?>" alt="imagen" width="112" height="113" /></td>
                <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
                <td  style="font-size:16px;">&nbsp;</td>
                <td  style="font-size:14px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="20%" height="35" align="left"  style="font-size:16px; color: #333333;">Nombre</td>
                <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td height="33" align="left"  style="font-size:16px; color: #333333;;">Apellido</td>
                <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
              </tr>
              <tr>
                <td width="3%" rowspan="4" align="center" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Telefono</td>
                <td height="35" align="left"  style="font-size:14px;color:#666666; "><?php echo $fila['telefono']; ?></td>
              </tr>
              <tr>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #333333;">Correo</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
              </tr>
            </table>
            <p>
              <?php }} ?>
            </p>
            </p>
            <div class="titulo1" ><h2 style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; text-align: center;" >Personal de Direccion</h2></div>
            <p>
              <?php 
		   
		  $res=mysql_query("select * from direccion ",$link);
		  while($fila=mysql_fetch_array($res))
		  {
	  if($fila['imagen']==''){
		  ?>
            </p>
            <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
              <tr>
                <td width="33%" rowspan="7"  align="center"><img src="admin/registro/defecto.gif" alt="imagen" width="112" height="113" /></td>
                <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
                <td  style="font-size:16px;">&nbsp;</td>
                <td  style="font-size:14px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="20%" height="35" align="left"  style="font-size:16px; color: #333333;">Nombre</td>
                <td width="44%" height="35"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td height="33" align="left"  style="font-size:16px; fcolor: #333333;">Apellido</td>
                <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
              </tr>
              <tr>
                <td width="3%" rowspan="4" align="center" valign="middle" >&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Telefono</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
              </tr>
              <tr>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #333333;">Correo</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
              </tr>
            </table>
            <p>
              <?php } else{ ?>
            </p>
            <p>&nbsp; </p>
            <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
            <tr>
              <td width="33%" rowspan="7"  align="center"><img src="admin/registro/<?php echo $fila['imagen']; ?>" alt="imagen" width="112" height="113" /></td>
              
              
              <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
              <td  style="font-size:16px;">&nbsp;</td>
              <td  style="font-size:14px;">&nbsp;</td>
            </tr>
            <tr>
              <td width="20%" height="35" align="left"  style="font-size:16px; color: #333333;">Nombre</td>
              <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
            </tr>
            <tr>
              <td height="35" align="left"  style="font-size:16px; color: #333333;">Apellido</td>
              <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
            </tr>
            <tr>
              <td width="3%" rowspan="4" align="center" valign="middle" >&nbsp;</td>
            </tr>
            <tr>
              <td height="35" align="left" style="font-size:16px; color: #333333;">Cargo</td>
              <td height="35" align="left" style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
            </tr>
            <tr>
              <td height="35" align="left" style="font-size:16px; color: #333333;">Telefono</td>
              <td height="35" align="left" style="font-size:14px;color:#666666; "><?php echo $fila['telefono']; ?></td>
            </tr>
            <tr>
              <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #333333;">Correo</td>
              <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>            </tr>
          </table>
            <p>
              <?php } }?>
              
          </p>
            <div class="titulo1" >
              <h2 style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; text-align: center;" >Personal de Proyectos</h2>
            </div>
            <p>
              <?php 
		   
		  $res=mysql_query("select * from reg_proyecto  ",$link);
		  while($fila=mysql_fetch_array($res))
		  {
	  if($fila['imagen']==''){
		  ?>
            </p>
            <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
              <tr>
                <td width="33%" rowspan="7"  align="center"><img src="admin/registro/defecto.gif" alt="imagen" width="112" height="113" /></td>
                <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
                <td  style="font-size:16px;">&nbsp;</td>
                <td  style="font-size:14px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="20%" height="35" align="left"  style="font-size:16px; color: #333333;">Nombre</td>
                <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td height="33" align="left"  style="font-size:16px; color: #333333;">Apellido</td>
                <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
              </tr>
              <tr>
                <td width="3%" rowspan="4" align="center" valign="middle" >&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Telefono</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666; "><?php echo $fila['telefono']; ?></td>
              </tr>
              <tr>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #333333;">Correo</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
              </tr>
            </table>
            <p>
              <?php } else{ ?>
            </p>
            <p>&nbsp; </p>
            <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
              <tr>
                <td width="33%" rowspan="7"  align="center"><img src="admin/registro/<?php echo $fila['imagen']; ?>" alt="imagen" width="112" height="113" /></td>
                <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
                <td  style="font-size:16px;">&nbsp;</td>
                <td  style="font-size:14px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="20%" height="35" align="left"  style="font-size:16px; color: #333333;">Nombre</td>
                <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left"  style="font-size:16px; color: #333333;">Apellido</td>
                <td height="35"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
              </tr>
              <tr>
                <td width="3%" rowspan="4" align="center" valign="middle" >&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Cargo</td>
                <td height="35" style="font-size:14px;color:#666666; "><?php echo $fila['cargo']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #333333;">Telefono</td>
                <td height="35" align="left" style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
              </tr>
              <tr>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #333333;">Correo</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
              </tr>
            </table>
            <p>
              <?php } }?>
            </p>
          <p>&nbsp;</p></td>
          <td width="200" valign="top" class="fondomenu2"><p  align="center" style="font-size:15px; color: #333333; ">Inicias Session</p><form action="entrar_usuario.php" method="post" class="login">
            <div>
            <p style="color: #333333;">
              <label>Usuario: </label>
              <input name="usu" type="text" >
              </p>
            </div>
            <div>
              <p  style="color: #333333;">
                <label>Clave: </label>
                <input name="clav" type="password" >
              </p>
              
            </div>
            <div>
              <input name="login" type="submit" class="bot_contactar" value="Enviar">
            </div>
          </form>
          <p style="color:#CC3300; font-size:12px;" align="center";><?php if(!isset($_GET['men']))
		  {
		  }
		  else
		  {
			  $men=$_GET['men'];
			  echo $men;
			  }?></p>
          </td>
        </tr>
      </table>
	        
		 
		  
</section>
		
    <div style="clear:both;">
      
    </div>
    <div id="comentarios"></div>
    <div style="clear:both;"></div>
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