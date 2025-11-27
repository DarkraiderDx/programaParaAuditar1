<?php require_once('conexion.php'); ?>
<!doctype html>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
     <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>
	

<script type="text/javascript" src="admin/jquery-1.6.4.min.js"></script>
<script language="javascript" src="js/jquery.js" ></script>

<script language="javascript" src="js/form-emerge.js" ></script>

<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    
  

<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}
.tabla_servicios tr td {
	color:#666666;
	font-size:11px;
}

.tabla_servicios tr td p {
	color: #006600;
}
.pro {
	color: #333333;	font-weight: bold;
	font-size:12px;
}

.tabla_servicios1 tr td {
	color: #666666;
}
.tabla_servicios1 tr td {
	font-size: 11px;
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
        <li class="subme"onClick="direccion('servicios.php')" id="active1">SERVICIOS</li>
        <li class="subme"onClick="direccion('noticias.php')">NOTICIAS</li>
        <li class="subme"onClick="direccion('foro/index.php')">FORO</li>        
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
          <td width="260" align="center" valign="top" bgcolor="#FFFFFF" class="fondomenu2">
          <table width="88%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><h2></h2></td>
            </tr>
            <tr>
              <td><div id="menu_lateral">

	<ul class="menu">
		<li class="item1" style="text-align:left;"><a href="#">Servicios </a></li>
			
		
		<li class="item2" style="text-align:left;"><a href="#">Comercialización</a>
			<ul>
				<li class="subitem1" ><a href="servicios.php">Venta</a></li>
				<li class="subitem2"><a href="servicios_compra.php">Compra </a></li>
				
			</ul>
		</li>
		<li class="item3" style="text-align:left;"><a href="#">Eventos Formativos</a>
			<ul>

				<li class="subitem3"><a href="capacitacion.php">Capacitacion</a></li>
			</ul>
		</li>
		
		
	</ul>

</div>

</td   >
            </tr >
          </table ></td>
          <td width="90%" align="center" valign="middle" ><div class="servicios">
            
            <?php 
		  $link=conectarse();
		  $res=mysql_query("select * from servicios where tipo='venta' order by id_servicio DESC",$link);
		  while($fila=mysql_fetch_array($res))
		  {

		  ?>
           
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios1">
                <tr>
                   <td width="24%" rowspan="5" align="center" valign="top" bgcolor="#FBFBFB" style=" boder-radius:5px;"><img  src="admin/servicios/<?php echo $fila['imagen']; ?>"  /></td>
                  <td  height="30" colspan="2"  align="center" class="tdventa"> <span class="h3"><?php echo $fila['tipo']; ?></span></td>
                </tr>
                <tr>
                 
                  <td height="33" colspan="2" align="left" style="padding-left:5px; font-size: 12px;" ><span class="pro">Producto : </span><?php echo $fila['producto']; ?><span style="font-size: 11px"></span></td>
                </tr>
                <tr>
                 
                  <td height="42" colspan="2"  style="padding-left:7px;"><P style="border:1px solid #FFCC00; border-radius:5px; margin:5px; color:#666666;
	font-size:11px;width:230px; height:70px; padding:5px; word-wrap: break-word;"><?php echo $fila['detalle']; ?></P></td>
                </tr>
                <tr>
                  <td width="46%" height="30"  style="padding-left:5px;"><span class="pro">Cantidad : </span><?php echo $fila['cantidad']; ?></td>
                  <td width="30%"  style="padding-left:5px;"><form  method="post" action="contactos.php"><input name="button" type="submit"  value="Contactar">
                     <input type="hidden" name="tipo_contacto" id="hiddenField" value="<?php echo $fila['tipo'].'_'.'servicios';?>">
                  </form></td>
              		              </tr>
            </table>
            
            <?php } ?>
            
        
		</td>
	
          
        </tr>
      </table>
	        
	
		  
</section>
		
    <div style="clear:both;">
      
    </div>
    <div id="comentarios"></div>
    <div style="clear:both;"></div>
<footer>
	  
	</footer>


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