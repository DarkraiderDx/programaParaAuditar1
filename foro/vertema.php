<?php include('conexion.php');
$link=conectarse();
 ?>

<?php
session_start();

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_r_detalletema = "-1";
if (isset($_GET['tema'])) {
  $colname_r_detalletema = $_GET['tema'];
}

$query_r_detalletema = sprintf("SELECT `foromensajes`.id_msj_foro,
							   `foromensajes`.tit_msj_foro,
							   `foromensajes`.cont_msj_foro,
							   `foromensajes`.id_usr_msj_foro,
							   `foromensajes`.idmsj_resp_msj_foro,
							   `foromensajes`.fecha_hora_msj_foro,
							    `usuarios`.correo,`usuarios`.nombre FROM 
							    `foromensajes`   INNER JOIN `usuarios` ON 
								(`foromensajes`.id_usr_msj_foro = `usuarios`.id_usuario)								  
								 WHERE   `foromensajes`.idmsj_resp_msj_foro = '0' AND
								 `foromensajes`.id_msj_foro = %s ORDER BY   `foromensajes`.fecha_hora_msj_foro DESC", GetSQLValueString($colname_r_detalletema, "int"));
$r_detalletema = mysql_query($query_r_detalletema, $link) or die(mysql_error());
$row_r_detalletema = mysql_fetch_assoc($r_detalletema);
$totalRows_r_detalletema = mysql_num_rows($r_detalletema);

$colname_r_respuestas = "-1";
if (isset($_GET['tema'])) {
  $colname_r_respuestas = $_GET['tema'];
}

$query_r_respuestas = sprintf("SELECT `foromensajes`.id_msj_foro,
							   `foromensajes`.tit_msj_foro,
							   `foromensajes`.cont_msj_foro,
							   `foromensajes`.id_usr_msj_foro,
							   `foromensajes`.idmsj_resp_msj_foro,
							   `foromensajes`.fecha_hora_msj_foro,
							   `foromensajes`.nombre_ar,
							    `usuarios`.nombre FROM 
								`foromensajes`
								 INNER JOIN `usuarios` ON
								 (`foromensajes`.id_usr_msj_foro = `usuarios`.id_usuario)								   
								 WHERE `foromensajes`.idmsj_resp_msj_foro  = %s ORDER BY `foromensajes`.fecha_hora_msj_foro DESC", GetSQLValueString($colname_r_respuestas, "int"));
$r_respuestas = mysql_query($query_r_respuestas, $link) or die(mysql_error());
$row_r_respuestas = mysql_fetch_assoc($r_respuestas);
$totalRows_r_respuestas = mysql_num_rows($r_respuestas);
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="../css/estilo.css" type="text/css"/>
<link rel="stylesheet" href="../admin/prettyPhoto/css/prettyPhoto.css" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="../admin/jquery-1.6.4.min.js"></script>

<script type="text/javascript" src="../admin/prettyPhoto/js/jquery.prettyPhoto.js"></script>

<link href="css/estilos.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="SpryAssets/SpryData.js"></script>
<script language="JavaScript" type="text/javascript" src="SpryAssets/SpryEffects.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">
function Validar(f){
  if (f.tit_msj_foro.value == "")
  { alert("Por favor ingrese un titulo para su tema"); f.tit_msj_foro.focus(); return false; }

  if (f.cont_msj_foro.value == "")
  { alert("Por favor ingrese una descripcion de su tema"); f.cont_msj_foro.focus(); return false; }
  return true;
  }
</script>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
<script src="../js/direccion.js" type="text/javascript"></script>   
</head>
<body>

<div id="content">
	<div id="header"><div class="contenedorMenu">
    <div id="cabeza">
<div id="imaCabeza">
  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="150">
      <param name="movie" value="../admin/images/animacionCDI.swf">
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="8.0.35.0">
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="../admin/images/animacionCDI.swf" width="1000" height="150">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="swfversion" value="8.0.35.0">
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
        <div>
          <h4>El contenido de esta p&aacute;gina requiere una versi&oacute;n m&aacute;s reciente de Adobe Flash Player.</h4>
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
        <li class="subme" onClick="direccion('../index.php')">INICIO</li>
        <li class="subme"onClick="direccion('../quienes_somos.php')">QUIENES SOMOS</li>
        <li class="subme"onClick="direccion('../proyectos.php')">PROYECTOS</li>
        <li class="subme"onClick="direccion('../servicios.php')">SERVICIOS</li>
        <li class="subme"onClick="direccion('../noticias.php')">NOTICIAS</li>
        <li class="subme"onClick="direccion('../foro/index.php')" id="active1">FORO</li>
        <li class="subme"onClick="direccion('../galeria.php')">GALERIA</li>
        <li class="subme"onClick="direccion('../contactos.php')">CONTACTENOS</li>
        <li class="subme"onClick="direccion('../personal.php')">PERSONAL</li> <li class="subme"onClick="direccion('../convocatorias.php')">CONVOCATORIAS</li> 
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
  
	    

  </div>
  </div>


  
	<div id="central3" style="width:90%; margin-bottom:100px;  margin-left:50px;  " >
 	
    <table width="100%"  style="padding:20px; background:#FFFFFF;" border="0" align="center" cellpadding="0" cellspacing="0" s>
  <tr>
    <td  align="right" class="titulo_not" style="text-align:right;" >
    	<h3 style="margin-right:50px; color:#FFFFFF; font-size:16px;">FORO</h3></td>
  </tr>
  <tr>
    <td class="cuerpo"><div style="padding:2px;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="6"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="firma"><div style="padding:2px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="textocateg"><div align="left" style="padding-bottom:2px;"><strong><?php echo $row_r_detalletema['tit_msj_foro']; ?></strong></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#E0DFE3"><img src="imagenes/spacer.gif" width="1" height="1"></td>
                  </tr>
                  <tr>
                    <td class="textofirma"><div align="left" style="padding-top:2px;"><?php echo $row_r_detalletema['cont_msj_foro']; ?></div></td>
                  </tr>
                  <tr>
                    <td align="right" class="textofirmapie">Escrito por <strong><?php echo $row_r_detalletema['nombre']; ?></strong> [<?php echo $row_r_detalletema['fecha_hora_msj_foro']; ?>]</td>
                  </tr>
                </table>
              </div></td>
            </tr>
            <tr>
              <td><img src="imagenes/spacer.gif" width="1" height="3"></td>
            </tr>
          </table></td>
        </tr>
        <tr align="left" class="textocateg">
          <td colspan="6"><strong>Respuestas:</strong></td>
        </tr>
        <tr class="textofirma">
          <td colspan="6"><img src="imagenes/spacer.gif" width="1" height="3"></td>
        </tr>
        <?php if ($totalRows_r_respuestas > 0) { // Show if recordset not empty ?>
            <?php do { ?>
  <tr>
    <td colspan="6"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="firma"><div style="padding:2px;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="textocateg"><div align="left" style="padding-bottom:2px;"><strong><?php echo $row_r_respuestas['tit_msj_foro']; ?></strong></div></td>
              </tr>
            <tr>
              <td bgcolor="#E0DFE3"><img src="imagenes/spacer.gif" width="1" height="1"></td>
              </tr>
            <tr>
              <td class="textofirma"><div align="left" style="padding-top:2px;"><?php echo $row_r_respuestas['cont_msj_foro']; ?></div></td>
              </tr>
            <tr>
              <td align="left" ><span class="textofirma">Archivo Adjunto: <a  style="color:#1B71DA;" href="adjunto.php?id=<?php echo $row_r_respuestas['id_msj_foro']; ?>"><?php echo $row_r_respuestas['nombre_ar']; ?></a></span></td>
            </tr>
            <tr>
              <td align="right" class="textofirmapie">Escrito por <strong><?php echo $row_r_respuestas['nombre']; ?></strong> [<?php echo $row_r_respuestas['fecha_hora_msj_foro']; ?>]</td>
              </tr>
            </table>
          </div></td>
        </tr>
      <tr>
        <td><img src="imagenes/spacer.gif" width="1" height="3"></td>
        </tr>
    </table></td>
  </tr>
  <?php } while ($row_r_respuestas = mysql_fetch_assoc($r_respuestas)); ?>
<?php } // Show if recordset not empty ?>
<?php if ($totalRows_r_respuestas == 0) { // Show if recordset empty ?>
  <tr>
    <td colspan="6" align="center" class="textofirma">El tema no tiene respuestas</td>
  </tr>
  <?php } // Show if recordset empty ?>
<tr class="textocateg">
  <td colspan="6" align="right">[<a href="index.php">Volver</a>]</td>
</tr>
<tr class="textocateg">
  <td width="15%" align="left" ><a href="responder.php?tema=<?php echo $row_r_detalletema['id_msj_foro']; ?>" style="text-decoration:none; color:#FFF; font-size:16px;"><button class="btn">Reponder el tema</button></a></td>
  <td width="64%" align="left">&nbsp;</td>
  <td width="5%" align="left">&nbsp;</td>
  <td width="5%" align="left">&nbsp;</td>
  <td width="5%" align="left">&nbsp;</td>
  <td width="6%" align="left">&nbsp;</td>
</tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td>Si desea realizar una publicacion de un nuevo tema tiene que estar registrado.<br>
Haga clic <a href="../index.php?pagina=usuarios&amp;accion=nuevo" target="_blank" style="color:#039;"><strong>aquí</strong></a> para registrarse o en caso contrario haga clic <a href="usuario.php" target="_blank" style="color:#039;"><strong>aqui</strong></a> para ingresar al sistema si ya esta registrado en nuestro sistio web.</td>
  </tr>
</table>
  </div></center><!--fin central-->
    
	
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
