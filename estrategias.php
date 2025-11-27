<?php require_once('conexion.php'); ?>
<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script>
<script language="javascript" src="js/jquery.js" ></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script language="javascript">
function VerDatos()
	{
		if((document.form.nom.value=="") || (document.form.email.value=="")||(document.form.come.value==""))
		{
			alert("Tiene que escribir en todos los campos...!!!");
		}
		
		else
			document.form.submit();
	}
</script>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#open').click(function(){
		$('#popup').fadeIn('slow');
		//$('body').css('opacity', '0.5');
		return false;
	});
	
	$('#close').click(function(){
		$('#popup').fadeOut('slow');
		//$('body').css('opacity', '1');
		return false;
	});
	
	$('#open2').click(function(){
		$('#popup2').fadeIn('slow');
		//$('body').css('opacity', '0.5');
		return false;
	});
	
	$('#close2').click(function(){
		$('#popup2').fadeOut('slow');
		//$('body').css('opacity', '1');
		return false;
	});
});
</script>
</head>
<body>

<div id="content">
	<div id="header"><div class="contenedorMenu">
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

  <div id="menu">
    <nav>
      <ul class="men">
        <li class="subme "onClick="direccion('index.php')" >INICIO<br><i class="icon1-home"></i></li>
        <li class="subme"onClick="direccion('quienes_somos.php')"id="active1">QUIENES SOMOS<br><i class="icon1-question-sign"></i></li>
        <li class="subme"onClick="direccion('proyectos.php')">PROYECTOS<br><i class="icon1-briefcase "></i></li>
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
        <li class="subme"onClick="direccion('noticias.php')">NOTICIAS<br><i class="icon1-list-alt"></i></li>
        <li class="subme"onClick="direccion('foro/index.php')">FORO<br><i class="icon1-volume-up"></i></li>
        <li class="subme"onClick="direccion('galeria.php')">GALERIA<br><i class="icon1-picture"></i></li>
        <li class="subme"onClick="direccion('contactos.php')">CONTACTENOS<br><i class="icon1-envelope"></i></li>
        <li class="subme"onClick="direccion('personal.php')">PERSONAL<br><i class="icon1-user"></i></li> 
         <li class="subme"onClick="direccion('convocatorias.php')">CONVOCATORIAS<br><i class="icon1-file"></i></li> 
      
      </ul>
    </nav>
    <div style="clear:both;"></div>
    <div class="header">
    <span class="resaltado">El CDE-I</span> 
        (Centro de Desarrollo y Promoción Económica Integral),<span class="resaltado"> 
        es una organización no lucrativa, dedicada a potenciar capacidades de gestión económica, social, 
        productiva e investigación</span> para implementar procesos de desarrollo local integral en espacios comunales, 
        municipales, regionales, departamentales y nacionales. 
    </div>
  </div>
  
	    

  </div></div><div id="column-left1">
 <div id="menu_lateral">

	<ul class="menu">
		<li class="item1"><a href='quienes_somos.php'>Quienes Somos</a>
		 <li class="item2"><a href='vision_mision.php'>Vision Mision</a></li>
         <li class="item5"><a href='valores.php'>Nuestros Valores</a></li>
		<li class="item3"><a href='donde_trabajamos.php'>Donde trabajamos</a></li>
		<li class="item4"><a href='que_hacemos.php'>Que Hacemos</a></li>
        <li class="item5"><a href='estrategias.php' class="active">Lineas de Accion</a></li>
		
	</ul>

</div>
  </div><!--fin lef-->

  
	<div id="central2">
   <table width="100%" border="0" cellspacing="7" cellpadding="0">
  <tr>
    <td class="donde_stra"><strong>LINEAS  DE ACCION</strong></td>
    <td>&nbsp;</td>
    <td class="donde_stra"><strong>OBJETIVO ESTRATÉGICO</strong></td>
    </tr>
  <tr>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;  ">Fomento y desarrollo de programas y  proyectos.</td>
    <td align="center"><img src="css/images/flecha.png" width="72" height="52"></td>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;  ">Potenciar capacidades de gestión económica, social y  productiva sostenible en el ámbito local, municipal, departamental y nacional.</td>
  </tr>
  <tr>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;  ">Desarrollo y fortalecimiento de capacidades para la  gestión técnica, legal, administrativa municipal y regional.</td>
    <td align="center"><img src="css/images/flecha.png" width="72" height="52"></td>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;  ">Fortalecer y apoyar a la formación de capacidades de  la población rural y urbana, para la gestión eficiente de la gestión municipal  y departamental.</td>
  </tr>
  <tr>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;  ">Fomento y ejecución de programas y proyectos para el  desarrollo, manejo y utilización ordenada de los recursos naturales.</td>
    <td align="center"><img src="css/images/flecha.png" width="72" height="52"></td>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;  ">Fortalecer y apoyar la promoción y ejecución de  programas y proyectos que permitan la gestión eficiente de los recursos  naturales para beneficio de la sociedad en su conjunto.</td>
  </tr>
  <tr>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;  ">Apoyo y fortalecimiento de actividades  económicas </td>
    <td align="center"><img src="css/images/flecha.png" width="72" height="52"></td>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;  ">Desarrollar y emprender actividades productivas y  económicas con familias asociadas y pequeñas empresas</td>
  </tr>
  <tr>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;   ">Fomento y desarrollo de planes y programas de  educación formal y alternativa, sustentados en la investigación aplicada para  la formulación de políticas y estrategias sectoriales.</td>
    <td align="center"><img src="css/images/flecha.png" width="72" height="52"></td>
    <td class="alert" style="width:40%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;   ">Promover y ejecutar acciones programas de  fortalecimiento y mejora de la educación formal y alternativa, asimismo la  investigación para el desarrollo de capacidades, formación de conocimiento y  formulación de estrategias y/o propuestas de políticas sectoriales locales,  municipales y nacionales, valorando el saber y cultura de la sociedad.</td>
  </tr>
   </table>

  
    </div><!--fin central-->
    
	
	<div id="footer"><p>DIRECCION:
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p></div>
</div>
<div id="popup" style="display: none;">
    <div class="content-popup">
        <div class="close"><a href="#" id="close"><img src="images/close.png"></a></div>
        <div>Contenido VENTANA 1</div>
    </div>
</div>
<div id="popup2" style="display: none;">
    <div class="content-popup">
        <div class="close"><a href="#" id="close2"><img src="images/close.png"></a></div>
        <div>Contenido VENTANA 2</div>
    </div>
</div>
</body>
</html>
