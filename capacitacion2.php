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
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src="js/menu_jquery.js"></script>

<script language="javascript" src="js/jquery.js" ></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>

<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}

.comentario4 tr .f1 {
	font-weight: bold;
}
.comentario4 tr .f1 {
	font-weight: normal;
}
.comentario4 tr .f2 {
	font-weight: bold;
}
.comentario4 tr .f2 {
	font-weight: normal;
}
.comentario4 tr .f1 {
	color: #666666;
}
.comentario4 tr .f2 {
	color: #666666;
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
        <li class="subme"onClick="direccion('servicios.php')" id="active1">SERVICIOS</li>
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
          <td width="260" align="center" valign="top" bgcolor="#FFFFFF" class="fondomenu2">
          <table width="50%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><h2></h2></td>
            </tr>
            <tr>
              <td> <div id="menu_lateral">

	<ul class="menu">
		<li class="item1" style="text-align:left;"><a href="#">Servicios </a></li>
			
		
		<li class="item2" style="text-align:left;"><a href="#">Comercialización</a>
			<ul>
				<li class="subitem1"><a href="servicios.php">Venta</a></li>
				<li class="subitem2"><a href="servicios_compra.php">Compra </a></li>
				
			</ul>
		</li>
		<li class="item3" style="text-align:left;"><a href="#">Eventos Formativos</a>
			<ul>
				
				<li class="subitem3"><a href="capacitacion.php">Capacitacion</a></li>
			</ul>
		</li>
		
		
	</ul>

</div></td>
            </tr>
          </table></td  >
          <td width="80%" align="center" valign="top" >
            <p>
              <?php
			  include('conexion.php');
$link=conectarse();
$n=0;
$n1=1;

$sql=mysqli_query($link,"select * from eventos order by id_evento desc ");

?>
            </p>
            <center><H2 style="color:#333333; font-style:inherit;">Capacitación</H2></center>
            <table  width="1000" border="1" align="center" cellpadding="0" cellspacing="0" class="comentario4" bordercolor="#999999"  >
                  <tr>
                 <th width="27" align="center"  class="titulo" ><center>Nº</center></th>
                <th width="63" align="center" class="titulo" ><center>Tema</center></th>
                <th class="titulo" ><center>Tiempo de Duración</center></th>
                <th class="titulo" ><center>Fecha de Inicio</center></th>
                <th align="center" class="titulo" ><center>Fecha de Culminación</center></th>
               
                <th align="center" class="titulo" ><center>Observación</center></th>
                
              </tr>
              <?php 
while($fila=mysqli_fetch_array($sql)){
?>
                <tr>
                <?php if($n==0){?>
               <th height="10" valign="top" class="f1" ><?php echo $n1;?></th>
                <th align="left" valign="top" class="f1"><?php echo $fila['evento']; ?></th>
                <th width="85" align="left" valign="top" class="f1"><?php echo $fila['tiempo_duracion'];?></th>
                <th width="86" align="left" valign="top" class="f1"><?php echo $fila['fecha_ini']; ?></th>
                <th width="80" align="left" valign="top" class="f1"><?php echo $fila['fecha_fin']; ?></th>
              
                <th width="83" align="center" valign="middle" class="f1"><a href="detalle_cap.php?id=<?php echo $fila['id_evento']; ?>">Ver mas</a></th>
               
              
              <?php $n=1; $n1++; }
              else if($n==1){?>
              <th width="17"  align="center" class="f2"><?php echo $n1;?></th>
                <th width="17" align="center" valign="top"  class="f2"><?php echo $fila['evento']; ?></th>
                 <th width="17" align="left" valign="top"  class="f2"><?php echo $fila['tiempo_duracion'];?></th>
                <th width="17" align="center" valign="top" class="f2"><?php echo $fila['fecha_ini']; ?></th>
                <th width="17" align="center" valign="top" class="f2"><?php echo $fila['fecha_fin']; ?></th>
               
                <th width="17" align="center" valign="middle" class="f2"><a href="detalle_cap.php?id=<?php echo $fila['id_evento']; ?>">Ver mas</a></th>
               
              <?php $n=0; $n1++; }?>
              </tr>
              <?php
}
?>
            </table>
          <p>&nbsp; </p></td>
          <td width="0%"></td>
          
        </tr>
      </table>
	        
		 
		  
</section>
		
    <div style="clear:both;">
      
    </div>
    <div id="comentarios"></div>
    <div style="clear:both;"></div>
<footer></footer>
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