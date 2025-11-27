<?php require_once('conexion.php');
$link=conectarse(); ?>

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
<script language="javascript">
function VerDatos()
	{
		if((document.form.nom.value=="") || (document.form.email.value=="")||(document.form.pais.value=="")|| (document.form.ciudad.value=="")|| (document.form.clave.value==""))
		{
			alert("Tiene que escribir en todos los campos...!!!");
		}
		
		else
			document.form.submit();
	}
</script>
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


  
	<div id="central3" style="width:90%;  margin-left:50px; height:400px;" >
  
          <form action="procesar_usuario_foro.php"
            method="post"  name="form" enctype="multipart/form-data" id="fomColor">
	        <div class="titulo_not" style="text-align:right;" >
    	<h3 style="margin-right:50px; color:#FFFFFF; font-size:16px;">FORO</h3>
    
  		</div> 
            <legend>
            <h2 style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:14px; color:#000000; text-align:center;" ><strong>Registro Nuevo</strong> </h2>
            </legend>
            <table width="532" align="center" >
            
              <tr>
                <td width="175" align="left" nowrap="nowrap" style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:14px;" ><strong>Nombre Completo</strong></td>
                <td width="345" align="left" style=" color:#FF0000;"><input name="nom" type="text"  class="input1"required id="nom" size="40" maxlength="50" placeholder="Introduzca su Nombre">
                *</td>
              </tr>
              <tr>
                <td align="left" style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:14px;"> <strong>Email</strong></td>
                <td align="left" style=" color:#FF0000;"><input name="email" type="email" required id="email" class="input1" size="40" maxlength="40"placeholder="Introduzca su Correo Electronico">
                *</td>
              </tr>
              <tr>
                <td align="left" style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:14px;"><strong>Pais</strong></td>
                <td align="left" style=" color:#FF0000;"><select name="pais" >
                  <?php   $link=conectarse();
				$sql=mysql_query("select pais from pais",$link);
				while($fila=mysql_fetch_array($sql))
				{?>
                  <option><?php echo $fila['pais'];} ?></option>
                </select>
                *</td>
              </tr>
              <tr>
                <td align="left" style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:14px;"><strong>Ciudad</strong></td>
                <td align="left" style=" color:#FF0000;"><input name="ciudad" type="text" required id="ciudad" size="40" class="input1" maxlength="34" placeholder="Introduzca su Ciudad">
                *</td>
              </tr>
              <tr>
                <td align="left" style="font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:14px;"><strong>Clave</strong>              </td>
                <td align="left" style=" color:#FF0000;"><input name="clave" type="text" required id="clave" size="40" maxlength="34" class="input1" placeholder="Introduzca su Ciudad">
                *</td>
              </tr>
              <tr>
                <td colspan=2><label for="img"></label></td>
              </tr>
              <tr>
                <td><input name="Enviar"  type="button" class="btn "  value="Enviar " onClick="VerDatos()"></td>
                <td align="center"><input name="Enviar2" type=reset class="btn " value="Limpiar"></td>
              </tr>
            </table>
          </form>

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
