<?php session_start();
require_once('conexion.php');
$link=conectarse();


if(!isset($_SESSION['clave'])) 
{
	
  header('Location: loguin.php'); 
  exit();
}
?>
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
<script language="javascript" src="js/jquery.js" ></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    




<script src="js/direccion.js" type="text/javascript"></script>    

<link href="css/jquery.css" rel="stylesheet" type="text/css" media="screen">
<script src="js/jquery1.js" type="text/javascript"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script language="javascript">
 function seleccionar_todo(){
   for (i=0;i<document.form1.elements.length;i++)
      if(document.form1.elements[i].type == "checkbox")
         document.form1.elements[i].checked=1
} 
</script>
<script language="javascript">
function deseleccionar_todo(){
   for (i=0;i<document.form1.elements.length;i++)
      if(document.form1.elements[i].type == "checkbox")
         document.form1.elements[i].checked=0
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
		if (form.email.value.indexOf('@') == -1)
	{
		men+= "No es un correo valido en el campo \Email\". \n";
		n=1;
	}
	if(form.come.value=="")
		{
			men+= "Debe escribir un comentario en el campo  \mensaje\". \n";
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
  
	    

  </div></div><div id="column-left" >
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
</div><!--fin lef-->

  
	<div id="central">
    <!-- slider-holder -->
   
      <div id="co">
        <?php   if((!isset($_GET['men'])))
		  {
			 			  
		  }
		  else 
			{  
			$men=$_GET['men'];
			echo'<p style="color:#DC0A48; font-size:15px;">'. $men.'</p>';
			}
$sql=mysql_query("select * from eventos",$link);

?>Eliminar Comentarios
        <form action="borrar_comentarios.php" name="form1" method="post" enctype="multipart/form-data" id="fomColor">
          <?php

$query=("SELECT * FROM comentario ORDER BY id_comentario DESC");
$consulta=mysql_query($query,$link);

while($row=mysql_fetch_assoc($consulta))

{

	echo '<div  class="alert-info" style="border-radius:5px;">';
echo '	<input type="checkbox" name="casilla[]" value="'.$row['id_comentario'].'" ';
	echo '<font color="#0000CC">'.$row['nombre'].'</font><br />';
	echo '<font style="color:#384572">'.$row['email'].'</font><br />';

	echo '</div>';
	echo '<p class="texto">';
	echo $row['texto'];
	echo '</p>';
	echo '<div>';

	echo '<font size="-1" color="#666666">Publicado el dia '.$row['fecha'].'</font>';
		
	echo '<hr></div>';

	

	}mysql_free_result($consulta);

?>
          <input   style=" font-size:12px; cursor:pointer; background:#ffffff; color:#396A93; border-style:none;" type="submit" value="Eliminar" />|
          <a style="color:#396A93; text-align: left;font-size:12px;" href="javascript:seleccionar_todo()">Marcar todos</a> | <a style="color:#396A93;font-size:12px;" href="javascript:deseleccionar_todo()">Desmarcar Todos</a>
        </form>
      </div>
    
    <!-- end of slider-holder -->
    <div style="clear:both;"></div>
    <?php 
			$sql_sl="select * from opciones_generales ";
			$resultado_sl=mysql_query($sql_sl,$link);
			$fil_sl=mysql_fetch_array($resultado_sl);
			$sql3="select * from opciones_generales ";
			$resultado1=mysql_query($sql3,$link);
			$fil=mysql_fetch_array($resultado1);
			?>
    <form action="configu_sli.php" method="post" enctype="multipart/form-data" name="form">
        <table width="600" border="0" cellpadding="0" cellspacing="3" class="page_4">
          <tr>
            <td  colspan="3"align="center" bgcolor="#4682B4"><span style="color:#ffffff; font-size:16px; text-align: center;">Cambiar Slider</span></td>
          </tr>
          <tr>
            <td colspan="3" style="font-size:13px;">cambiar Imagenes de slider(imagen:1)</td>
          </tr>
          <tr>
            <td width="24%" bgcolor="#E2E2E2"><img style="padding-top:3px; padding-bottom:3px; font-size:13px; padding-left:3px;"  src="images/slider/<?php echo $fil_sl['ima1'];?>" alt=" no existe logo" width="140"  height="60"/></td>
            
            <td width="4%" bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><input type="file" name="ima1" id="fileField" >
            <input type="hidden" name="id" value="<?php echo $fil['id'];?>"/></td>
          </tr>
          <tr>
            <td bgcolor="#E2E2E2" style="font-size:13px;">Descripcion de Imagen1</td>
            <td bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><label for="textfield"></label>
            <textarea name="des_sl_1" cols="50" class="textarea" id="textfield"></textarea></td>
          </tr>
          <tr>
            <td colspan="3" style="font-size:13px;">cambiar Imagenes de slider(imagen:2)</td>
          </tr>
          <tr>
            <td width="24%" bgcolor="#E2E2E2"><img style="padding-top:3px; padding-bottom:3px; font-size:13px; padding-left:3px;" src="images/slider/<?php echo $fil_sl['ima2'];?>" alt=" no existe logo" width="140" height="60"/></td>
            
            <td width="4%" bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><input type="file" name="ima2" id="fileField"></td>
          </tr>
          <tr>
            <td bgcolor="#E2E2E2" style="font-size:13px;">Descripcion de Imagen2</td>
            <td bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><textarea name="des_sl_2" cols="50" class="textarea" id="textfield2"></textarea></td>
          </tr>
          <tr>
            <td colspan="3" style="font-size:13px;">cambiar Imagenes de slider(imagen:3)</td>
          </tr>
          <tr>
            <td width="24%" bgcolor="#E2E2E2"><img style="padding-top:3px; padding-bottom:3px; padding-left:3px;" src="images/slider/<?php echo $fil_sl['ima3'];?>" alt=" no existe logo" width="140" font-size:13px;  height="60"/></td>
            
            <td width="4%" bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><input type="file" name="ima3" id="fileField"></td>
          </tr>
          <tr>
            <td bgcolor="#E2E2E2" style="font-size:13px;">Descripcion de Imagen3</td>
            <td bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><textarea name="des_sl_3" cols="50" class="textarea" id="textfield4"></textarea></td>
          </tr>
          <tr>
            <td colspan="3" style="font-size:13px;">cambiar Imagenes de slider(imagen:4)</td>
          </tr>
          <tr>
            <td bgcolor="#E2E2E2"><img style="padding-top:3px; padding-bottom:3px; font-size:13px; padding-left:3px;" src="images/slider/<?php echo $fil_sl['ima4'];?>" alt=" no existe logo" width="140" height="60"/></td>
            <td bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><input type="file" name="ima4" id="fileField2"></td>
          </tr>
          <tr>
            <td bgcolor="#E2E2E2" style="font-size:13px;"> Descripcion de Imagen4</td>
            <td bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><textarea name="des_sl_4" cols="50" class="textarea" id="textfield3"></textarea></td>
          </tr>
          <tr>
            <td bgcolor="#E2E2E2"><img style="padding-top:3px; padding-bottom:3px; font-size:13px; padding-left:3px;" src="images/slider/<?php echo $fil_sl['ima5'];?>" alt=" no existe logo" width="140" height="60"/></td>
            <td bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><input type="file" name="ima5" id="fileField2"></td>
          </tr>
          <tr>
            <td bgcolor="#E2E2E2" style="font-size:13px;"> Descripcion de Imagen4</td>
            <td bgcolor="#E2E2E2">&nbsp;</td>
            <td align="center" valign="middle" bgcolor="#E2E2E2"><textarea name="des_sl_5" cols="50" class="textarea" id="textfield3"></textarea></td>
          </tr>
          <tr>
            <td colspan="3" align="center" bgcolor="#E2E2E2"><input class="btn btn-small "  type="submit" name="button2" id="button2" value="Enviar"></td>
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
