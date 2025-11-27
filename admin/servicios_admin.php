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
          <td width="21%" valign="top" bgcolor="#FFFFFF" class="fondomenu2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><h2></h2></td>
            </tr>
            <tr>
              <td><div id='cssmenu'>
<ul>
   <li class='active'><a href='index.html'><span>Noticias</span></a></li>
   <li class='has-sub'><a href='noticias.php'><span>Nueva Noticia</span></a>
      
   </li>
   <li class='has-sub'><a href='borrar_editar_noticias.php'><span>Eliminar Noticias</span></a>
      </li>
   <li class='last'><a href='editar_noticias.php'><span>Editar Noticias</span></a></li>
</ul>
</div></td>
            </tr>
          </table></td>
          <td width="53%" align="center" valign="top"><form action="procesar_noticias.php"
            method="post" enctype="multipart/form-data" id="fomColor">
		       
            <legend><h2>Envie una Noticia</h2></legend>
		          <table class="tabla_nueva_noticia">
		            
		            <tr>
		              <td align="right">TITULAR</td>
		              <td><input name="titu" type="text" required id="titu" size="30" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td width="102" align="right">DESCRIPCIÓN</td>
		              <td width="201"><textarea name="des" cols="25" rows="4" required id="des" tabindex="4"></textarea></td>
	                </tr>
		            <tr>
		              <td align="right">NOTICIA</td>
		              <td align="left"><textarea name="conte" cols="25" rows="6" required id="conte" tabindex="4"></textarea></td>
	                </tr>
		            <tr>
		              <td colspan=2><label for="img"></label>
	                  <input type="file" name="img" id="img"></td>
	                </tr>
		            <tr>
		              <td><input name="Enviar" type=submit class="boton_e" value="Enviar Noticia"></td>
		              <td align="center"><input name="Enviar2" type=reset class="boton_e" value="Limpiar"></td>
	                </tr>
	              </table>
	            
	          </form></td>
          <td width="26%" valign="top" class="fondomenu2"><aside>
            <div id='publicaciones'><h2>Ultimas Noticias</h2></div>  
<?php  require_once('vertitulares.php');?>

</aside></td>
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