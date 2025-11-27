<?php include('conexion.php');
$link=conectarse();
 ?>
<?php require_once('funciones/fecha.php'); 
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

$currentPage = $_SERVER["PHP_SELF"];
//////////

/////////////
$maxRows_r_categorias = 12;
$pageNum_r_categorias = 0;
if (isset($_GET['pageNum_r_categorias'])) {
  $pageNum_r_categorias = $_GET['pageNum_r_categorias'];
}
$startRow_r_categorias = $pageNum_r_categorias * $maxRows_r_categorias;


$query_r_categorias = "SELECT * FROM forocateg ORDER BY nomb_categ_foro ASC";
$query_limit_r_categorias = sprintf("%s LIMIT %d, %d", $query_r_categorias, $startRow_r_categorias, $maxRows_r_categorias);
$r_categorias = mysql_query($query_limit_r_categorias, $link) or die(mysql_error());
$row_r_categorias = mysql_fetch_assoc($r_categorias);

if (isset($_GET['totalRows_r_categorias'])) {
  $totalRows_r_categorias = $_GET['totalRows_r_categorias'];
} else {
  $all_r_categorias = mysql_query($query_r_categorias);
  $totalRows_r_categorias = mysql_num_rows($all_r_categorias);
}
$totalPages_r_categorias = ceil($totalRows_r_categorias/$maxRows_r_categorias)-1;

$queryString_r_categorias = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_r_categorias") == false && 
        stristr($param, "totalRows_r_categorias") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_r_categorias = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_r_categorias = sprintf("&totalRows_r_categorias=%d%s", $totalRows_r_categorias, $queryString_r_categorias);
?>
<!doctype html>
<html>
<head>
<link rel="icon"  href="../cde.gif" />
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
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="../css/estilo.css" type="text/css"/>
<link rel="stylesheet" href="../admin/prettyPhoto/css/prettyPhoto.css" type="text/css">
<script type="text/javascript" src="../admin/jquery-1.6.4.min.js"></script>

<script type="text/javascript" src="../admin/prettyPhoto/js/jquery.prettyPhoto.js"></script>

<link href="css/estilos.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="SpryAssets/SpryData.js"></script>
<script language="JavaScript" type="text/javascript" src="SpryAssets/SpryEffects.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">


$(document).ready(function()
{	
$("a[rel^='prettyPhoto_GaleriaFotos']").prettyPhoto({theme:'facebook'});
});
</script>
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
<script src="../js/direccion.js" type="text/javascript"></script>    
    

<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}
.FO {
	color: #FFF;
	font-weight: bold;
	text-align: center;
	font-size: 36px;
	list-style-type: none;
	text-shadow:0px 0px 5px #000000;
}
</style>
</head>
<body>
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
<div style="clear:both;"></div>
<div class="contenedorMenu">
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
        <li class="subme"onClick="direccion('../personal.php')">PERSONAL</li> <li class="subme"onClick="direccion('convocatorias.php')">CONVOCATORIAS</li> 
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

		
<table width="100%"  align="center" cellpadding="0" cellspacing="0" style="padding:20px; background:#FFFFFF;">
  <tr>
    <td style="background:-moz-linear-gradient(top,#06C 0%,#09C 100%); height:40px; color:#FFFFFF;"><center>
    	<h3>FORO</h3>
    </center></td>
  </tr>
  <tr>
    <td class="cuerpo"><div style="padding:2px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?php do { ?>
      <?php 
$colname_r_numtemas = "-1";
if (isset($row_r_categorias['id_categ_foro'])) {
  $colname_r_numtemas = $row_r_categorias['id_categ_foro'];
}

$query_r_numtemas = sprintf("SELECT * FROM foromensajes WHERE idcat_msj_foro = %s AND idmsj_resp_msj_foro = 0", GetSQLValueString($colname_r_numtemas, "int"));
$r_numtemas = mysql_query($query_r_numtemas, $link) or die(mysql_error());
$row_r_numtemas = mysql_fetch_assoc($r_numtemas);
$totalRows_r_numtemas = mysql_num_rows($r_numtemas);
	  ?>
        <tr>
              <td class="firma"><div style="padding:2px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="textocateg"><div align="left" style="padding-bottom:2px;"><strong><a href="temas.php?categoria=<?php echo $row_r_categorias['id_categ_foro']; ?>"><?php echo $row_r_categorias['nomb_categ_foro']; ?></a></strong></div></td>
                    </tr>
                    <tr>
                      <td bgcolor="#E0DFE3"><img src="imagenes/spacer.gif" width="1" height="1"></td>
                    </tr>
                    <tr>
                      <td class="textofirma"><div align="left" style="padding-top:2px;"><?php echo $row_r_categorias['descrip_categ_foro']; ?></div></td>
                    </tr>
                    <tr>
                      <td class="textofirmapie"><div align="right">Existen <strong><?php echo $totalRows_r_numtemas; ?></strong> temas en esta categoria</div></td>
                    </tr>
                  </table>
              </div></td>
        </tr>
      <tr>
        <td><img src="imagenes/spacer.gif" width="1" height="3"></td>
      </tr>
      <?php mysql_free_result($r_numtemas); ?>
        <?php } while ($row_r_categorias = mysql_fetch_assoc($r_categorias)); ?>
    </table></td>
  </tr>
</table>
</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
			
		
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
<?php
mysql_free_result($r_categorias);

?>
