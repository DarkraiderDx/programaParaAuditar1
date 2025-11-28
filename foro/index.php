<?php require_once('conexion.php'); 

 require_once('funciones/fecha.php'); 

session_start();
$link=conectarse();
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string(conectarse(),$theValue) : mysqli_escape_string(conectarse(),$theValue);

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

$currentPage = $_SERVER["PHP_SELF"];



$maxRows_r_listatemas = 10;
$pageNum_r_listatemas = 0;
if (isset($_GET['pageNum_r_listatemas'])) {
  $pageNum_r_listatemas = $_GET['pageNum_r_listatemas'];
}
$startRow_r_listatemas = $pageNum_r_listatemas * $maxRows_r_listatemas;

$colname_r_listatemas = "-1";


 $query_r_listatemas = sprintf("SELECT  foromensajes.id_msj_foro,
									   `foromensajes`.tit_msj_foro,
									   `foromensajes`.cont_msj_foro,
									   `foromensajes`.id_usr_msj_foro,
									   `foromensajes`.idmsj_resp_msj_foro,
									   `foromensajes`.fecha_hora_msj_foro,
									   `foromensajes`.nombre_ar,
									   `usuarios`.correo,`usuarios`.nombre   FROM   
									   `foromensajes`   INNER JOIN `usuarios` ON
									    (`foromensajes`.id_usr_msj_foro = `usuarios`.id_usuario) WHERE   
										`foromensajes`.idmsj_resp_msj_foro = '0'  order by
										   
										`foromensajes`.fecha_hora_msj_foro DESC", GetSQLValueString($colname_r_listatemas, "int"));
$query_limit_r_listatemas = sprintf("%s LIMIT %d, %d", $query_r_listatemas, $startRow_r_listatemas, $maxRows_r_listatemas);
$r_listatemas = mysqli_query( $link,$query_limit_r_listatemas) or die(mysql_error());

$row_r_listatemas = mysqli_fetch_assoc($r_listatemas);
$row_r_listatemas['nombre'];
if (isset($_GET['totalRows_r_listatemas'])) {
  $totalRows_r_listatemas = $_GET['totalRows_r_listatemas'];
} else {
  $all_r_listatemas = mysqli_query($link,$query_r_listatemas);
  $totalRows_r_listatemas = mysqli_num_rows($all_r_listatemas);
}
$totalPages_r_listatemas = ceil($totalRows_r_listatemas/$maxRows_r_listatemas)-1;

$queryString_r_listatemas = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_r_listatemas") == false && 
        stristr($param, "totalRows_r_listatemas") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_r_listatemas = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_r_listatemas = sprintf("&totalRows_r_listatemas=%d%s", $totalRows_r_listatemas, $queryString_r_listatemas);
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
        <li class="subme" onClick="direccion('../index.php')">INICIO<br><i class="icon1-home"></i></li>
        <li class="subme"onClick="direccion('../quienes_somos.php')">QUIENES SOMOS<br><i class="icon1-question-sign"></i></li>
        <li class="subme"onClick="direccion('../proyectos.php')">PROYECTOS<br><i class="icon1-briefcase "></i></li>
        <li class="subme"onClick="direccion('../servicios.php')">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
        <li class="subme"onClick="direccion('../noticias.php')">NOTICIAS<br><i class="icon1-list-alt"></i></li>
        <li class="subme"onClick="direccion('../foro/index.php')" id="active1">FORO<br><i class="icon1-volume-up"></i></li>
        <li class="subme"onClick="direccion('../galeria.php')">GALERIA<br><i class="icon1-picture"></i></li>
        <li class="subme"onClick="direccion('../contactos.php')">CONTACTENOS<br><i class="icon1-envelope"></i></li>
        <li class="subme"onClick="direccion('../personal.php')">PERSONAL<br><i class="icon1-user"></i></li> <li class="subme"onClick="direccion('../convocatorias.php')">CONVOCATORIAS<br><i class="icon1-file"></i></li> 
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


  
	<div id="central3" style="width:90%;  margin-left:50px;  " >
 	
    <table width="100%" style="padding:20px; background:#FFFFFF;" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right" class="titulo_not" style="text-align:right;" >
    	<h3 style="margin-right:50px; color:#FFFFFF; font-size:16px;">FORO</h3>
    </td>
  </tr>
  <tr>
    <td class="cuerpo"><div style="padding:2px;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr class="textocategg">
          <td colspan="6" align="left"><strong>Temas</strong></td>
          </tr>
        <tr class="textocategg">
          <td colspan="6" align="left" class="textofirma"></td>
        </tr>
        <tr>
          <td colspan="6"><img src="imagenes/spacer.gif" width="1" height="3"></td>
          </tr>
        <?php if ($totalRows_r_listatemas > 0) { // Show if recordset not empty ?>
  <tr>
    <td colspan="6"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?php do { ?>
        <tr>
          <td class="firma"><div style="padding:2px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="textocateg"><div align="left" style="padding-bottom:2px;"><strong><a href="vertema.php?tema=<?php echo $row_r_listatemas['id_msj_foro']; ?>"><?php echo $row_r_listatemas['tit_msj_foro']; ?></a></strong></div></td>
                </tr>
              <tr>
                <td bgcolor="#E0DFE3"><img src="imagenes/spacer.gif" width="1" height="1"></td>
                </tr>
              <tr>
                <td class="textofirma"><div align="left" style="padding-top:2px;"><?php echo substr($row_r_listatemas['cont_msj_foro'],0,45)."..."; ?></div> Archivo Adjunto: <a  style="color:#1B71DA;" href="adjunto.php?id=<?php echo $row_r_listatemas['id_msj_foro']; ?>"><?php echo $row_r_listatemas['nombre_ar']; ?> </a></td>
                </tr>
              <tr>
                <td align="right" class="textofirmapie">
                Escrito por <strong>
				<?php echo $row_r_listatemas['nombre']; ?>
                </strong> [
				<?php echo $row_r_listatemas['fecha_hora_msj_foro']; 
				?>]
                <?php 
				$colname_r_nrespuestas = "-1";
				if (isset($row_r_listatemas['id_msj_foro'])) {
				  $colname_r_nrespuestas = $row_r_listatemas['id_msj_foro'];
				}

				$query_r_nrespuestas = sprintf("SELECT * FROM foromensajes WHERE idmsj_resp_msj_foro = %s", GetSQLValueString($colname_r_nrespuestas, "int"));
				$r_nrespuestas = mysqli_query($link,$query_r_nrespuestas) or die(mysqli_error());
				$row_r_nrespuestas = mysqli_fetch_assoc($r_nrespuestas);
				$totalRows_r_nrespuestas = mysqli_num_rows($r_nrespuestas);
				echo "(Respuestas: ".$totalRows_r_nrespuestas.")";
				?>
                </td>
                </tr>
              </table>
          </div></td>
        </tr>
        <tr>
          <td><img src="imagenes/spacer.gif" width="1" height="3"></td>
        </tr>
        <?php } while ($row_r_listatemas = mysqli_fetch_assoc($r_listatemas)); ?>
    </table></td>
  </tr>
  <?php } // Show if recordset not empty ?>
  <?php if ($totalRows_r_listatemas == 0) { // Show if recordset empty ?>
    <tr class="textocateg">
      <td colspan="6" align="center" class="textofirma">No existen temas en este foro</td>
    </tr>
    <?php } // Show if recordset empty ?>
<?php if ($totalRows_r_listatemas > 0) { // Show if recordset not empty ?>
          <tr class="textocateg">
            <td colspan="6" align="center"><table border="0">
              <tr>
                <td><?php if ($pageNum_r_listatemas > 0) { // Show if not first page ?>
                    <a href="<?php printf("%s?pageNum_r_listatemas=%d%s", $currentPage, 0, $queryString_r_listatemas); ?>"><img src="First.gif"></a>
                    <?php } // Show if not first page ?></td>
                <td><?php if ($pageNum_r_listatemas > 0) { // Show if not first page ?>
                    <a href="<?php printf("%s?pageNum_r_listatemas=%d%s", $currentPage, max(0, $pageNum_r_listatemas - 1), $queryString_r_listatemas); ?>"><img src="Previous.gif"></a>
                    <?php } // Show if not first page ?></td>
                <td><?php if ($pageNum_r_listatemas < $totalPages_r_listatemas) { // Show if not last page ?>
                    <a href="<?php printf("%s?pageNum_r_listatemas=%d%s", $currentPage, min($totalPages_r_listatemas, $pageNum_r_listatemas + 1), $queryString_r_listatemas); ?>"><img src="Next.gif"></a>
                    <?php } // Show if not last page ?></td>
                <td><?php if ($pageNum_r_listatemas < $totalPages_r_listatemas) { // Show if not last page ?>
                    <a href="<?php printf("%s?pageNum_r_listatemas=%d%s", $currentPage, $totalPages_r_listatemas, $queryString_r_listatemas); ?>"><img src="Last.gif"></a>
                    <?php } // Show if not last page ?></td>
              </tr>
            </table></td>
          </tr>
          <?php } // Show if recordset not empty ?>
        <tr class="textocateg">
          <td colspan="6" align="right"></td>
        </tr>
        <tr>
          <td width="122" align="center" valign="middle"    bgcolor="#FFFFFF" ><a href="nuevotema.php?categoria=" ><button class="btn">Publicar Nuevo Tema</button></a></td>
          <td width="11" align="left" >&nbsp;</td>
          <td width="81" align="left" >&nbsp;</td>
          <td width="286" align="left" >&nbsp;</td>
          <td width="153" align="left" >&nbsp;</td>
          <td width="156" align="left" >&nbsp;</td>
        </tr>
        <tr>
          <td colspan="6" align="left">&nbsp;</td>
        </tr>
        <tr class="textocateg">
          <td colspan="6" align="left">Si desea realizar una publicacion de un nuevo tema tiene que estar registrado.<br>
            Haga clic <a href="registro.php" target="_blank" style="color:#039;"><strong>aquí</strong></a> para registrarse o en caso contrario haga clic <a href="usuario.php" target="_blank" style="color:#039;"><strong>aqui</strong></a> para ingresar al sistema si ya esta registrado en nuestro sistio web.</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
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
