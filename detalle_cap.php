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
        <li class="subme"onClick="direccion('quienes_somos.php')">QUIENES SOMOS<br><i class="icon1-question-sign"></i></li>
        <li class="subme"onClick="direccion('proyectos.php')">PROYECTOS<br><i class="icon1-briefcase "></i></li>
        <li class="subme"onClick="direccion('servicios.php')"id="active1">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
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
		<li class="item1" style="text-align:left;"><a href="#">Servicios </a></li>
			
		
		<li class="item2" style="text-align:left;"><a href="#">Comercialización</a>
			<ul>
				<li class="subitem1" ><a href="servicios.php">Venta</a></li>
				<li class="subitem2"><a href="servicios_compra.php">Compra </a></li>
				
			</ul>
		</li>
		<li class="item3" style="text-align:left;"><a href="#">Eventos Formativos</a>
			<ul>

				<li class="subitem3"><a href="capacitacion.php">Capacitacion</a></li>
			</ul>
		</li>
		
		
	</ul>

</div>
  </div><!--fin lef-->

  
	<div id="central2">
     <?php
			  
$link=conectarse();
$id=$_GET['id'];


$sql=mysql_query("select * from eventos where id_evento=$id",$link);
$fila=mysql_fetch_assoc($sql);
?>
            
            <center><div><table width="90%" height="176" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
              <tr>
                <td height="32" colspan="3"  align="left" style=" border:1px solid #F3E681;  font-size:15px;  padding-left:8px; color:#000; height:40px;"> TEMA: <?php echo $fila['evento']; ?><img src="images/l.png" width="58" height="54" align="right"></td>
              </tr>
              <tr>
                <td  align="left"width="38%" style="padding-left:5px; font-size:14px; color:#333333;">Tiempo de Duración</td>
                <td align="left" width="31%" style="padding-left:5px;"><div style="width:80%; font-size:14px; color:#6666666;"><?php echo $fila['tiempo_duracion']; ?></div></td>
                <td align="left" width="31%" style="padding-left:5px;"><span style="width:80%; font-size:14px; color:#6666666;"><span style="font-size:12px;">Del_ <?php echo $fila['fecha_ini']; ?>_al_<?php echo $fila['fecha_fin']; ?></span></span></td>
              </tr>
              <tr>
                <td  align="left" style="padding-left:5px; font-size:14px; color:#333333;">Lugar</td>
                <td colspan="2"  align="left" style="padding-left:5px; font-size:14px; color:#6666666;"><?php echo $fila['lugar']; ?></td>
              </tr>
              <tr>
                <td  align="left" style="padding-left:5px; font-size:14px; color:#333333;">Expositor:</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td  align="left"colspan="3" style="padding-left:5px;"><div class="proy_td3"><?php echo $fila['expositor']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" style="padding-left:5px; font-size:14px; color:#333333;">Contactos:</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td  align="left"colspan="3" style="padding-left:5px;"><div class="proy_td3"><?php echo $fila['contactos']; ?></div></td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
            <tr>
            <td  align="left"style="padding-left:5px;">
            <?php echo '<a href="bajar_evento.php?id='.$fila['id_evento'].'"><button  class="btn"><i class="icon-download-alt "></i>Descargar Archivo</button></a>';?>
            </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            
            </table></div></center>
            
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
