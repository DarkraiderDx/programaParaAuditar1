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
  
	    

  </div></div>
  <div id="column-left1">
  <div id="menu_lateral">

	<ul class="menu">
		<li class="item1"><a href='quienes_somos.php'>Quienes Somos</a>
		 <li class="item2"><a href='vision_mision.php'>Vision Mision</a></li>
         <li class="item5"><a href='valores.php'>Nuestros Valores</a></li>
		<li class="item3"><a href='donde_trabajamos.php'>Donde trabajamos</a></li>
		<li class="item4"><a href='que_hacemos.php' class="active">Que Hacemos</a></li>
        <li class="item5"><a href='estrategias.php'>Lineas de Accion</a></li>
		
	</ul>

</div>
  </div><!--fin lef-->

  
	<div id="central2">
<center> <div>
    <p class="titulo_not" style="width:87%; text-align:left;"><strong>Que hacemos</strong></p>            
<p class="donde1" ><strong>Educación</strong></p>
            
<p class=" alert" style="width:84%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;  " >La educación es crucial para el desarrollo de las comunidades y una de las herramientas más poderosas para romper el círculo de la pobreza. </p>
            
<p class="donde1"><strong>Salud</strong> </p>
            <p class=" alert" style="width:84%;  color:#000000; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; color:#333; line-height:20px;font-size:14px;">La pobreza no puede entenderse como sinónimo de muerte por falta de atención de los servicio de salud. Nuestra aspiración es incursionar en atención de salud oportuna, particularmente para la población infantil.</p>
            <p class="donde1"><strong>Agua y 
Saneamiento
</strong></p>

<p class=" alert" style="width:84%;  color:#000000; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; color:#333; line-height:20px;font-size:14px;">El estado plurinacional tiene entre sus prioridades la instalación de agua potable, por lo que nuestro trabajo específicamente entra en los temas de identificación y diagnóstico del consumo de agua en las comunidades, que permitan generar condiciones de incidencia política para su respectiva atención. </p>
<p class="donde1"><strong>Habitad</strong></p>
<p class=" alert" style="width:84%;  color:#000000; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; color:#333; line-height:20px;font-size:14px;">Las viviendas en las comunidades rurales de los municipios asociados en la Mancomunidad Gran Centro Potosí, son muy precarias (por decirlo elegantemente), razón suficiente para intervenir con acciones consensuadas en unos casos con la refacción y en otras con la reconstrucción, en base a elementos locales de gestión de manera que no se profundice la dependencia de la gestión pública (Municipio).</p>
<p class="donde1"><strong>Seguridad económica</strong></p>
<p class=" alert" style="width:84%;  color:#000000; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify;color:#333; line-height:20px; font-size:14px;">Entendida como el fortalecimiento de la producción agrícola, pecuaria y agroforestal, con la aplicación de conceptos transversales como: respeto a la madre tierra, medio ambiente, género, equidad, transparencia y sostenibilidad.  Entendida como procesos sostenidos de generación de empleo digno, mediante la creación y desarrollo de habilidades de hombres y mujeres en diferentes rubros como ser: industrial textil (confección de prendas de vestir), metal mecánica, carpintería, curtido de cuero y transformación de alimentos.</p>
    </div></center>

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
