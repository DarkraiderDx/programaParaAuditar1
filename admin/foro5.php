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


<link rel="stylesheet" media="screen" href="css/CAL_CSS_estilos.css" />

<script src="js/CAL_JS_modernizr.js"></script>
<script src="js/CAL_JS_comportamiento.js"></script>    
   

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
		if((form.apel.value==""))
		{
		men+= "Escriba su apellido en el campo \"Apellido\". \n";
			n=1;
		}
		if (form.correo.value.indexOf('@') == -1)
	{
		men+= "No es un correo valido en el campo \Email\". \n";
		n=1;
	}
	if((form.telefono.value.length< 9) || isNaN(form.telefono.value))
	{
		men+= "Escriba un teléfono correcto en el campo \"Teléfono\". \n";
		n=1;
	}
	if(form.cargo.value=="")	
	{
		men+= "Escriba Cargo en el campo \"Cargo\". \n";
		n=1;
	}
		if(form.clave.value=="")	
	{
		men+= "Escriba una clave en el campo \"Clave\". \n";
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
    
<script language="javascript">
 function seleccionar_todo(){
   for (i=0;i<document.form.elements.length;i++)
      if(document.form.elements[i].type == "checkbox")
         document.form.elements[i].checked=1
} 
</script>
<script language="javascript">
function deseleccionar_todo(){
   for (i=0;i<document.form.elements.length;i++)
      if(document.form.elements[i].type == "checkbox")
         document.form.elements[i].checked=0
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
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
        <li class="subme"onClick="direccion('noticias.php')">NOTICIAS<br><i class="icon1-list-alt"></i></li>
        <li class="subme"onClick="direccion('foro/index.php')">FORO<br><i class="icon1-volume-up"></i></li>
        <li class="subme"onClick="direccion('galeria.php')">GALERIA<br><i class="icon1-picture"></i></li>
        <li class="subme"onClick="direccion('contactos.php')">CONTACTENOS<br><i class="icon1-envelope"></i></li>
        <li class="subme"onClick="direccion('personal.php')"id="active1">PERSONAL<br><i class="icon1-user"></i></li> 
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
  
	    

  </div></div><div id="column-left1" style="width:270px;" >
 <div id="menu_lateral" style="width:250px;">
                
                <ul class="menu">
					
		<li class="item2"><a>Personal</a>
			<ul>
				<li class="subitem1"><a href="personal.php">Registrar Personal</a></li>
				<li class="subitem2"><a href="editar_personal_administrativo.php">Actualizar Personal Administrativo</a></li>
				<li class="subitem2"><a href="editar_personal_planificacion.php">Actualizar Personal Planificacion</a></li>                
    			<li class="subitem2"><a href="editar_personal_direccion.php">Actualizar Personal Direccion</a></li>                
   				<li class="subitem2"><a href="editar_personal_proyectos.php">Actualizar Personal Proyectos</a></li>
                <li class="subitem2"><a href="eliminar_personal_administrativo.php">Eliminar Personal Administrativo</a></li>                
                <li class="subitem2"><a href="eliminar_personal_planificacion.php">Eliminar Personal Planificacion</a></li>
                <li class="subitem2"><a href="eliminar_personal_direccion.php">Eliminar Personal Direccion</a></li>
                <li class="subitem2"><a href="eliminar_personal_proyectos.php">Eliminar Personal Proyectos</a></li>
                
                <li class="subitem2"><a href="rec_informacion_personal.php">Recibir Informacion</a></li>
                <li class="subitem2"><a href="enviar_informacion_personal.php">Enviar Informacion</a></li>
				
			</ul>
		</li>
		
		
	</ul>

</div>
  </div><!--fin lef-->

  
	<div id="central1" style="width:70%">
<?php if ((isset($_GET['temab'])) && ($_GET['temab'] != "")) {
  $deleteSQL = sprintf("DELETE FROM foromensajes WHERE id_msj_foro=".$_GET['temab']);

  
  $Result1 = mysql_query($deleteSQL, $link) or die(mysql_error());

//  $deleteGoTo = "foro.php";
//  if (isset($_SERVER['QUERY_STRING'])) {
//    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
//    $deleteGoTo .= $_SERVER['QUERY_STRING'];
//  }
//  header(sprintf("Location: %s", $deleteGoTo));
}

$maxRows_r_listatemas = 10;
$pageNum_r_listatemas = 0;
if (isset($_GET['pageNum_r_listatemas'])) {
  $pageNum_r_listatemas = $_GET['pageNum_r_listatemas'];
}
$startRow_r_listatemas = $pageNum_r_listatemas * $maxRows_r_listatemas;


$query_r_listatemas = "SELECT * FROM foromensajes ORDER BY fecha_hora_msj_foro DESC";
$query_limit_r_listatemas = sprintf("%s LIMIT %d, %d", $query_r_listatemas, $startRow_r_listatemas, $maxRows_r_listatemas);
$r_listatemas = mysql_query($query_limit_r_listatemas,$link) or die(mysql_error());
$row_r_listatemas = mysql_fetch_assoc($r_listatemas);

if (isset($_GET['totalRows_r_listatemas'])) {
  $totalRows_r_listatemas = $_GET['totalRows_r_listatemas'];
} else {
  $all_r_listatemas = mysql_query($query_r_listatemas);
  $totalRows_r_listatemas = mysql_num_rows($all_r_listatemas);
}
$totalPages_r_listatemas = ceil($totalRows_r_listatemas/$maxRows_r_listatemas)-1;

?>

     <table width="80%" border="0"  rules="cols"  cellpadding="0" cellspacing="3" >
        <tr >
          <td bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">N&ordm;</span></td>
          <td bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">TITULO</span></td>
          <td  bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">CONTENIDO</span></td>
          <td bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">FECHA</span></td>
          <td  bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Operacion</span></td>
        </tr><?php $i=1;?>
        <?php do { ?>
          <tr >
            <td  style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $i; ?></td>
            <td  style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $row_r_listatemas['tit_msj_foro']; ?></td>
            <td  style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $row_r_listatemas['cont_msj_foro']; ?></td>
            <td  style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $row_r_listatemas['fecha_hora_msj_foro']; ?></td>
            <td  style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><div align="center"><a href="foro.php?temab=<?php echo $row_r_listatemas['id_msj_foro']; ?>">Borrar</a></div></td>
          </tr>
          <?php $i++; ?>
          <?php } while ($row_r_listatemas = mysql_fetch_assoc($r_listatemas)); ?>
      </table>
  </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <table border="0">
        <tr>
          <td><?php if ($pageNum_r_listatemas > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_r_listatemas=%d%s", $currentPage, 0, $queryString_r_listatemas); ?>"><img src="First.gif" border="0" /></a>
            <?php } // Show if not first page ?></td>
          <td><?php if ($pageNum_r_listatemas > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_r_listatemas=%d%s", $currentPage, max(0, $pageNum_r_listatemas - 1), $queryString_r_listatemas); ?>"><img src="Previous.gif" border="0" /></a>
            <?php } // Show if not first page ?></td>
          <td><?php if ($pageNum_r_listatemas < $totalPages_r_listatemas) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_r_listatemas=%d%s", $currentPage, min($totalPages_r_listatemas, $pageNum_r_listatemas + 1), $queryString_r_listatemas); ?>"><img src="Next.gif" border="0" /></a>
            <?php } // Show if not last page ?></td>
          <td><?php if ($pageNum_r_listatemas < $totalPages_r_listatemas) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_r_listatemas=%d%s", $currentPage, $totalPages_r_listatemas, $queryString_r_listatemas); ?>"><img src="Last.gif" border="0" /></a>
            <?php } // Show if not last page ?></td>
        </tr>
      </table>
    

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
