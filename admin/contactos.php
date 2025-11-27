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
        <li class="subme"onClick="direccion('foro.php')">FORO<br><i class="icon1-volume-up"></i></li>
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
	<div id="central1" style="width:95%;">
   <center>
     <span style="color:#333333;">CONTACTOS</span>
   </center>
            <?php

if((!isset($_GET['men'])))
		  {
			 			  
		  }
		  else 
			{  
			$men=$_GET['men'];
			echo  "<center><div style='width:540px; margin-top:5px;'>".mensajes($_GET['men'],'verde')."</div></center>";
			}
$sql=mysql_query("select * from imagen",$link);

?><form method="post" action="borrar_contactos.php" name="form">
<div align="center"><h2 style="color:#333333;">&nbsp;</h2></div>
<?php


$sql=mysql_query("select * from contactos",$link);

?>

<center><table width="80%" border="0" cellspacing="3"   >
  <tr>
  <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Nº</span></td>
    <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">M</span></td>
    <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Nombre</span></td>
    <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Correo</span></td>
        <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Skipe</span></td>
    <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Telefono</span></td>
    <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Pais</span></td>
    <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Ciudad</span></td>
    <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Motivo</span></td>
    <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Detalle</span></td>
    <td align="center" bgcolor="#CC9900"><span style="color:#ffffff; font-size:14px; text-align: center;">Tipo de Contacto</span></td>
  
  </tr>
  <?php 
  $n=1;
while($fila=mysql_fetch_array($sql)){
?>
  <tr>
  <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><?php echo $n++; ?></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><input type="checkbox" name="casilla[]" value="<?php echo $fila['id_contactos']; ?>"></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><?php echo $fila['nombre']; ?></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><?php echo $fila['email']; ?></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $fila['skipe']; ?></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><?php echo $fila['telefono']; ?></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><?php echo $fila['pais']; ?></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><?php echo $fila['ciudad']; ?></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><?php echo $fila['motivo']; ?></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><div style="width:200px; word-wrap:break-word; border:1px solid  rgb(0,0,102);"> <?php echo $fila['detalle'];?></div></td>
    <td style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:12px;"><?php echo $fila['tipo_contacto']; ?></td>
    
    
  </tr>
  <?php
}
?>
</table>

</center>

<center><input type="submit"  value="Eliminar" style=" cursor:pointer; background:#ffffff; color:#396A93; border-style:none;" />|
          
            
          
        <a style="color:#396A93; text-align: left; font-size:12px;" href="javascript:seleccionar_todo()">Marcar todos</a> |
        <a style="color:#396A93; font-size:12px" href="javascript:deseleccionar_todo()">Desmarcar Todos</a>
</center>
</form> 
          </td>
          
        </tr>
      </table><?php }?>

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
