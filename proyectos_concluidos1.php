<?php session_start(); require_once('conexion.php'); ?>
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
    

<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
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
        <li class="subme"onClick="direccion('proyectos.php')" id="active1">PROYECTOS</li>
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

		<!-- end of slider-holder -->
 <div style="clear:both;"></div>
<div class="contenedor">
		<header>
	    <span class="resaltado">El CDE-I</span> (Centro de Desarrollo y Promoción Económica Integral),<span class="resaltado"> es una organización no lucrativa, dedicada a potenciar capacidades de gestión económica, social, productiva e investigación</span> para implementar procesos de desarrollo local integral en espacios comunales, municipales, regionales, departamentales y nacionales. </header>
        
		<section>
		  
		   <br>
		      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr align="left">
          <td width="260" valign="top" bgcolor="#FFFFFF" class="fondomenu2"><table width="87%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><h2></h2></td>
            </tr>
            <tr>
              <td><div id="menu_lateral">
                
                <ul class="menu">
		<li class="item1"><a href="proyectos.php">Proyectos</a></li>
			
		
		<li class="item2"><a href="proyectos.php">Proyectos en Ejecucion</a>
			
		</li>
		<li class="item3"><a href="proyectos_concluidos.php" class="active">Proyectos Concluidos</a>
			
		</li>
		<li class="item3"><a href="proyectos_propuestos.php">Proyectos Programados</a>
			
		</li>
		
	</ul>

</div></td>
            </tr>
          </table></td>
          
          <td width="90%" align="center" valign="top">
            <h2 style="color:#333333;">Proyectos Concluidos</h2>
            <p>
              <?php
			   $link=conectarse();
			  	$n=0;
				$n1=1;
			   $query=mysql_query("select * from proyectos where tipo='concluido'",$link);
			   
            while($fila=mysql_fetch_array($query))
			{
			?>
            <?php if($n==0){?>
           <table width="493" border="0" cellpadding="0" cellspacing="0" class="tabla_proyectos">
             <tr>
               <td    align="left"   class="titpro"  height="35px;">Nombre del Proyecto</td>
               <td   align="left" class="titpro"  height="35px;" ><?php echo $fila['nombre']; ?></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.3);"><div class="proy_td2">Departamento</div></td>
               <td ><div class="proy_td1"><?php echo $fila['departamento']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.3);"><div class="proy_td2">Municipio</div></td>
               <td ><div class="proy_td1"><?php echo $fila['municipio']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.3);"><div class="proy_td2">Tiempo en Ejecucion</div></td>
               <td  ><div class="proy_td1"><?php echo $fila['tiempo_ejc']; ?></div></td>
             </tr>
             <tr>
               <td align="left" valign="middle"  style="background:rgba(204,204,0,0.3);"><div class="proy_td2">Nº de Beneficiaros</div></td>
               <td  ><div class="proy_td1"><?php echo $fila['beneficiario']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.3);" ><div class="proy_td2">Objetivo General</div></td>
               <td ><div class="proy_td1"><?php echo $fila['ob_general']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.3);"><div class="proy_td2">Objetivos Especificos</div></td>
               <td  ><div class="proy_td1"><?php echo $fila['ob_especificos']; ?></div></td>
             </tr>
             <tr>
               <td  align="left" valign="middle"  style="background:rgba(204,204,0,0.3);"><div class="proy_td2">Resultados Esperados</div></td>
               <td ><div class="proy_td1"><?php echo $fila['resultados']; ?></div></td>
             </tr>
             
           </table>
            <?php $n=1; $n1++; }
			else if($n==1){?>

				<table width="493" cellpadding="0" cellspacing="0" class="tabla_proyectos">
              <tr>
                <td    align="left"   class="titpro"  height="35px;">Nombre del Proyecto</td>
                <td   align="left" class="titpro"  height="35px;" ><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.5);"><div class="proy_td2">Departamento</div></td>
                <td    ><div class="proy_td1"><?php echo $fila['departamento']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.5);"><div class="proy_td2">Municipio</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['municipio']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.5);"><div class="proy_td2">Tiempo en Ejecucion</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['tiempo_ejc']; ?></div></td>
              </tr>
              <tr>
                <td align="left" valign="middle" style="background:rgba(189,235,156,0.5);;"><div class="proy_td2">Nº de Beneficiarios</div></td>
                <td ><div class="proy_td1"><?php echo $fila['beneficiario']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.5);" ><div class="proy_td2">Objetivo General</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['ob_general']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.5);"><div class="proy_td2">Objetivos Especificos</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['ob_especificos']; ?></div></td>
              </tr>
              <tr>
                <td  align="left" valign="middle"  style="background:rgba(189,235,156,0.5);"><div class="proy_td2">Resultados Esperados</div></td>
                <td  ><div class="proy_td1"><?php echo $fila['resultados']; ?></div></td>
              </tr>
              
            </table>
            <?php $n=0; $n1++; }?>
            <?php } ?>
           </td>
          
        </tr>
      </table>
	        
		 
		  
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