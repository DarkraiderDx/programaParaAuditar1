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
        <li class="subme"onClick="direccion('proyectos.php')"id="active1">PROYECTOS<br><i class="icon1-briefcase "></i></li>
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
		<li class="item1"><a href="proyectos.php">Proyectos</a></li>
			
		
		<li class="item2"><a href="proyectos.php">Proyectos en Ejecucion</a>
			
		</li>
		<li class="item3"><a href="proyectos_concluidos.php" class="active">Proyectos Concluidos</a>
			
		</li>
		<li class="item3"><a href="proyectos_propuestos.php">Proyectos Programados</a>
			
		</li>
		
	</ul>

</div>
  </div><!--fin lef-->

  
	<div id="central2">
    <h3 class="h1 ">Proyectos Concluidos</h3>
            <p>
              <?php
			   $link=conectarse();
			  	$n=0;
				$n1=1;
			   $query=mysql_query("select * from proyectos where tipo='concluido' order by id_proyecto desc",$link);
			   
            while($fila=mysql_fetch_array($query))
			{
			?>
            <?php if($n==0){?>
           <table width="493" border="0" cellpadding="0" cellspacing="2" class="tabla_proyectos">
             <tr>
               <td    align="left"   style="background:#DA542E; padding-left:7px; color:#FFFFFF; text-shadow: 1px 0px 0px white, 0px 0px 0px grey;"   height="35px;">Nombre del Proyecto</td>
               <td   align="left" style="background:#DA542E; padding-left:7px; color:#FFFFFF; text-shadow: 1px 0px 0px white, 0px 0px 0px grey;" height="35px;" ><div class="proy_td1" style="
                font-size:16px; color:#FFFFFF;"><?php echo $fila['nombre']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.5);"><div class="proy_td2">Departamento</div></td>
               <td ><div class="proy_td1"><?php echo $fila['departamento']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.5);"><div class="proy_td2">Municipio</div></td>
               <td ><div class="proy_td1"><?php echo $fila['municipio']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.5);"><div class="proy_td2">Tiempo en Ejecucion</div></td>
               <td  ><div class="proy_td1"><?php echo $fila['tiempo_ejc']; ?></div></td>
             </tr>
             <tr>
               <td align="left" valign="middle"  style="background:rgba(204,204,0,0.5);"><div class="proy_td2">Nº de Beneficiaros</div></td>
               <td  ><div class="proy_td1"><?php echo $fila['beneficiario']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.5);" ><div class="proy_td2">Objetivo General</div></td>
               <td ><div class="proy_td1"><?php echo $fila['ob_general']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.5);"><div class="proy_td2">Objetivos Especificos</div></td>
               <td  ><div class="proy_td1"><?php echo $fila['ob_especificos']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.5);"><div class="proy_td2">Resultados Esperados</div></td>
               <td ><div class="proy_td1"><?php echo $fila['resultados']; ?></div></td>
             </tr>
             
           </table>
            <?php $n=1; $n1++; }
			else if($n==1){?>

				<table width="493" cellpadding="0" cellspacing="2" class="tabla_proyectos">
              <tr>
                <td    align="left"   style="background:#DA542E; padding-left:7px; color:#FFFFFF; text-shadow: 1px 0px 0px white, 0px 0px 0px grey;"  height="35px;">Nombre del Proyecto</td>
                <td   align="left" style="background:#DA542E; padding-left:7px; color:#FFFFFF; text-shadow: 1px 0px 0px white, 0px 0px 0px grey;"  height="35px;" ><div class="proy_td1" style="
                font-size:16px; color:#FFFFFF;"><?php echo $fila['nombre']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.9);"><div class="proy_td2">Departamento</div></td>
                <td    ><div class="proy_td1"><?php echo $fila['departamento']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.9);"><div class="proy_td2">Municipio</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['municipio']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.9);"><div class="proy_td2">Tiempo en Ejecucion</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['tiempo_ejc']; ?></div></td>
              </tr>
              <tr>
                <td align="left" valign="middle" style="background:rgba(189,235,156,0.9);;"><div class="proy_td2">Nº de Beneficiarios</div></td>
                <td ><div class="proy_td1"><?php echo $fila['beneficiario']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.9);" ><div class="proy_td2">Objetivo General</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['ob_general']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.9);"><div class="proy_td2">Objetivos Especificos</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['ob_especificos']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.9);"><div class="proy_td2">Resultados Esperados</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['resultados']; ?></div></td>
              </tr>
              
            </table>
            <?php $n=0; $n1++; }?>
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
