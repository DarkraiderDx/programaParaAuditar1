<?php require_once('conexion.php');
$link=conectarse(); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "1,5";
$MM_donotCheckaccess = "false";


function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  
  $isValid = False; 

  
  if (!empty($UserName)) { 
    
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "../index.php?pagina=denegado";
if (!((isset($_SESSION['usuario'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['usuario'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
 $tit_msj_foro=$_POST['tit_msj_foro'].'<br>';
 $cont_msj_foro=$_POST['cont_msj_foro'].'<br>';
 $fecha_hora_msj_foro=$_POST['fecha_hora_msj_foro'].'<br>';
$idmsj_resp_msj_foro=$_POST['idmsj_resp_msj_foro'].'<br>';
$id_usr_msj_foro=$_POST['id_usr_msj_foro'].'<br>';

if(isset($_FILES['archivo'])) 
	{
		$tipos = array("application/msword","application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.ms-excel","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.ms-excel");
		$maximo = 100204000;		
		if (in_array($_FILES['archivo']['type'],$tipos)) 
		{ 
			if($_FILES['archivo']['size'] <= $maximo)
			{
				$archivo = $_FILES["archivo"]["tmp_name"];
				$tamanio=array();
				$tamanio = $_FILES["archivo"]["size"];
				$tipo = $_FILES["archivo"]["type"];
				$nombre_archivo = $_FILES["archivo"]["name"];
				extract($_REQUEST);
				if ( $archivo != "none" )
				{
					$fp = fopen($archivo, "rb");
					$contenido = fread($fp, $tamanio);
					$contenido = addslashes($contenido);
					fclose($fp);
					
				 $insertSQL="INSERT INTO foromensajes (tit_msj_foro, 
				  cont_msj_foro,
   fecha_hora_msj_foro,
    idmsj_resp_msj_foro,
	id_usr_msj_foro,nombre_ar,
	archivo,tipo) VALUES
	('$tit_msj_foro',
	'$cont_msj_foro',
	'$fecha_hora_msj_foro',
	'$idmsj_resp_msj_foro',
	'$id_usr_msj_foro',
	'$nombre_archivo',
	'$contenido',
	'$tipo')";
                       
 $Result1 = mysql_query($insertSQL, $link)or die(mysql_error());
  
				}}}
				else{
			
$insertSQL="INSERT INTO foromensajes (tit_msj_foro, 
				  cont_msj_foro,
   fecha_hora_msj_foro,
    idmsj_resp_msj_foro,
	id_usr_msj_foro) VALUES
	('$tit_msj_foro',
	'$cont_msj_foro',
	'$fecha_hora_msj_foro',
	'$idmsj_resp_msj_foro',
	'$id_usr_msj_foro'
	)"; $Result1 = mysql_query($insertSQL, $link)or die(mysql_error());

 
				}
	}
  $insertGoTo = "vertema.php?tema=".$row_r_detalletema['id_msj_foro'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
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
								    `usuarios`.nombre FROM `foromensajes`
									 INNER JOIN `usuarios` ON (`foromensajes`.id_usr_msj_foro = `usuarios`.id_usuario) 
									 WHERE `foromensajes`.idmsj_resp_msj_foro = '0' AND    `foromensajes`.id_msj_foro = %s ORDER BY `foromensajes`.fecha_hora_msj_foro DESC", GetSQLValueString($colname_r_detalletema, "int"));
$r_detalletema = mysql_query($query_r_detalletema, $link) or die(mysql_error());
$row_r_detalletema = mysql_fetch_assoc($r_detalletema);
$totalRows_r_detalletema = mysql_num_rows($r_detalletema);

$colname_r_usuarioforo = "-1";
if (isset($_SESSION['usuario'])) {
  $colname_r_usuarioforo = $_SESSION['usuario'];
}

 $query_r_usuarioforo = sprintf("SELECT * FROM usuarios WHERE correo = %s", GetSQLValueString($colname_r_usuarioforo, "text"));
$r_usuarioforo = mysql_query($query_r_usuarioforo,$link) or die(mysql_error());
$row_r_usuarioforo = mysql_fetch_assoc($r_usuarioforo);
$totalRows_r_usuarioforo = mysql_num_rows($r_usuarioforo);
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


  
	<div id="central3" style="width:90%;  margin-left:50px;  " >
 	
    <table width="100%" style="padding:20px; background:#FFFFFF;" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right" class="titulo_not" style="text-align:right;" >
    	<h3 style="margin-right:50px; color:#FFFFFF; font-size:16px;">FORO</h3></td>
  </tr>
  <tr>
    <td class="cuerpo"><div style="padding:2px;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
        <tr>
          <td class="textocateg" align="center"><strong>Formulario de respuesta:</strong></td>
        </tr>
        <tr>
          <td>
            <form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return Validar(this)">
              <table width="500" align="center" cellpadding="1" cellspacing="1">
                <tr valign="baseline">
                  <td align="right" nowrap="nowrap" class="textocateg"><strong>Usuario:</strong></td>
                  <td align="left" class="textocateg"><?php echo $row_r_usuarioforo['nombre']; ?></td>
                  </tr>
                <tr valign="baseline">
                  <td width="98" align="right" nowrap="nowrap" class="textocateg"><strong>Tema de analisis:</strong></td>
                  <td width="393" align="left"><input name="tit_msj_foro" type="text" class="input1" value="RE: <?php echo $row_r_detalletema['tit_msj_foro']; ?>" size="50" readonly></td>
                  </tr>
                <tr valign="baseline">
                  <td align="right" valign="top" nowrap="nowrap" class="textocateg"><strong>Contenido:</strong></td>
                  <td align="left"><textarea name="cont_msj_foro" cols="40" rows="6" class="textarea"></textarea></td>
                  </tr>
                <tr valign="baseline">
                  <td align="right" nowrap="nowrap" class="textocateg"><strong>Fecha:</strong></td>
                  <td align="left"><input name="fecha_hora_msj_foro" type="text" class="input1" value="<?php echo date("d/m/Y H:i:s"); ?>" size="20" readonly></td>
                </tr>
                <tr valign="baseline">
                  <td align="right" nowrap="nowrap" class="textocateg"><label for="archi">Adjuntar Archivo:</label></td>
                  <td align="left"><label for="archivo"></label>
                    <input type="file" name="archivo"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap="nowrap" align="right">&nbsp;</td>
                  <td align="left"><input type="submit" class="btn " value="Enviar"></td>
                </tr>
                </table>
              <input type="hidden" name="idmsj_resp_msj_foro" value="<?php echo $row_r_detalletema['id_msj_foro']; ?>">
              
              <input type="hidden" name="id_usr_msj_foro" value="<?php echo $row_r_usuarioforo['id_usuario']; ?>">
              <input type="hidden" name="MM_insert" value="form1">
              </form>
            </td>
        </tr>
        <tr class="textocateg">
          <td align="right">[<a href="index.php">Volver</a>]</td>
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
