<?php require_once('conexion.php'); ?>
<!doctype html>
<html>
<head>
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
<script src="js/pais.js" type="text/javascript"></script>  
   <script language="javascript">
function VerDatos()
	{
		if((document.form.nom.value=="") || (document.form.departamento.value=="")||(document.form.municipio.value=="") || (document.form.comunidad.value=="")|| (document.form.tiem.value=="")|| (document.form.ben.value=="")|| (document.form.tipo.value=="")|| (document.form.ob_especificos.value=="")|| (document.form.ob_general.value=="")|| (document.form.resultados.value==""))
		{
			alert("Tiene que escribir en todos los campos...!!!");
		}
		
		else
			document.form.submit();
	}
</script>
    <script type="text/javascript">


$(document).ready(function(){
	cargar_paises();
	$("#departamento").change(function(){dependencia_estado();});
	$("#municipio").change(function(){dependencia_ciudad();});
	$("#municipio").attr("disabled",true);
	$("#comunidad").attr("disabled",true);
});

function cargar_paises()
{
	$.get("cargar-paises.php", function(resultado){
		if(resultado == false)
		{
			
		}
		else
		{
			$('#departamento').append(resultado);			
		}
	});	
}
function dependencia_estado()
{
	var code = $("#departamento").val();
	
	$.get("dependencia-estado.php", { code: code },
	
		function(resultado)
		{
			if(resultado == false)
			{
				alert("Error");
			}
			else
			{
				$("#municipio").attr("disabled",false);
				document.getElementById("municipio").options.length=1;
				$('#municipio').append(resultado);			
			}
		}

	);
}

function dependencia_ciudad()
{
	var code = $("#municipio").val();
	
	$.get("dependencia-ciudades.php?", { code: code }, function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$("#comunidad").attr("disabled",false);
			document.getElementById("comunidad").options.length=1;
			$('#comunidad').append(resultado);			
		}
	});	
	
}
</script>
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
      <param name="movie" value="images/animacionCDI.swf">
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="8.0.35.0">
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="images/animacionCDI.swf" width="1000" height="150">
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
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS</li>
        <li class="subme"onClick="direccion('noticias.php')">NOTICIAS</li>
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
          <td width="21%" valign="top" bgcolor="#FFFFFF" class="fondomenu2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><h2></h2></td>
            </tr>
            <tr>
              <td><div id="menu_lateral">

	<ul class="menu">
		<li class="item1"><a href="#">Proyectos </a>
			
			<ul>
            	<li class="subitem1"><a href="proyectos.php">Registrar Proyecto</a></li>
				<li class="subitem1"><a href="editar_proyectos.php">Actualizar Proyecto</a></li>
				<li class="subitem2"><a href="eliminar_proyectos.php">Eliminar Proyecto</a></li>
				
			</ul>
		
		</li>
		
		
	</ul>

</div></td>
            </tr>
          </table></td>
          <td width="666" align="center" valign="top"><form action="procesar_proyecto.php"
            method="post"  name="form" enctype="multipart/form-data" id="fomColor">
		       
            <legend>
            <h2 style="color:#333333;">Registrar un Proyecto</h2></legend>
		          <table width="481" cellspacing="2" class="comentario1">
		            
		            <tr>
		              <td width="193" align="left">&nbsp;</td>
		              <td align="left">&nbsp;</td>
	                </tr>
		            <tr>
		              <td align="left">NOMBRE DE PROYECTO</td>
		              <td align="left"><textarea name="nom" cols="30" required id="nom"></textarea></td>
	                </tr>
		            <tr>
		              <td  align="left">DEPARTAMENTO</td>
		              <td width="276" align="left"><label for="select">
		                <select name="departamento"id="departamento"  >
		                  <option value="0"  >Seleccione departamento</option>
	                    </select>
		              </label></td>
	                </tr>
		            <tr>
		              <td align="left">MUNICIPIO</td>
		              <td align="left" id="myDiv2"><select name="municipio" id="municipio">
		                <option value="0"  >Seleccione municipio</option>
	                  </select></td>
	                </tr>
		            <tr>
		              <td align="left">COMUNIDAD</td>
		              <td align="left" id="myDiv"><select name="comunidad"id="comunidad" >
		                <option value="0"  >Seleccione comunidad</option>
	                  </select></td>
	                </tr>
		            <tr>
		              <td align="left">TIEMPO DE EJECUCION</td>
		              <td align="left"><input name="tiem" type="text" required id="tiem" size="35" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td align="left">BENEFICIARIO</td>
		              <td align="left"><input name="ben" type="text" required id="ben" size="35" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td align="left">TIPO</td>
		              <td align="left"><select name="tipo" id="tipo">
		                <option>ejecucion</option>
		                <option>concluido</option>
		                <option>propuesto</option>
	                  </select></td>
	                </tr>
		            <tr>
		              <td align="left">OBJETIVO             GENERAL </td>
		              <td align="left"><textarea name="ob_general" id="ob_general" cols="30" rows="5"></textarea></td>
	                </tr>
		            <tr>
		              <td align="left">OBJETIVOS ESPECIFICOS</td>
		              <td align="left"><textarea name="ob_especificos" id="ob_especificos" cols="30" rows="5"></textarea></td>
	                </tr>
		            <tr>
		              <td align="left">RESULTADOS  ESPERADOS</td>
		              <td align="left"><label for="resultados"></label>
	                  <textarea name="resultados" id="resultados" cols="30" rows="5"></textarea></td>
	                </tr>
		            <tr>
		              <td colspan=2><label for="img"></label></td>
	                </tr>
		            <tr>
		              <td><input name="Enviar" type=submit value="Enviar" onClick="VerDatos()"></td>
		              <td align="center"><input name="Enviar2" type=reset class="boton_reset" value="Limpiar"></td>
	                </tr>
	              </table>
	            
	          </form></td>
          
        </tr>
      </table>
	        
	 
		  
</section>
		
    <div style="clear:both;">
      
    </div>
    <div id="comentarios"></div>
    <div style="clear:both;"></div>
<footer>

	</footer>


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