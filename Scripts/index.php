<?php require_once('conexion.php'); ?>
<?php session_start();?>
<!doctype html>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>
<script src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script>
<script language="javascript" src="js/jquery.js" ></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}
#comentarios div .com #fomColor legend {
	font-family: "Agency FB";
	font-size: 24px;
}
#posiEmpre legend {
	font-family: "Agency FB";
	font-size: 24px;
}
#noti table tr td div {
	font-family: "Agency FB";
	font-size: 18px;
}
#apDiv1 {
	
	width:200px;
	height:472px;
	z-index:6;
	float:left;
	background:#006633;
	left: 619px;
	top: 400px;
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
        <li class="subme" onClick="direccion('index.php')" id="active1">INICIO</li>
        <li class="subme"onClick="direccion('quienes_somos.php')">QUIENES SOMOS</li>
        <li class="subme"onClick="direccion('proyectos.php')">PROYECTOS</li>
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS</li>
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
<div class="slider-holder">
			<div class="shell"><span class="slider-shadow"></span>
				<div class="slider flexslider">
				  <ul class="slides">
						<li >
							<img src="css/images/foto3.png" alt="" />
							<div class="slide-cnt">
								<h2>¿QUE ES CDE-I?</h2>
								<p><strong class="RESALTADO">Es una organización no lucrativa</strong>, dedicada a potenciar capacidades de gestión <span class="RESALTADO"><strong>económica, social, productiva e investigación para implementar procesos de desarrollo local</strong></span> integral en espacios comunales, municipales, regionales, departamentales y nacionales.</p>
								
							</div>
						</li>
						<li >
							<img src="css/images/foto1.png" alt="" />
							<div class="slide-cnt">
								<h2>CDE-I </h2>
								<p>busca la igualdad de oportunidades para todos, sin discriminación de género, raza, religión, creencia política, ocupación o habilidad física. Asimismo, se orienta a desarrollar las potencialidades de las personas para mejorar su calidad de vida. </p>
								
							</div>
						</li>
						<li >
							<img src="css/images/foto6.jpg" alt="" />
							<div class="slide-cnt">
								<h2>Donde Trabajamos</h2>
								<p>El CDE-I ha priorizado, su trabajo institucional en el Departamento de Potosí,  en los municipios que conforman la Mancomunidad Gran Centro Potosí, que agrupa a Municipios de: Potosí, Puna, Caiza “D”, Ckochas, Chaquí, Betanzos, Tacobamba, Yocalla, Tinguipaya, Belén de Urmiri, Tomave, Porco y Mojinete, Son municipios con altos índices de pobreza. </p>
								
							</div>
						</li >
						<li >
							<img src="css/images/foto4.jpg" alt="" />
							<div class="slide-cnt">
								<h2>Nuestro Equipo</h2>
								<p>Nuestro equipo reducido pero profundamente comprometido con el trabajo y con responsabilidad en el logro de los objetivos superando todo tipo de obstáculos para lograr nuestra visión, con la participación activa de nuestros socios para sostener el desarrollo de las comunidades. </p>
								
							</div>
						</li>
						<li >
							<img src="css/images/foto5.jpg" alt="" />
							<div class="slide-cnt">
								<h2>Nuestros Valores</h2>
								<p> El CDE-I desde su constitución ha construido una cultura institucional que pretende constituirla en vanguardia, en la promoción del desarrollo sostenible e integral, la cual está basada en los siguientes valores y competencias: Ética, Respeto, Transparencia, Compromiso, Equidad.</p>
								
							</div>
						</li>
					</ul>
				</div>
			</div>	
		</div>	
		<!-- end of slider-holder -->
 <div style="clear:both;"></div>
<div class="contenedor">
  <header>
	    <span class="resaltado">El CDE-I</span> 
        (Centro de Desarrollo y Promoción Económica Integral),<span class="resaltado"> 
        es una organización no lucrativa, dedicada a potenciar capacidades de gestión económica, social, 
        productiva e investigación</span> para implementar procesos de desarrollo local integral en espacios comunales, 
        municipales, regionales, departamentales y nacionales. 
</header>
<div style="width:1000px;">
  
  <div style="width:600px;height:500px;background:#009933; float:left; ">
   
  </div> <div id="apDiv1"></div>
</div>



<div id="piePagina">
      <p>DIRECCION: 
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p>
      
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
    </script>
</body>
</html>