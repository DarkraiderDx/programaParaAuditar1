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
function VerDatos()
	{
		var men="";
		var n=0;
		if((form.titu.value==""))
		{
		men+= "Escriba un tiutlar en el campo \"titular\". \n";
			n=1;
		}
		if ((form.conte.value==""))
	{
		men+= "Escriba el contenido el campo \"contenido\". \n";
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
   </div></div><div id="column-left1" style="width:270px;" >
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

  
	<div id="central1" style="width:67%;">
	  <center><form action="actualizado_personal_dir.php"
            method="post" enctype="multipart/form-data" id="fomColor">
            <?php if((!isset($_GET['men'])))
		  {
			 			  
		  }
		  else 
			{  
			$men=$_GET['men'];
			echo  "<center><div style='width:540px; margin-top:5px;'>".mensajes($_GET['men'],'verde')."</div></center>";
			}?>
		       <?php $link=conectarse();
			$id=$_GET['id'];
			$sql="select * from direccion where id_direccion='$id'";
			$resultado=mysql_query($sql,$link);
			$fil=mysql_fetch_array($resultado);
			$cla=$fil['clave'];
			$sql1="select * from usuarios where clave='$cla'";
			$resultado1=mysql_query($sql1,$link);
			$f=mysql_fetch_array($resultado1);
			$cl=$f['clave'];
			?>
            <legend>
        <h2 style="color:#333333;">&nbsp;</h2></legend>
        <table class="comentario1">
		            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
		            <tr>
                    <td colspan="8" class="alert" align="left"  height="25px;" style="margin-top:5px;  color:#0066CC; ">Formulario de Actualizacion de Personal de Direccion</td>
          </tr>
		            <tr>
                    
		              <td align="left">NOMBRE</td>
		              <td><input  class="input1"name="nom" type="text" required id="titu" value="<?php echo $fil['nombre']; ?>" size="30" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td width="102" align="left">APELLIDO
	                  <input type="hidden" name="cla" value="<?php echo $cl;?>"/></td>
		              <td width="201"><label for="select">
		                <input class="input1" name="apel" type="text" required id="titu3" size="30" maxlength="34" value="<?php echo $fil['apellido']; ?>">
		              </label></td>
	                </tr>
		            <tr>
		              <td align="left">EMAIL</td>
		              <td align="left"><input name="correo" type="email" class="input1" required id="correo" size="30" maxlength="34" value="<?php echo $fil['correo']; ?>"></td>
	                </tr>
		            <tr>
		              <td align="left">TELEFONO</td>
		              <td align="left"><input name="telefono" type="text" class="input1" required id="titu6" size="30" maxlength="34" value="<?php echo $fil['telefono']; ?>"></td>
	                </tr>
		            <tr>
		              <td align="left">SKIPE</td>
		              <td align="left"><input name="skipe" type="text" class="input1" required id="titu4" size="30" maxlength="34" value="<?php echo $fil['skipe']; ?>"></td>
	                </tr>
		            <tr>
		              <td align="left">CARGO</td>
		              <td align="left"><input name="cargo" type="text" class="input1"required id="titu2" size="30" maxlength="34" value="<?php echo $fil['cargo']; ?>"></td>
	                </tr>
		            <tr>
		              <td align="left">CLAVE</td>
		              <td align="left"><input name="clave" type="text" class="input1" required id="titu5" size="30" maxlength="34" value="<?php echo $fil['clave']; ?>"></td>
	                </tr>
		            <tr>
		              <td height="29" align="left">TIPO USUARIO</td>
		              <td align="left"><select name="ti" id="area">
		                <option>
		                  <?php if($f['tipo_user']=='a'){ $var='Administrador'; }else{ $var='Usuario'; } echo $var; ?>
	                    </option>
		                <option>Administrador</option>
		                <option>Usuario</option>
	                  </select></td>
          </tr>
		            
		            <tr>
		              <td colspan=2><label for="img"></label>
	                  <input type="file" name="img" id="img"></td>
	                </tr>
		            <tr>
		              <td><input name="Enviar" type=submit class="btn" value="Registrar"></td>
		              <td align="center"><input name="Enviar2" type=reset class="btn" value="Limpiar"></td>
	                </tr>
        </table><?php } ?>
	  </form></center>
    
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
