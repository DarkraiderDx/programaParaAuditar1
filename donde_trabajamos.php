<?php require_once('conexion.php'); ?>
<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif">
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta charset="utf-8">

<link rel = "stylesheet"  href="css/estilo.css" type="text/css">
<link rel = "stylesheet"  href="css/ddimgtooltip.css" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet">

	
	<script type='text/javascript' src="js/menu_jquery.js"></script>

<script src="js/jquery.js" type="text/javascript" ></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<script src="js/ddimgtooltip.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    
<!--<script src="js/ifomap.js" type="text/javascript"></script>    -->

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
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player"></a></p>
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
        <li class="subme "onclick="direccion('index.php')" >INICIO<br><i class="icon1-home"></i></li>
        <li class="subme"onclick="direccion('quienes_somos.php')"id="active1">QUIENES SOMOS<br><i class="icon1-question-sign"></i></li>
        <li class="subme"onclick="direccion('proyectos.php')">PROYECTOS<br><i class="icon1-briefcase "></i></li>
        <li class="subme"onclick="direccion('servicios.php')">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
        <li class="subme"onclick="direccion('noticias.php')">NOTICIAS<br><i class="icon1-list-alt"></i></li>
        <li class="subme"onclick="direccion('foro/index.php')">FORO<br><i class="icon1-volume-up"></i></li>
        <li class="subme"onclick="direccion('galeria.php')">GALERIA<br><i class="icon1-picture"></i></li>
        <li class="subme"onclick="direccion('contactos.php')">CONTACTENOS<br><i class="icon1-envelope"></i></li>
        <li class="subme"onclick="direccion('personal.php')">PERSONAL<br><i class="icon1-user"></i></li> 
         <li class="subme"onclick="direccion('convocatorias.php')">CONVOCATORIAS<br><i class="icon1-file"></i></li> 
      
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
		<li class="item1"><a href='quienes_somos.php'>Quienes Somos</a>	    </li>
		<li class="item2"><a href='vision_mision.php'>Vision Mision</a></li>
         <li class="item5"><a href='valores.php'>Nuestros Valores</a></li>
		<li class="item3"><a href='donde_trabajamos.php'  class="active">Donde trabajamos</a></li>
		<li class="item4"><a href='que_hacemos.php'>Que Hacemos</a></li>
        <li class="item5"><a href='estrategias.php'>Lineas de Accion</a></li>
		
	</ul>

</div>
  </div><!--fin lef-->

  
  <div id="central2">
    <!-- slider-holder -->
<center>
<div>
 <p class="titulo_not" style="width:87%; text-align:left;"><strong>Donde Trabajamos</strong></p>
 <p><img src="admin/img/potosi.png" width="700" height="1078" border="0" usemap="#Map">
   <map name="Map">
     <area shape="poly" coords="583,476,572,458,573,444,573,433,565,429,568,420,579,413,588,405,592,403,604,409,612,415,621,416,626,409,635,400,644,393,644,408,650,416,657,431,663,441,660,450,654,460,648,474,642,480,635,476,631,469,621,463,613,455,607,459,606,471,602,484,590,487,584,482"  style="cursor:pointer;" rel="imgtip[1]">
     <area shape="poly" coords="644,393,638,378,619,372,598,376,588,370,572,362,551,350,541,359,534,374,530,386,523,394,525,400,537,406,545,412,550,416,559,419,567,423,574,417,586,410,591,400,600,405,609,410,616,413,623,416,629,407,643,398" style="cursor:pointer;" rel="imgtip[6]">
     <area shape="poly" coords="499,451,485,440,476,431,463,427,472,418,487,412,485,399,480,391,483,384,476,384,473,383,480,371,485,373,491,363,506,359,510,368,520,364,526,381,523,391,516,399,511,409,508,414,513,422,510,435,505,449" style="cursor:pointer;" rel="imgtip[7]">
     <area shape="poly" coords="525,433,514,433,515,425,509,417,515,405,522,394,528,402,535,407,543,411,555,417,549,422,547,432,546,438,540,431,535,433"  style="cursor:pointer;" rel="imgtip[8]">
     <area shape="poly" coords="538,492,538,476,544,470,542,461,538,457,533,461,527,462,527,469,522,462,517,461,512,457,511,447,508,435,516,433,529,436,538,435,545,435,549,437,551,430,552,422,561,421,565,424,569,432,571,448,575,461,579,473,571,483,571,505,572,514,564,521,556,527,559,515,561,505,549,491,543,490,537,484"  style="cursor:pointer;" rel="imgtip[9]">
     <area shape="poly" coords="539,491,535,504,522,506,519,518,520,528,505,516,498,504,484,500,476,499,474,493,471,482,474,473,482,467,490,467,492,450,500,450,509,441,510,457,518,461,526,466,529,463,541,460,543,477,537,487"  style="cursor:pointer;" rel="imgtip[10]">
     <area shape="poly" coords="469,480,450,469,443,467,431,468,421,469,420,449,420,436,426,430,431,422,451,427,465,429,480,437,487,449,490,457,486,463"  style="cursor:pointer;" rel="imgtip[11]">
     <area shape="poly" coords="465,427,447,426,451,405,454,394,452,379,445,371,449,363,462,357,475,361,478,370,479,378,482,389,483,397,487,410,482,414,468,420"  style="cursor:pointer;" rel="imgtip[12]">
     <area shape="poly" coords="443,364,432,351,436,340,448,324,453,320,461,314,476,314,488,317,496,322,503,332,503,341,504,356,496,363,487,369,481,370,475,361,465,359,455,361" style="cursor:pointer;" rel="imgtip[13]">
     <area shape="poly" coords="424,431,423,420,404,418,396,418,390,400,396,385,407,376,412,363,420,357,430,351,438,362,443,367,446,375,452,386,453,403,450,414,448,425,438,422" style="cursor:pointer;" rel="imgtip[14]">
     <area shape="poly" coords="473,492,459,539,465,552,466,568,449,574,439,566,432,566,420,574,421,589,412,593,390,590,373,586,354,588,346,584,344,575,341,565,343,553,341,540,350,540,353,533,348,517,343,532,329,534,328,523,338,513,341,504,308,491,309,477,317,463,305,447,324,432,336,427,357,420,374,418,392,418,405,418,421,422,425,433,420,444,421,461,424,468,434,466,453,470,467,482"  style="cursor:pointer;" rel="imgtip[15]">
     <area shape="poly" coords="411,825,417,816,415,790,405,792,392,783,386,778,381,789,376,803,391,811,400,821"  style="cursor:pointer;" rel="imgtip[16]">
   </map>
 </p>
 
            <p>&nbsp;</p>
            <p  class=" alert" style="width:84%; color:#333; line-height:20px; text-align:left; font-family:Verdana, Arial, Helvetica, sans-serif;
	text-align:justify; font-size:14px;"> El <strong>CDE-I</strong> ha priorizado, su trabajo institucional  en el Departamento de Potosí,  en los  municipios que conforman la Mancomunidad Gran Centro Potosí, que agrupa a  Municipios de: Potosí, Puna, Caiza &ldquo;D&rdquo;, Ckochas, Chaquí, Betanzos, Tacobamba, Yocalla,  Tinguipaya, Belén de Urmiri, Tomave, Porco y Mojinete, Son municipios con altos  índices de pobreza, hasta se podría sostener   que viven en una especie de pobreza colectiva, aunque en  un ambiente injusto y desmedido poder  económico de unos cuantos dedicados a actividad minera, altamente contaminantes  para la salud y la producción de alimentos de origen agrícola.<br>
            Las  intervenciones en los espacios municipales y comunitarios se basa en una  relación horizontal, expresada en convenios que garanticen una convivencia  armónica, con profundo respeto a nuestras diferencias, generando espacios de  confianza y la construcción de consenso para gestionar acciones orientadas a reducir  la pobreza y desigualdades propias de las comunidades, en consecuencia de  nuestra visión, misión en un marco de un profundo compromiso con las  necesidades de las familias de productores y productoras en las comunidades en  los municipios y el estado plurinacional.</p>
</div>
</center>
  </div><!--fin central-->
    
	
	<div id="footer"><p>DIRECCION:
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<br>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p></div>
</div>

</div>
</body>
</html>
