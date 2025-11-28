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
<style type="text/css">
#content #central2 div .tabla_servicios1 tr td p {
	color: #000000;
	font-size:11px;
}
</style>
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
     <h3 class="h1 ">Servicio de Venta</h3>
            <?php 
		  $link=conectarse();
		  $res=mysqli_query($link,"select * from servicios where tipo='venta' order by id_servicio DESC");
		  while($fila=mysqli_fetch_array($res))
		  {

		  ?>
           <div style="float:left;  width:420px; ">
             <table  border="0" cellpadding="0" cellspacing="0" class="tabla_servicios1">
                <tr valign="middle">
                  <td width="44%" rowspan="5" align="left"  style=" boder-radius:5px; "><div><img  src="admin/servicios/<?php echo $fila['imagen']; ?>"   style="border:6px solid #FFFFFF;box-shadow: 0px 0px 2px; border-radius:2px; " width="150" height="120"/></div></td>
                  <td  height="30" colspan="2" align="center" valign="middle" class="tdventa"> <span class="h3"><?php echo $fila['tipo']; ?></span></td>
                </tr>
                <tr>
                 
                  <td height="33" colspan="2" align="left"  style="padding-left:5px; font-size: 11px; " ><p><span style="font-size:11px;color:#666666; margin-left:5px;" >Publicado el : </span><?php echo $fila['fecha']; ?></p>
                    <p><span style="font-size:11px;color:#666666; margin-left:5px;" >Vigente hasta : </span><?php echo $fila['fecha_fin']; ?><br>
                      <span style="font-size:11px;color:#666666; margin-left:5px;">Producto : </span><?php echo $fila['producto']; ?><span style="padding-left:5px;"><br>
                    <span  style="font-size:11px;color:#666666; margin-left:5px;">Cantidad : </span><?php echo $fila['cantidad']; ?></span><span style="font-size: 11px"></span></p></td>
                </tr>
                <tr>
                 
                  <td height="42" colspan="2"  style="padding-left:7px;"><P style="border:1px solid #FFCC00; border-radius:5px; margin:3px; color:#666666;
	font-size:11px;width:200px; height:70px; padding:5px; word-wrap: break-word;"><?php echo $fila['detalle']; ?></P></td>
                </tr>
                <tr>
                  <td height="30" colspan="2"  style="padding-left:5px; float:right; "><form  method="post" action="contactos.php"><input name="button" type="submit" class="btn btn-info  " value="Contactarse">
                    <input type="hidden" name="tipo_contacto" id="hiddenField" value="<?php echo $fila['tipo'].'_'.'servicios';?>">
                  </form></td>
                  </tr>
            </table>
      </div> 
      <?php } ?>
            
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
