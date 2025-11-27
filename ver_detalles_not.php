<?php require_once('conexion.php');
$link=conectarse(); ?>
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
         <!-- <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
        </div>
        [if !IE]>-->
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
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
        <li class="subme"onClick="direccion('noticias.php')"id="active1">NOTICIAS<br><i class="icon1-list-alt"></i></li>
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
  
	    

  </div></div><div id="column-left1" style="width:250px;">
 
<?php $sql1=mysql_query("select * from noticias order by id_noticias desc ",$link);?>
 
  <h4 style="color:#ffffff; margin-left:18px; width:225px; margin-bottom:5px; background:#B1BC2C; text-align:center; height:35px; padding-top:5px; font-size: 24px; text-shadow:0px 0px 4px #333333;">Noticias</h4>
									<p><?php 
$link=conectarse();
 $sql1=mysql_query("select * from noticias order by id_noticias desc ",$link);?>
 
  <div style="margin-left:8px;">
        <!-- insert your sidebar items here -->
       <marquee direction="up" scrollamount="2" style="background-color: #FBFBFB0; width:90%; height:300px;border:2px solid #cccccc;padding:3px" ><br>
        <?php while($fila1=mysql_fetch_array($sql1))
		{?>
            
		<div style=" background:#F4F4F4; margin-bottom:15px; border-radius:4px; padding-bottom:5px; padding-top:10px; padding-left:8px; box-shadow: 0px 0px 4px #666666;  ">
		<div style="float:left; "><img src="admin/noticias/<?php echo $fila1['imagen']; ?>" width="50" height="50"  / style="float:left; border:4px solid #FFFFFF;"></div>
		<p style="color:#333333; font-size:12px;"><?php echo $fila1['fecha'];?><br><?php echo $fila1['titulo']; ?></p>
        <p style="font-size:14px; text-align:right; padding-right:4px;"><a style=" color:#ffffff;text-decoration:none;" href="ver_detalles_not.php?id=<?php echo $fila1['id_noticias']; ?>"><button class="btn btn-small">Ver mas..</button></a></p>
</div>
<?php } ?>
</marquee>

        </div></p>
                                
							
                </div>
			
  </div><!--fin lef-->

  
	<div id="central3" style="width:70%">
    <?php $link=conectarse();
		  $id=$_GET['id'];
		   $sql="select * from noticias where id_noticias='$id'";
		   $resultado=mysql_query($sql,$link);
		   while($fila=mysql_fetch_array($resultado))
		   {
		   
		    ?>
     <div class="titulo_not" ><?php echo $fila['titulo']; ?>
          <div align="right" style="font-size:12px;"><?php echo $fila['fecha']; ?></div>
		  </div>
          <div style="text-align:justify;"><img src="admin/noticias/<?php echo $fila['imagen']; ?>"/class="foto_img"><?php echo $fila['texto']; ?></div>
  <?php }mysql_free_result($resultado); ?>
  </div><!--fin central-->
    
	
	<div id="footer"><p>DIRECCION:
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p></div>
</div>

</body>
</html>
