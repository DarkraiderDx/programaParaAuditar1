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
		if ((form.tiem.value==""))
	{
		men+= "Escriba un tiempo en el campo \"Tiempo\". \n";
		n=1;
	}
	 if(form.ben.value=="")
	 {
		men+= "Escriba Beneficiario en el campo \"Beneficiario\". \n";
		n=1;
	}
	 if(form.ob_general.value=="")
	 {
		men+= "Escriba objetivo general en el campo \"Obj.general\". \n";
		n=1;
	}
	if(form.ob_especificos.value=="")
	 {
		men+= "Escriba objetivos Especificos en el campo \"Obj.especificos\". \n";
		n=1;
	}
	if(form.resultados.value=="")
	 {
		men+= "Escriba resultados en el campo \"Resultados\". \n";
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
        <li class="subme "onClick="direccion('index.php')" id="active1">INICIO<br><i class="icon1-home"></i></li>
        <li class="subme"onClick="direccion('quienes_somos.php')">QUIENES SOMOS<br><i class="icon1-question-sign"></i></li>
        <li class="subme"onClick="direccion('proyectos.php')">PROYECTOS<br><i class="icon1-briefcase "></i></li>
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
        <li class="subme"onClick="direccion('noticias.php')">NOTICIAS<br><i class="icon1-list-alt"></i></li>
        <li class="subme"onClick="direccion('foro.php')">FORO<br><i class="icon1-volume-up"></i></li>
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

	
   
   
   
	
   <div style=" border:1px dashed  #666666; margin-bottom:5px; "  ><div style="float:left; border:1px dashed #666666; "> <?php  echo '<p style="color:#4e9339;font-size:17px;">SISTEMA DEL ADMINISTRADOR</p>';?></div>
     <?php if($fill['imagen']==''){?>
     <img src="registro/defecto.png"  class="foto" />
     <?php }else {?>
         <img src="registro/<?php echo $fill['imagen']; ?>" class="foto" /><?php }?>
          <div style=" float:rigth;"> <?php  echo '<p style="color:#4e9339;">BIENVENIDO</p>';?>
         
			
    <p style="color:#000000;   "><?php echo $fill['nombre'].' '.$fill['apellido'];?></p></div><?php echo'<div style="margin-bottom:10px;text-align:center; "><a  href="cerrar session.php"><button class="btn btn-danger"style="width:160px;"><i class="icon1-remove"></i>Salir del Sistema</button></a></div>';?>  </div>
      
       
       
        
    
         <?php ?>
 <div id="menu_lateral">

	<ul class="menu">
		<li class="item1"><a href="#">Proyectos </a>
			
			<ul>
            	<li class="subitem1"><a href="proyectos.php">Registrar Proyecto</a></li>
				<li class="subitem1"><a href="editar_proyectos.php">Actualizar Proyecto</a></li>
				<li class="subitem2"><a href="eliminar_proyectos.php">Eliminar Proyecto</a></li>
				
			</ul>
		
		</li>
		
		
	</ul>

</div>
  </div><!--fin lef-->

  
	<div id="central1">
   <form action="pro_atualizar_proyectos.php"
            method="post" id="fomColor" name="form">
		       
            <legend>
      
              <?php $link=conectarse();
			$id=$_GET['id'];
			$sql="select * from proyectos where id_proyecto='$id'";
			$resultado=mysql_query($sql,$link);
			$row=mysql_fetch_array($resultado);
			?>
           </legend>
		          <table width="519" align="center" class="comentario1">
		            
		            <tr>
                    <td colspan="2" class="alert" align="left"  height="25px;"style="margin-top:5px; width:100%; color:#0066CC; ">Formulario de Actualizacion de Proyectos</td>
		              <td align="left">&nbsp;</td>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td align="left">NOMBRE
	                  DEL PROYECTO
		                <input type="hidden" name="id" value="<?php echo $id; ?>"/></td>
		              <td><textarea name="nom" cols="30" required class="textarea" id="nom"><?php echo $row['nombre'];?></textarea></td>
	                </tr>
		            <tr>
		              <td width="173" align="left">DEPARTAMENTO</td>
		              <td width="279" align="left"><label for="select">
		                <select name="departamento"   >
		                  <option value="0"  ><?php echo $row['departamento'];?></option>
                         
		                  <?php $d=mysql_query("select * from ciudad",$link);
						  while($f=mysql_fetch_array($d))
						  {?>
		                  <option>
		                    <?php 
							  echo $f['ciudad'];
							   ?>
	                      </option>
		                  <?php } ?>
	                    </select>
		              </label></td>
	                </tr>
		            <tr>
		              <td align="left">MUNICIPIO</td>
		              <td align="left" id="myDiv"><input name="municipio" type="text" required class="input1"  value="<?php echo $row['municipio'];?>"  size="35" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td align="left">COMUNIDAD</td>
		              <td align="left" id="myDiv2"><input name="comunidad" type="text" required class="input1" value="<?php echo $row['comunidad'];?>"  size="35" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td align="left">TIEMPO DE EJECUCION</td>
		              <td align="left"><input name="tiem" type="text" required class="input1" id="tiem" value="<?php echo $row['tiempo_ejc'];?>" size="35" maxlength="34"></td>
	                </tr>
		            <tr>
		              <td align="left">BENEFICIARIO</td>
		              <td align="left"><input name="ben" type="text" required id="ben" class="input1" value="<?php echo $row['beneficiario'];?>" size="35" maxlength="34"></td>
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
		              <td align="left"><label for="obje"></label>
	                  <textarea name="ob_general" class="textarea" id="ob_general" cols="30" rows="5"><?php echo $row['ob_general']; ?></textarea></td>
	                </tr>
		            <tr>
		              <td align="left">OBJETIVOS ESPECIFICOS</td>
		              <td align="left"><textarea name="ob_especificos" id="ob_especificos" class="textarea" cols="30" rows="5"><?PHP echo $row['ob_especificos'];?></textarea></td>
	                </tr>
		            <tr>
		              <td align="left">RESULTADOS  ESPERADOS</td>
		              <td align="left"><textarea name="resultados" id="resultados" cols="30" class="textarea" rows="5"><?php echo $row['resultados']; ?></textarea></td>
	                </tr>
		            <tr>
		              <td colspan=2><label for="img"></label></td>
	                </tr>
		            <tr>
		              <td><input name="Enviar" type=submit class="btn" value="Enviar Proyecto" onClick="VerDatos()"></td>
		              <td align="center"><input name="Enviar2" type=reset class="btn" value="Limpiar"></td>
	                </tr>
	              </table>
	            
      </form>
    <?php }?>
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
