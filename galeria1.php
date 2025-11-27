<?php require_once('conexion.php'); ?>
<!doctype html>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
<style type="text/css">
#GaleriaFotos
{
   border-spacing: 3px;
   width: 100%;
}
#GaleriaFotos .figure
{
   padding: 3px 3px 3px 3px;
   text-align: center;
   vertical-align: top;
}
#GaleriaFotos .figure img
{
   border-width: 0;
}
#wb_TITULO 
{
   background-color: transparent;
   border: 0px #000000 groove;
   padding: 0;
}
#wb_TITULO div
{
   text-align: center;
}
</style>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>
<link rel="stylesheet" href="admin/prettyPhoto/css/prettyPhoto.css" type="text/css">
<script type="text/javascript" src="admin/jquery-1.6.4.min.js"></script>

<script type="text/javascript" src="admin/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
$(document).ready(function()
{	
$("a[rel^='prettyPhoto_GaleriaFotos']").prettyPhoto({theme:'facebook'});
});
</script>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
<script src="js/direccion.js" type="text/javascript"></script>    
    

<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}
.FO {

	
	width:100%;
	height:35px;
	color: #FFF;
	font-weight: bold;
	text-align: center;
	font-size: 25px;
	list-style-type: none;
	
	
	
	

	background:-moz-linear-gradient(top,#06C 0%,#09C 100%);
	background: -webkit-gradient(linear, left top, left bottom,from(#06C), to(#09C));

filter: progid:DXImageTransform.Microsoft.gradient(GradientType=100%,StartColorStr='#2D75BD', EndColorStr='#7891E4');
	
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
        <li class="subme"onClick="direccion('galeria.php')" id="active1">GALERIA</li>
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
<BR>
<div class="FO" ><center> GALERIA DE FOTOS</center></div>
		<section>
        <center>
	      <div id="wb_GaleriaFotos" style="position:relative; 
              border:auto; width:100%;  z-index:0; padding:0; 
              padding-left:15px; padding-top:25px; padding-bottom:20px;">
<?php 
$inte  = 0;
$t=0;
$num=0;
$aux = 4;

//$entrada = 8;
$link=conectarse();
$sql=mysql_query("select * from imagen",$link);
$entrada=mysql_num_rows($sql);
echo "<table cellpadding='5'>";
  
	if($inte==-1)
		echo "error";
	else
	{
		while($inte<=$entrada)
		{	
			
			echo "<tr>";
			for($nu=0; $nu<$aux; $nu++)	
			{?>
			<td height="160" class="figure" style="width:220px;height:160px; ">
            <?php
                $fila=mysql_fetch_array($sql);
				?><div style="background:#000000;">
<a  id="a_galeria"href="admin/galeria/<?php echo $fila['archivo']; ?>" 
                    rel="prettyPhoto_GaleriaFotos[GaleriaFotos]"><img  alt="
					<?Php echo $fila['descripcion']; ?>" src="admin/galeria/
					<?php echo $fila['archivo']; ?>"   
                    style="width:214px;height:150px;  color: #000000;
                    "  /></a></div>
<div  id="titulo_ima"><?php echo $fila['titulo'];?></div>
			<?php echo "</td>";
							
			}
			echo "</tr>";	
			$inte=$inte+4;
			$t = $entrada-$inte;
				if($t<4)
					{	
						$aux=$t;
					}
				else
					$aux = 4;	
		}
	}
echo "</table>";
?>
    
</div>	 
	</center>  
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