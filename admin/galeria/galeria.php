<?php session_start();
require_once('conexion.php');
include_once "funciones.php";
$link=conectarse();


/*if(!isset($_SESSION['clave'])) 
{
	
  header('Location: loguin.php'); 
  exit()
}*/?>
<!DOCTYPE HTML>
<html>
<head>
<!-- -->
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script>
<script src="js/jquery_002.js" type="text/javascript"></script>
<script language="javascript" src="js/jquery.js" ></script>

<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    




   

<link href="css/jquery.css" rel="stylesheet" type="text/css" media="screen">
<script src="js/jquery1.js" type="text/javascript"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

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
		if ((form.departamento.value==""))
	{
		men+= "Escriba un departamentoen el campo \"Departamento\". \n";
		n=1;
	}
	 if(form.municipio.value=="")
	 {
		men+= "Escriba municipio en el campo \"Municipio\". \n";
		n=1;
	}
	 if(form.comunidad.value=="")
	 {
		men+= "Escriba comunidad en el campo \"comunidad\". \n";
		n=1;
	}
	if(form.produc.value=="")
	 {
		men+= "Escriba un producto en el campo \"producto\". \n";
		n=1;
	}
	if(form.cant.value=="")
	 {
		men+= "Escriba cantidad en el campo \"cantidad\". \n";
		n=1;
	}
	if(form.tipo.value=="")
	 {
		men+= "Escriba tipo de servicio en el campo \"tipo\". \n";
		n=1;
	}
	if(form.det.value=="")
	 {
		men+= "Escriba un detalle en el campo \"detalle\". \n";
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

  <div id="menu">
    <nav>
      <ul class="men">
        <li class="subme "onClick="direccion('index.php')" >INICIO<br><i class="icon1-home"></i></li>
        <li class="subme"onClick="direccion('quienes_somos.php')">QUIENES SOMOS<br><i class="icon1-question-sign"></i></li>
        <li class="subme"onClick="direccion('proyectos.php')">PROYECTOS<br><i class="icon1-briefcase "></i></li>
        <li class="subme"onClick="direccion('servicios.php')"id="active1">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
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
  
	    

  </div></div><div id="column-left1" >
 <div id="menu_lateral">
                
                <ul class="menu">
		<li class="item1" style="text-align:left;"><a href="servicios.php">Servicios</a></li>
			
		
		<li class="item2" style="text-align:left;"><a>Comercializacion</a>
			<ul>
				<li class="subitem1"><a href="servicios.php">Registrar Venta-Compra</a></li>
				<li class="subitem2"><a href="editar_servicios.php">Editar Venta-Compra</a></li>
                <li class="subitem2"><a href="eliminar_servicios.php">Eliminar Venta-Compra</a></li>
				
			</ul>
		</li>
		<li class="item3" style="text-align:left;"><a>Eventos Formativos</a>
			
		<ul>
				<li class="subitem1"><a href="reg_evento.php">Registrar Evento</a></li>
				<li class="subitem2"><a href="editar_evento.php">Editar Evento</a></li>
				<li class="subitem2"><a href="eliminar_evento.php">Eliminar Evento</a></li>
			</ul>
			
		</li>
		
	</ul>

</div>
  </div><!--fin lef-->

  
	<div id="central1">
    <form action="reg_servicio.php"
            method="post" enctype="multipart/form-data" id="fomColor" name="form">
		       
            <?php if((!isset($_GET['men'])))
		  {
			 			  
		  }
		  else 
			{  
			$men=$_GET['men'];
			echo  "<center><div style='width:540px; margin-top:5px;'>".mensajes($_GET['men'],'verde')."</div></center>";
			}?>
		          <table align="center" class="comentario1">
		            
		            <tr>
                    <td colspan="2" class="alert" align="left"  height="25px;" style="margin-top:5px;  color:#0066CC; ">Formulario de registro de servicios</td>
		              <td align="left">&nbsp;</td>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td align="left">NOMBRE PROPIETARIO</td>
		              <td><input name="nom" type="text" required id="titu"  class="input1"size="35" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td width="203" align="left">DEPARTAMENTO</td>
		              <td width="288"><label for="select"></label>
		                <select name="departamento"id="departamento" >
		                  <option value="0"  >Seleccione departamento</option>
                        </select></td>
	                </tr>
                    
		            <tr>
		              <td align="left">MUNICIPIO</td>
		              <td align="left" id="myDiv"><select name="municipio" id="municipio">
		                  <option value="0"  >Seleccione municipio</option>
                        </select></td>
	                </tr>
		            <tr>
		              <td align="left">COMUNIDAD</td>
		              <td align="left" id="myDiv2"><select name="comunidad"id="comunidad" >
		                  <option value="0"  >Seleccione comunidad</option>
                        </select></td>
	                </tr>
		            <tr>
		              <td align="left">PRODUCTO</td>
		              <td align="left"><input name="produc" type="text"  class="input1"required id="titu3" size="35" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td align="left">CANTIDAD</td>
		              <td align="left"><input name="cant" type="text" class="input1" required id="titu2" size="35" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td align="left">TIPO</td>
		              <td align="left"><select name="tipo" id="select4">
		                <option>venta</option>
		                <option>compra</option>
	                  </select></td>
	                </tr>
		            <tr>
		              <td align="left">DETALLE</td>
		              <td align="left"><label for="textarea"></label>
	                  <textarea name="det" id="textarea" cols="30" class="textarea" rows="5"></textarea></td>
	                </tr>
		            <tr>
		              <td colspan=2><label for="img"></label>
	                  <input type="file" name="img" id="img"></td>
	                </tr>
		            <tr>
		              <td><input name="Enviar"  type="button"  class="btn " value="Enviar " onClick="VerDatos()"></td>
		              <td align="center"><input name="Enviar2" class="btn" type=reset value="Limpiar"></td>
	                </tr>
	              </table>
                  
	            
      </form>
    
	</div><!--fin central-->
    
	
	<div id="footer"><p>DIRECCION:
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p></div>
</div>

    
 
</body>
</html>
