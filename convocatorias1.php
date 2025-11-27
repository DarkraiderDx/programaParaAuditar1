<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif" />
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
 <script type="text/javascript"> 
  $(function(){
    $(".custom-input-file input:file").change(function(){
        $(this).parent().find(".archivo").html($(this).val());
    }).css('border-width',function(){
        if(navigator.appName == "Microsoft Internet Explorer")
            return 0;
    });
});
</script>
<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}
.comentario3 tr .f1 {
	font-weight: normal;
}
.comentario3 tr .f1 {
	color: #666666;
}
.comentario3 tr .f1 {
	color: #333333;
}
.comentario4 tr .f1 {
	font-weight: normal;
}
.comentario4 tr .f1 {
	font-weight: normal;
}
.comentario4 tr th {
	font-weight: normal;
}
.comentario4 tr th {
	font-weight: normal;
}
.comentario4 tr th {
	font-size: 13px;
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
        <li class="subme"onClick="direccion('personal.php')">PERSONAL</li> 
        <li class="subme"onClick="direccion('convocatorias.php')" id="active1">CONVOCATORIAS</li>  
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
	<div style="height:100%;">
              <?php
			  include('conexion.php');
$link=conectarse();
$n=0;
$n1=1;

$sql=mysql_query("select * from convocatorias",$link);

?>
           <div style="padding-left:50px; text-align:center; font-size:20px;"> Convocatorias</div>
            <table width="142%" border="1" bordercolor="#FFCC00;" align="center" cellpadding="0" cellspacing="0" class="comentario4"  >
                  <th width="27" align="center" class="titulo"><h3>Nº</h3></th>
                <th width="304" align="center" class="titulo"><h3>Convocatoria</h3></th>
                <th class="titulo" align="center"><h3>Fecha de publicacion</h3></th>
                <th align="center" class="titulo"><h3>Fecha Limite</h3></th>
                <th align="center" class="titulo"><h3> Archivo</h3></th>
                <th class="titulo" align="center"><h3>Enviar Curriculum Vitae</h3></th>
              </tr>
              <?php 
while($fila=mysql_fetch_array($sql)){
?>
                <tr>
                <?php if($n==0){?>
               <th height="49" valign="middle" class="f1"><?php echo $n1;?></th>
                <th align="left" valign="middle" class="f1"><?php echo $fila['convocatorias']; ?></th>
                <th width="74" align="left" valign="middle" class="f1"><?php echo $fila['fecha_inicial']; ?></th>
                <th width="64" align="left" valign="middle" class="f1"><?php echo $fila['fecha_final']; ?></th>
                <th width="50" align="left" valign="middle" class="f1"><?php echo '<a href="bajar_convocatoria.php?id='.$fila['id_convocatorias'].'">descargar</a>';?></th>
            
                <th width="244"valign="top=10px"    style="background:#DDDDDD;"align="center"><form action="index.php">
                <div><div class="custom-input-file" style="float:left; font-size: 10pt;"><input type="file" class="input-file" />
<H2 style="font-size:10px; color:#666666;">Examinar</H2>
    <div class="archivo">...</div>
</div>
                <div><input type="submit" class="convo" value="Enviar"></div></div></form></th>
              
              <?php $n=1; $n1++; }
              else if($n==1){?>
              <th width="17" height="49" align="center" style="background:#C4C4C4;"><?php echo $n1;?></th>
                <th width="17" align="center" valign="middle"style="background:#C4C4C4;" ><?php echo $fila['convocatorias']; ?></th>
                <th width="17" align="center" valign="middle"style="background:#C4C4C4;"><?php echo $fila['fecha_inicial']; ?></th>
                <th width="17" align="center" valign="middle"style="background:#C4C4C4;"><?php echo $fila['fecha_final']; ?></th>
                <th width="17" align="center" valign="middle"style="background:#C4C4C4;"><?php echo '<a href="bajar_convocatoria.php?id='.$fila['id_convocatorias'].'">descargar</a>';?></th>
            
                <th width="244" valign="top=10px"  align="center"style="background:#C4C4C4;" >
                <form action="index.php">
                <div><div class="custom-input-file" style="float:left; font-size: 10pt;"><input type="file" class="input-file" />
<H2 style="font-size:10px; color:#666666;">Examinar</H2>
    <div class="archivo">...</div>
</div>
                <div><input type="submit" class="convo" value="Enviar"></div></div></form></th>
              <?php $n=0; $n1++; }?>
              </tr>
              <?php
}
?>
            </table>
            <p>&nbsp;</p>
	</div>
	        

		  
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