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
    
 <script language="javascript">
 function seleccionar_todo(){
   for (i=0;i<document.form.elements.length;i++)
      if(document.form.elements[i].type == "checkbox")
         document.form.elements[i].checked=1
} 
</script>
<script language="javascript">
function deseleccionar_todo(){
   for (i=0;i<document.form.elements.length;i++)
      if(document.form.elements[i].type == "checkbox")
         document.form.elements[i].checked=0
} 
</script>  
<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}
#fomColor .comentario2 .tr th {
	font-weight: bold;
}
#fomColor .comentario2 .tr th {
	font-weight: normal;
}
#fomColor .comentario2 .tr th {
	font-size: 12px;
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
                <li class="subme"onClick="direccion('foro.php')id="active1"">FORO</li>
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
              <td>

<div id="menu_lateral">
                
                <ul class="menu">
					
		<li class="item2"><a>Foro</a>
			<ul>

				<li class="subitem2"><a href="borrar_fro.php">Eliminar Foro </a></li>

				
			</ul>
		</li>
		
		
	</ul>

</div>
</td>
            </tr>
          </table></td>
          <td width="666" align="center" valign="top"><form action="eliminar_foro.php" name="form"
            method="post" enctype="multipart/form-data" id="fomColor">
		       
            <legend>
            <h2 style="color:#333333;">Eliminar Foro</h2></legend>
		          <p style="color:#118225; font-size:15px;">
			<?php if(!isset($_GET['men'])){
				
			}
			else{
			$men=$_GET['men'];
			echo $men;
			}
			$link=conectarse();
			$query_r_listatemas = mysql_query("SELECT  foromensajes.id_msj_foro,
									   `foromensajes`.tit_msj_foro,
									   `foromensajes`.cont_msj_foro,
									   `foromensajes`.id_usr_msj_foro,
									   `foromensajes`.idmsj_resp_msj_foro,
									   `foromensajes`.fecha_hora_msj_foro,
									   `foromensajes`.nombre_ar,
									   `usuarios`.correo,`usuarios`.nombre   FROM   
									   `foromensajes`   INNER JOIN `usuarios` ON
									    (`foromensajes`.id_usr_msj_foro = `usuarios`.id_usuario) WHERE   
										`foromensajes`.idmsj_resp_msj_foro = '0'  order by
										`foromensajes`.fecha_hora_msj_foro DESC",$link);



//$listatemas = mysql_fetch_assoc($query_r_listatemas);
			//$sql=mysql_query("select * from  foromensajes",$link);
			?></p>
            <table width="522" border="1" cellpadding="0" cellspacing="0" class="comentario2" >
              <tr class="tr">
                <th width="39" align="left">&nbsp;</th>
                <th width="253" align="left"><h3 class="h3">Tema</h3></th>
                <th width="260" align="left"><span class="h3">Contenido</span></th>
                <th width="124" align="left"><span class="h3">Fecha </span></th>
              </tr>
              <?php 
while($listatemas = mysql_fetch_assoc($query_r_listatemas)){
//$fila=mysql_fetch_array($sql)){
?>
              <tr class="tr">
                <th width="39" align="left"><input type="checkbox" name="casilla[]" value="<?php echo $listatemas ['id_msj_foro']; ?>"></th>
                <th width="253" height="25" align="left"><div style="width:250px;  word-wrap: break-word;"><a><?php echo $listatemas ['tit_msj_foro'];?></a></div></th>
                <th width="260" align="left"><div style="width:250px;  word-wrap: break-word;"><?php echo $listatemas ['cont_msj_foro'];?></div></th>
                <th width="124" align="left"><?php echo $listatemas ['fecha_hora_msj_foro']; ?></th>
              </tr>
              <tr class="tr">
                <th height="25" colspan="4" align="left">&nbsp;</th>
              </tr>
              <?php
}
?>
            </table>
            <input type="submit" value="Eliminar"  />
           <a style="color:#396A93; text-align: left;" href="javascript:seleccionar_todo()">Marcar todos</a> |
            <a style="color:#396A93;" href="javascript:deseleccionar_todo()">Desmarcar Todos</a>
          </form>
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