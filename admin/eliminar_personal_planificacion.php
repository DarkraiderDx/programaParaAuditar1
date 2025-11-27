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
        <li class="subme"onClick="direccion('foro.php')">FORO<br><i class="icon1-volume-up"></i></li>
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
  
	    

  </div></div>
  <div id="column-left1"style="width:270px;">
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

	
   
   
   
	
  <center> <div style=" border:1px dashed  #666666; margin-bottom:5px; "  ><div style="float:left; border:1px dashed #666666; "> <?php  echo '<p style="color:#4e9339;font-size:17px;">SISTEMA DEL ADMINISTRADOR</p>';?></div>
     <?php if($fill['imagen']==''){?>
     <img src="registro/defecto.png"  class="foto" />
     <?php }else {?>
         <img src="registro/<?php echo $fill['imagen']; ?>" class="foto" /><?php }?>
          <div style=" float:rigth;"> <?php  echo '<p style="color:#4e9339;">BIENVENIDO</p>';?>
         
			
    <p style="color:#000000;   "><?php echo $fill['nombre'].' '.$fill['apellido'];?></p></div><?php echo'<div style="margin-bottom:10px;text-align:center; "><a  href="cerrar session.php"><button class="btn btn-danger"style="width:160px;"><i class="icon1-remove"></i>Salir del Sistema</button></a></div>';?>  </div></center>
      
       
       
        
    
         <?php ?>
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
     <form action="borrar_personal_planificacion.php" name="form"
            method="post" enctype="multipart/form-data" id="fomColor">
            Eleminar personal de Planificacion
            <?php if((!isset($_GET['men'])))
		  {
			 			  
		  }
		  else 
			{  
			$men=$_GET['men'];
			echo  "<center><div style='width:540px; margin-top:5px;'>".mensajes($_GET['men'],'verde')."</div></center>";
			}?>
            <table border="0" width="95%" cellpadding="0" cellspacing="3" >
              <tr >
              <td width="27" align="center" valign="middle" bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Nº</span></td>
<td width="27" align="center" valign="middle" bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Marcar</span></td>              
<td width="134" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Imagen</span></td>

                <td width="134" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Nombre</span></td>
                <td width="94" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Apellido</span></td>
                <td width="68" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Correo</span></td>
<td width="68" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Skipe</span></td>
<td width="68" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Telefono</span></td>                
<td width="68" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">Cargo</span></td>
<td width="68" align="left"bgcolor="#CC9900"><span style="color:#ffffff; font-size:16px; text-align: center;">clave</span></td>               
              
              </tr>
              <?php 
			  $sql=mysql_query("select * from planificacion",$link);
$n=1;
while($fila=mysql_fetch_array($sql)){
?>
              <tr >
                <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $n++; ?></td>
                <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><input type="checkbox" name="casilla[]" value="<?php echo $fila['id_planificacion']; ?>"></td>
                <?php if($fila['imagen']){ ?>
                  <td align="center"  width="71" style=" background:#E5E5E5;font-size:13px;word-wrap: break-word;"><img src="registro/<?php echo $fila['imagen']; ?>" width="50" height="50"  / ></td>
                  <?php } else{?>
                  <td align="center"  width="71" style=" background:#E5E5E5;font-size:14px;word-wrap: break-word;"><img src="registro/defecto.png" width="50" height="50"  / ></td>
                    <?php } ?>
                <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $fila['nombre']; ?></td>
                <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $fila['apellido']; ?></td>
                <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $fila['correo']; ?></td>
                 <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $fila['skipe']; ?></td>
                  <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $fila['telefono']; ?></td>
                   <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $fila['cargo']; ?></td>
                    <td align="left" style="margin-left:2px; margin-right:2px; background:#E5E5E5; font-size:14px;"><?php echo $fila['clave']; ?></td>
                
                
              </tr>
              <?php
}
?>
            </table>
             <input type="submit"  value="Eliminar" style=" cursor:pointer; background:#ffffff; color:#396A93; border-style:none;" />|
          
            
          
           <a style="color:#396A93; text-align: left; font-size:12px;" href="javascript:seleccionar_todo()">Marcar todos</a> |
           <a style="color:#396A93; font-size:12px" href="javascript:deseleccionar_todo()">Desmarcar Todos</a>
	</form><?php } ?>
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
