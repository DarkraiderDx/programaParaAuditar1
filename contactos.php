<?php require_once('conexion.php'); 
include_once "funciones.php";?>

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

<script src="js/jquery_002.js" type="text/javascript"></script>
<link href="css/jquery.css" rel="stylesheet" type="text/css" media="screen">
<script src="js/jquery1.js" type="text/javascript"></script>

<script language="javascript" src="js/jquery.js" ></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script language="javascript">
function VerDatos()
	{
		var men="";
		var n=0;
		if((form.nom.value==""))
		{
		men+= "Escriba su nombre en el campo \"Nombre\". \n";
			n=1;
		}
		if (form.email.value.indexOf('@') == -1)
	{
		men+= "No es un correo valido en el campo \Email\". \n";
		n=1;
	}
	if((form.tel.value.length< 9) || isNaN(form.tel.value))
	{
		men+= "Escriba un teléfono correcto en el campo \"Teléfono\". \n";
		n=1;
	}
	if(form.pais.value=="")	
	{
		men+= "Escriba un Pais en el campo \"Pais\". \n";
		n=1;
	}
		if(form.ciudad.value=="")	
	{
		men+= "Escriba un Pais en el campo \"Ciudad\". \n";
		n=1;
	}
		if(form.motivo.value=="")	
	{
		men+= "Escriba un Pais en el campo \"Motivo\". \n";
		n=1;
	}
	if(form.detalle.value=="")	
	{
		men+= "Escriba un detalle en el campo \"Detalle\". \n";
		n=1;
	}
		if(n==1)
		{
				jAlert(men,'Tienes los Siguientes Errores');
	}
		
		else{
		
			document.form.submit();}
	}
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
        <li class="subme"onClick="direccion('proyectos.php')">PROYECTOS<br><i class="icon1-briefcase "></i></li>
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
        <li class="subme"onClick="direccion('noticias.php')">NOTICIAS<br><i class="icon1-list-alt"></i></li>
        <li class="subme"onClick="direccion('foro/index.php')">FORO<br><i class="icon1-volume-up"></i></li>
        <li class="subme"onClick="direccion('galeria.php')">GALERIA<br><i class="icon1-picture"></i></li>
        <li class="subme"onClick="direccion('contactos.php')"id="active1">CONTACTENOS<br><i class="icon1-envelope"></i></li>
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
  
	    

  </div></div><div id="column-left2" style=" width:300px;text-align:left;">
  <div style="text-align:center;  box-shadow:0px 1px 3px #666;"><img src="admin/img/mapa2.jpg"  style="border:7px solid white;"width="270" height="230"></div>
            <div style="font-style:normal; font-size:12px;">
              <p style="color:#333333;"><h2 style=" padding-left:10px;color:#333333;">Dirección:</h2></p><p style="color:#333333;padding-left:60px;"> Calle. 26 de infantería Nº 107, entre calles Omiste y Argote</p> 
              <br>
            <p style="color:#333333;"><h2 style="padding-left:10px;color:#333333;"><i style="margin-right:5px;" class="icon-envelope"></i>Correo:</h2> 
            <p style="color:#333333;padding-left:60px;">cde-i@entelnet.bo</p>
            <p style="color:#333333;padding-left:60px;">cdei_bolivia@yahoo.es</p>
             <p style="color:#333333;"><br><h2 style="color:#333333;padding-left:10px;">Teléfono/Fax:</h2> 
            <p style="color:#333333;padding-left:60px;">(591) 2 6120807</p>

            
              
            <center><p style="color:#333333;"> Potosí – Bolivia</p></center>
            </div>
  </div><!--fin lef-->

  
	<div id="central2" style="width:65%;">
    
          <form action="procesar_contacto.php"
            method="post"  name="form" enctype="multipart/form-data" id="fomColor">
		    <?php if(!isset($_GET['men'])){
			 }
			 else{
			echo  "<center><div style='width:540px; margin-top:5px;'>".mensajes($_GET['men'],'verde')."</div></center>";
				 }
			 ?>
            
            <table width="557" border="0" align="center" cellspacing="2" class="comentario1">
              <tr><td height="5"></td></tr>
              <tr>
              	
                <td colspan="2"  class="tdventa" height="30" align="center"><h2 style="color:#FFFFFF;">CONTACTENOS</h2></td>
              </tr>
              <tr>
                <td colspan="2"  align="center"> <p class="alert">Debe LLenar de forma obligatoria los macados con <span style="color:#F00; font-size:16px;">(*)</span> </p></td>
              </tr>
              <tr>
                <td width="140" align="left">NOMBRE COMPLETO</td>
                <td width="352" align="left" style="color:#FF0000; font-size:16px;"><input name="nom" type="text" required id="nom"  class="input1"size="38" maxlength="50" placeholder="Introduzca su Nombre">
                  *</td>
              </tr>
              <tr>
                <td align="left"> EMAIL</td>
                <td align="left" style="color:#FF0000; font-size:16px;"><input class="input1"name="email" type="email" required id="email" size="38" maxlength="40"placeholder="Introduzca su Correo Electronico">
                  *</td>
              </tr>
              <tr>
                <td align="left">TELEFONO</td>
                <td align="left" style="color:#FF0000; font-size:16px;">
                  <input name="tel" class="input1"  required id="tel" size="38" maxlength="34"placeholder="Introduzca su Telefono">
                  *
                </td>
              </tr>
              <tr>
                <td align="left">SKIPE</td>
                <td align="left"><input class="input1" name="skipe"  required id="skipe" size="38" maxlength="34"placeholder="Introduzca su Skipe"></td>
              </tr>
              <tr>
                <td align="left">PAIS</td>
                <td align="left" style="color:#FF0000; font-size:16px;"><select name="pais" >
                  <?php   $link=conectarse();
				  if(!isset($_POST['tipo_contacto']))
				  {
				$sql=mysqli_query($link,"select pais from pais");
				while($fila=mysqli_fetch_array($sql))
				{?>
                  <option><?php echo $fila['pais'];} ?></option>
                </select>
                  *</td>
              </tr>
              <tr>
                <td align="left"> CIUDAD</td>
                <td align="left" style="color:#FF0000; font-size:16px;"><input  class="input1"name="ciudad" type="text" required id="ciudad" size="38" maxlength="34" placeholder="Introduzca su Ciudad">
                  *</td>
              </tr>
              <tr>
                <td align="left"> MOTIVO</td>
                <td align="left" style="color:#FF0000; font-size:16px;"><input class="input1" name="motivo" type="text" required id="motivo" size="38" maxlength="34" placeholder="Introduzca su Motivo">
                  *</td>
              </tr>
              <tr>
                <td align="left">MENSAJE</td>
                <td align="left" style="color:#FF0000; font-size:16px;"><textarea  class="textarea"name="detalle" cols="32" rows="6" required id="detalle" tabindex="4" placeholder="Introduzca su Mensaje"></textarea>
                  *</td>
              </tr>
              <tr>
                <td colspan=2><label for="img"></label></td>
              </tr>
              <tr>
                <td><input name="Enviar"  type="button"  class="btn btn-success" value="Enviar " onClick="VerDatos()"></td>
                <td align="right"><input name="Enviar2" type=reset class="btn btn-success" value="Limpiar"></td>
              </tr>
            </table>
           
          </form>
			<?php		}
					else
					{
						$tipo_con=$_POST['tipo_contacto'];
				$sql=mysqli_query($link,"select pais from pais");
				while($fila=mysqli_fetch_array($sql))
				{?>
                  <option><?php echo $fila['pais'];} ?></option>
                </select>*</td>
              </tr>
              <tr>
                <td align="left"> CIUDAD</td>
                <td align="left" style="color:#FF0000; font-size:16px;"><input  class="input1"name="ciudad" type="text" required id="ciudad" size="38" maxlength="34" placeholder="Introduzca su Ciudad">
                *</td>
              </tr>
              <tr>
                <td align="left"> MOTIVO</td>
                <td align="left" style="color:#FF0000; font-size:16px;"><input  class="input1"name="motivo" type="text" required id="motivo" size="38" maxlength="34" placeholder="Introduzca su Motivo">
                *</td>
              </tr>
              <tr>
                <td align="left">MENSAJE</td>
                <td align="left" style="color:#FF0000; font-size:16px;"><textarea class="textarea" name="detalle" cols="32" rows="6" required id="detalle" tabindex="4" placeholder="Introduzca su Mensaje"></textarea>
                *</td>
              </tr>
              <tr>
                <td colspan=2></td>
              </tr>
              <tr>
                <td align="left"><input name="Enviar" class="btn btn-success" type="button" value="Enviar " onClick="VerDatos()">
                <input type="hidden" name="tipo_contacto" id="hiddenField" value="<?php echo $tipo_con;?>"></td>
                <td align="right"><input name="Enviar2" type=reset class="btn btn-success" value="Limpiar"></td>
              </tr>
            </table>
          </form><?php } ?>
  </div><!--fin central-->
    
	
	<div id="footer"><p>DIRECCION:
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p></div>
</div>

</div>
</body>
</html>
