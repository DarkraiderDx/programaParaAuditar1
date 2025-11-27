<?php session_start();
require_once('conexion.php');
include_once "funciones.php";
$link=conectarse();


if(!isset($_SESSION['clave'])) 
{
	
  header('Location: loguin.php'); 
  exit();
}?>
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
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
        <li class="subme"onClick="direccion('noticias.php')">NOTICIAS<br><i class="icon1-list-alt"></i></li>
        <li class="subme"onClick="direccion('foro.php')"id="active1">FORO<br><i class="icon1-volume-up"></i></li>
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
  
	    

  </div></div>
 
<div id="column-left1">
  <?php
   

 $us=$_SESSION['cod_user'];

$sql=mysql_query("select * from administracion where correo='$us'",$link);
$fila=mysql_fetch_assoc($sql);

$sql1=mysql_query("select * from planificacion where correo='$us'",$link);
$fila1=mysql_fetch_assoc($sql1);

$sql2=mysql_query("select * from direccion where correo='$us'",$link);
$fila2=mysql_fetch_assoc($sql2);

$sql3=mysql_query("select * from reg_proyecto where correo='$us'",$link);
$fila3=mysql_fetch_assoc($sql3);
?>
 <?php if($sql||$sql1||$sql2||$sql3)
{


//$d=mysql_query("select id_personal from personal where usuario='$us'",$link);
//$fid=mysql_fetch_array($d);
if($fila['correo']==$us)
{
	$ides=$fila['clave'];
	$n=0;
	$n1=1;

	$sql=mysql_query("select * from informacion where clave='$ides'",$link);
	$sqll=mysql_query("select * from administracion where clave='$ides'",$link);
$fill=mysql_fetch_assoc($sqll);
}elseif($fila1['correo']==$us)
{
	$ides=$fila1['clave'];
	$n=0;
	$n1=1;
	$sql=mysql_query("select * from informacion where clave='$ides'",$link);
	$sqll=mysql_query("select * from planificacion where clave='$ides'",$link);
	$fill=mysql_fetch_assoc($sqll);
}
elseif($fila2['correo']==$us)
{
	$ides=$fila2['clave'];
	$n=0;
	$n1=1;
	$sql=mysql_query("select * from informacion where clave='$ides'",$link);
	$sqll=mysql_query("select * from direccion where clave='$ides'",$link);
	$fill=mysql_fetch_assoc($sqll);

}elseif($fila3['correo']==$us)
{
	$ides=$fila3['clave'];
	$n=0;
	$n1=1;
	$sql=mysql_query("select * from informacion where clave='$ides'",$link);
	$sqll=mysql_query("select * from reg_proyecto where clave='$ides'",$link);
$fill=mysql_fetch_assoc($sqll);
}


?>

	
   
   
   
	
   
     
           <?php  echo '<p style="color:#4e9339;">BIENVENIDO</p>';?>
         
			
    <p style="color:#000000;  "><?php echo $fill['nombre'].' '.$fill['apellido'];?></p></div><?php echo'<div style="margin-bottom:10px;text-align:right; "><a  href="cerrar session.php"><button class="btn btn-danger"style="width:160px;"><i class="icon1-remove"></i>Salir del Sistema</button></a></div>';?>  </div>
      
       
       
        
    
         <?php ?>
  </div>
  
	<div id="central1" style="width:90%; margin-bottom:50px;">
     <center><form action="borrar_personal_proyecto.php" name="form"
            method="post" enctype="multipart/form-data" id="fomColor">
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
            <table border="0" width="95%" cellpadding="0" cellspacing="3" >
              <tr >
              <td width="3%" align="center" valign="middle" bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Nº</span></td>
<td width="27" align="center" valign="middle" bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Titulo</span></td>              
<td width="134" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Contenido</span></td>

                <td width="3%" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Fecha</span></td>
                <td width="3%" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Operacion</span></td>
                               
              
              </tr><?php $i=1;?>
              <?php do { ?>
              <tr >
                <td align="left" width="3%" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $i; ?></td>
                <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $row_r_listatemas['tit_msj_foro']; ?></td>
               
                <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $row_r_listatemas['cont_msj_foro']; ?></td>
                <td align="left" width="3%" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $row_r_listatemas['fecha_hora_msj_foro']; ?></td>
                <td align="left" width="3%" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><a href="foro.php?temab=<?php echo $row_r_listatemas['id_msj_foro']; ?>" style=" cursor:pointer;  color:#396A93; border-style:none;"><i class="icon-eye-close"></i>Eliminar</a></td>
                 
                
                
              </tr>
          <?php $i++; ?>
          <?php } while ($row_r_listatemas = mysql_fetch_assoc($r_listatemas)); ?>
            </table>
             
	</form><?php } ?></center>
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
