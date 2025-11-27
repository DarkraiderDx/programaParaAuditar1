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
          <td width="260" align="center" valign="top" bgcolor="#FFFFFF" class="fondomenu2"><table width="84%" border="0" cellspacing="0" cellpadding="0">
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
          <td width="666" align="center" valign="top"><form action="actualizado_personal.php"
            method="post" enctype="multipart/form-data" id="fomColor">
		       <?php $link=conectarse();
			$id=$_GET['id'];
			$sql="select * from administracion where id_administracion='$id'";
			$resultado=mysql_query($sql,$link);
			$fil=mysql_fetch_array($resultado);
			?>
            <legend>
            <h2 style="color:#333333;">Actualizar Personal de Administracion</h2></legend>
		          <table class="comentario1">

		            <tr>
		              <td align="left">&nbsp;</td>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td align="left">NOMBRE
	                  <input type="hidden" name="id" value="<?php echo $id;?>"/></td>
		              <td><input name="nom" type="text" required id="titu" value="<?php echo $fil['nombre']; ?>" size="30" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td width="102" align="left">APELLIDO</td>
		              <td width="201"><label for="select">
		                <input name="apel" type="text" required id="titu3" size="30" maxlength="34" value="<?php echo $fil['apellido']; ?>">
		              </label></td>
	                </tr>
		            <tr>
		              <td align="left">EMAIL</td>
		              <td align="left"><input name="correo" type="email" required id="correo" size="30" maxlength="34" value="<?php echo $fil['correo']; ?>"></td>
	                </tr>
		            <tr>
		              <td align="left">TELEFONO</td>
		              <td align="left"><input name="telefono" type="text" required id="titu6" size="30" maxlength="34" value="<?php echo $fil['telefono']; ?>"></td>
	                </tr>
		            <tr>
		              <td align="left">SKIPE</td>
		              <td align="left"><input name="skipe" type="text" required id="titu4" size="30" maxlength="34" value="<?php echo $fil['telefono']; ?>"></td>
	                </tr>
		            <tr>
		              <td align="left">CARGO</td>
		              <td align="left"><input name="cargo" type="text" required id="titu2" size="30" maxlength="34" value="<?php echo $fil['cargo']; ?>"></td>
	                </tr>
		            <tr>
		              <td align="left">CLAVE</td>
		              <td align="left"><input name="clave" type="text" required id="titu5" size="30" maxlength="34" value="<?php echo $fil['clave']; ?>"></td>
	                </tr>
		            
		            <tr>
		              <td colspan=2><label for="img"></label>
	                  <input type="file" name="img" id="img"></td>
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
    Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p>
</div>
</body>
</html>