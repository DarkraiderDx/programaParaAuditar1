<?php require_once('conexion.php'); ?>
<!doctype html>
<html>
<head>
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>
<link rel="stylesheet" media="screen" href="css/CAL_CSS_estilos.css" />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src="js/menu_jquery.js"></script>

<script language="javascript" src="js/jquery.js" ></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>  

<script src="js/CAL_JS_modernizr.js"></script>
	<script src="js/CAL_JS_comportamiento.js"></script>    
    
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
          <td width="21%" align="center" valign="top" bgcolor="#FFFFFF" class="fondomenu2"><table width="50%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><h2></h2></td>
            </tr>
            <tr>
              <td><div id="menu_lateral">
                
                <ul class="menu">
		<li class="item1" style="text-align:left;"><a href="servicios.php">Servicios</a></li>
			
		
		<li class="item2" style="text-align:left;"><a>Comercializacion</a>
			<ul>
				<li class="subitem1"><a href="servicios.php">Registrar Venta-Compra</a></li>
				<li class="subitem2"><a href="editar_servicios.php">Editar Venta-Compra</a></li>
                <li class="subitem2"><a href="eliminar_servicios.php">Eliminar Venta-Compra</a></li>
				
			</ul>
		</li>
		<li class="item3" style="text-align:left;"><a>Eventos Formativos</a>
			
		<ul>
				<li class="subitem1"><a href="reg_evento.php">Registrar Evento</a></li>
				<li class="subitem2"><a href="editar_evento.php">Editar Evento</a></li>
				<li class="subitem2"><a href="eliminar_evento.php">Eliminar Evento</a></li>
			</ul>
			
		</li>
		
	</ul>

</div></td>
            </tr>
          </table></td>
          <td width="666" align="center" valign="top"><form action="registrado_evento.php"
            method="post" enctype="multipart/form-data" id="fomColor">
		       
            <legend>
            <h2 style="color:#333333;">Registrar Evento</h2></legend>
		          <table cellspacing="2" class="comentario1">
		            
		            <tr>
		              <td align="left">&nbsp;</td>
		              <td align="left" valign="middle">&nbsp;</td>
	                </tr>
		            <tr>
		              <td align="left">TEMA DE EVENTO</td>
		              <td align="left" valign="middle"><textarea name="nom_evento" cols="35" required id="titu"></textarea></td>
	                </tr>
		            <tr>
		              <td width="219" height="33" align="left">TIEMPO DE DURACION</td>
		              <td width="261" align="left" valign="middle"><label for="select">
		                <input name="tiempo" type="text" required id="titu2" size="40" maxlength="34">
		              </label></td>
	                </tr>
                    
		            <tr>
		              <td height="30" align="left">LUGAR</td>
		              <td align="left" valign="middle" id="myDiv"><input name="lugar" type="text" required id="titu3" size="40" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td height="29" align="left">FECHA DE INICIO</td>
		              <td align="left" valign="middle" id="myDiv2"><input name="fecha_ini" type="text" id="f_date_" class="date-picker"  size="40" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td align="left">FECHA DE FINAL</td>
		              <td align="left" valign="middle" id="myDiv3"><input name="fecha_fin" type="text" id="f_date_" class="date-picker"  size="40" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td height="33" align="left">TIPO DE EVENTO</td>
		              <td align="left"><label for="select2"></label>
		                <select name="tipo_evento" id="select2">
		                  <option>Consultoria</option>
		                  <option>Evaluacion de proyectos</option>
		                  <option>Capacitacion</option>
                      </select></td>
	                </tr>
		            <tr>
		              <td height="102" align="left">EXPOSITOR</td>
		              <td align="left"><textarea name="expositor" id="expositor" cols="35" rows="5"></textarea></td>
	                </tr>
		            <tr>
		              <td align="left">CONTACTAR</td>
		              <td align="left"><textarea name="contactos" id="contactos" cols="35" rows="5"></textarea></td>
	                </tr>
		            <tr>
		              <td colspan=2><label for="archivo"></label>
	                  <input type="file" name="archivo" id="archivo"></td>
	                </tr>
		            <tr>
		              <td><input name="Enviar" type=submit value="Enviar"></td>
		              <td align="center"><input name="Enviar2" type=reset class="boton_reset" value="Limpiar"></td>
	                </tr>
	              </table>
                  
	            
          </form></td>
          
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
    Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote <br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es,<br>
    
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>	
      CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p>
</div>
</body>
</html>