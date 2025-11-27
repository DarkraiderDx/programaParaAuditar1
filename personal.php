<?php session_start();
include("conexion.php");
$link=conectarse();


?><!DOCTYPE HTML>
<html>
<head>
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

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script language="javascript">
function VerDatos()
	{
		if((document.form.nom.value=="") || (document.form.email.value=="")||(document.form.come.value==""))
		{
			alert("Tiene que escribir en todos los campos...!!!");
		}
		
		else
			document.form.submit();
	}
</script>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#open').click(function(){
		$('#popup').fadeIn('slow');
		//$('body').css('opacity', '0.5');
		return false;
	});
	
	$('#close').click(function(){
		$('#popup').fadeOut('slow');
		//$('body').css('opacity', '1');
		return false;
	});
	
	$('#open2').click(function(){
		$('#popup2').fadeIn('slow');
		//$('body').css('opacity', '0.5');
		return false;
	});
	
	$('#close2').click(function(){
		$('#popup2').fadeOut('slow');
		//$('body').css('opacity', '1');
		return false;
	});
});
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
  
	    

  </div></div><div id="column-left4" style=" text-align:left;">
  
  <center></center><div style="box-shadow: 0 2px 5px #666666; margin-left:5px; border-radius:4px; width:170px; padding-left:30px; padding-right:20px; padding-bottom:20px; margin-bottom:5px; text-align:left; padding-top:20px;"><div class="label-warning" style=" height:25px;margin-top:10px; color:#FFFFFF; text-align:center;">Iniciar Session  </div><form action="entrar_usuario.php"  method="post" class="login">
            
            
              <label style="text-align:left;">Usuario: </label><br>
              <input class="input"name="usu" style="width:140px;" type="text" ><br>
              
                <label>Clave: </label><br>
                <input class="input" style="width:140px;" name="clav" type="password" ><br>
             
              <input name="login" type="submit" class="btn  btn-success"  value="Enviar">
            
          </form></div>
    <p style="color:#CC3300; font-size:12px;" align="center";><?php if(!isset($_GET['men']))
		  {
		  }
		  else
		  {
			  $men=$_GET['men'];
			  echo $men;
			  }?></p>
              <?php if(isset($_SESSION['pas'])){?>
              
                <div  >
                  <div style=" height:10px; margin-bottom:10px; padding-bottom:15px; font-size:12px;  color:#000000;">Bienvenido..<?php  $pas=$_SESSION['pas'];$sqll=mysql_query("select * from usuarios where clave='$pas'",$link); $f=mysql_fetch_array($sqll);echo $f['nombre'];  ?>..<br><?php echo'<a  href="cerrar session.php" style="color:#FF0000;">Cerrar Sesión</a>';?></div>
                  <ul>
		
		 <li class="btn btn-success" style="width:200px; margin-bottom:10px; margin-top:5px;" ><i class=" icon1-eye-open" style=" margin-right:5px;"></i><a style="color:#FFFFFF; width:200px;" href='ver_informacion.php'>Ver Informacion</a></li>
         <li class="btn btn-success " style="width:200px;"><i class=" icon1-eject" style=" margin-right:5px;"></i><a  style="color:#FFFFFF; width:200px;"href='enviar_informacion.php'>Enviar Informacion</a></li>

		
	</ul>

</div>
             
			 <?php }else{ ?>
             
               <div align="center"></div><?php }?>
    <p style="color:#CC3300; font-size:12px;" align="center";>&nbsp;</p>
              
              
  </div><!--fin lef-->

  
	<div id="central2" style="width:70%;">
    
          <p>&nbsp;
      <div class="label-warning" ><h2 style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF;
      height:30px; padding-left:5px;text-shadow:0px 0px 2px #333333;   font-size:18px; text-align: left;box-shadow:0px 2px 5px #666;">Personal de Administracion<span style="text-align: center"></span></h2></div>
			<?php 
		   
		  $link=conectarse();
		  $res=mysql_query("select * from administracion  ",$link);
		  while($fila=mysql_fetch_array($res))
		  {
	 		if($fila['imagen']=='')
			{
		  ?>
            </p>
      <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios" >
              <tr>
                <td width="33%" rowspan="2"align="center" ><img src="img/logo.png" width="189" height="69"></td>
                <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
                <td  style="font-size:18px;">&nbsp;</td>
                <td style="font-size:16px; color: #000000;">&nbsp;</td>
              </tr>
              <tr>
                <td width="21%" height="35" align="left"  style="font-size:16px; color: #000000;">Nombre</td>
                <td width="43%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
        </tr>
              <tr>
                <td width="33%" rowspan="5"align="center" ><img src="admin/registro/defecto.png" alt="imagen" width="112" height="113" style="border:5px solid #FFFFFF;box-shadow: 0px 0px 10px rgba(10,20,30,.3); background:#EFEFEF;" /></td>
                <td height="35" align="left"  style="font-size:16px; color: #000000;">Apellido</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
        </tr>
              <tr>
                <td width="3%" rowspan="5" align="center" valign="middle" >&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666; "><?php echo $fila['cargo']; ?></td>
        </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Telefono </td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
        </tr>
              <tr>
                <td height="48" align="left" style="font-size:15px; text-align:left; padding-right:16px; color: #000000;">Correo</td>
                <td height="48" align="left" style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
        </tr>
              <tr>
                <td width="33%"align="center" >&nbsp;</td>
                <td height="48" align="left" style="font-size:15px; text-align:left; padding-right:16px; color: #000000;">Skipe</td>
                <td height="48" align="left" style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['skipe']; ?></td>
        </tr>
            
      </table><?php } else{?>
      <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
            <tr>
              <td width="33%" rowspan="2"  align="center"><img src="img/logo.png" alt="" width="189" height="69"></td>
              <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
              <td  style="font-size:18px;">&nbsp;</td>
              <td style="font-size:16px;">&nbsp;</td>
            </tr>
            <tr>
              <td width="21%" height="35" align="left"  style="font-size:16px; color: #000000;">Nombre</td>
              <td width="43%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
        </tr>
            <tr>
              <td width="33%" rowspan="5"  align="center"><img src="admin/registro/<?php echo $fila['imagen']; ?>" alt="imagen" width="112" height="113" style="border:5px solid #FFFFFF;box-shadow: 0px 0px 10px rgba(10,20,30,.3); background:#EFEFEF;" /></td>
              <td height="33" align="left"  style="font-size:16px; color: #000000;">Apellido</td>
              <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
        </tr>
            <tr>
              <td width="3%" rowspan="5" align="center" valign="middle" >&nbsp;</td>

            </tr>
            <tr>
              <td height="35" align="left" style="font-size:16px; color: #000000;">Cargo</td>
              <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
        </tr>
            <tr>
              <td height="35" align="left" style="font-size:16px; color: #000000;">Telefono </td>
              <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
        </tr>
            <tr>
              <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Correo</td>
              <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
        </tr>
            <tr>
              <td width="33%"  align="center">&nbsp;</td>
              <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Skipe</td>
              <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['skipe']; ?></td>
        </tr>
      </table>
          
            <?php }} ?>
      <div class="label-warning" ><h2 style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF;
      height:30px;text-shadow:0px 0px 2px #333333;   padding-left:5px; font-size:18px; text-align: left;box-shadow:0px 2px 5px #666;">Personal de Planificacion y Monitoreo<span style="text-align: center"></span></h2></div>
      <p>
              <?php 
		   
		  $res=mysql_query("select * from planificacion ",$link);
		  while($fila=mysql_fetch_array($res))
		  {
	 		if($fila['imagen']==''){
		  ?>
            </p>
            
      <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
              <tr>
                <td width="33%" rowspan="2"  align="center"><img src="img/logo.png" alt="" width="189" height="69"></td>
                <td rowspan="3" bgcolor="#F5F5F5"><P style="text-align:center; font-weight: bold; color: #F5F5F5;">&nbsp;</P></td>
                <td  style="font-size:16px;">&nbsp;</td>
                <td  style="font-size:14px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="20%" height="35" align="left"  style="font-size:16px; color: #000000;">Nombre</td>
                <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td width="33%" rowspan="5"  align="center"><img src="admin/registro/defecto.png" alt="imagen" width="112" height="113" style="border:5px solid #FFFFFF; box-shadow: 0px 0px 10px rgba(10,20,30,.3); background:#EFEFEF;"  /></td>
                <td height="33" align="left"  style="font-size:16px; color: #000000;">Apellido</td>
                <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
              </tr>
              <tr>
                <td width="3%" rowspan="5" align="center" valign="middle" >&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px;color:#666666; "><?php echo $fila['cargo']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Telefono</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
              </tr>
              <tr>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Correo</td>
                <td height="48"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
              </tr>
              <tr>
                <td width="33%"  align="center">&nbsp;</td>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Skipe</td>
                <td height="48"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['skipe']; ?></td>
              </tr>
            </table>
            <?php }
			else{?>
      <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
              <tr>
                <td width="33%" rowspan="2"  align="center"><img src="img/logo.png" alt="" width="189" height="69"></td>
                <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
                <td  style="font-size:16px;">&nbsp;</td>
                <td  style="font-size:14px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="20%" height="35" align="left"  style="font-size:16px; color: #000000;">Nombre</td>
                <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
        </tr>
              <tr>
                <td width="33%" rowspan="5"  align="center"><img src="admin/registro/<?php echo $fila['imagen']; ?>" alt="imagen" width="112" height="113" style="border:5px solid #FFFFFF;box-shadow: 0px 0px 10px rgba(10,20,30,.3); background:#EFEFEF;" /></td>
                <td height="33" align="left"  style="font-size:16px; color: #000000; ;">Apellido</td>
                <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
        </tr>
              <tr>
                <td width="3%" rowspan="5" align="center" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
        </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Telefono</td>
                <td height="35" align="left"  style="font-size:14px;color:#666666; "><?php echo $fila['telefono']; ?></td>
        </tr>
              <tr>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Correo</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
        </tr>
              <tr>
                <td width="33%"  align="center">&nbsp;</td>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Skipe</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['skipe']; ?></td>
        </tr>
      </table>
            <p>
              <?php }} ?>
            </p>
            </p>
      <div class="label-warning" >
      <h2 style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF;
      height:30px;text-shadow:0px 0px 2px #333333;   padding-left:5px; font-size:18px; text-align: left;box-shadow:0px 2px 5px #666;">Personal de Dirección</h2></div>
      <p>
              <?php 
		   
		  $res=mysql_query("select * from direccion ",$link);
		  while($fila=mysql_fetch_array($res))
		  {
	  if($fila['imagen']==''){
		  ?>
            </p>
      <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
              <tr>
                <td width="33%" rowspan="2"  align="center"><img src="img/logo.png" alt="" width="189" height="69"></td>
                <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
                <td  style="font-size:16px;">&nbsp;</td>
                <td  style="font-size:14px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="20%" height="35" align="left"  style="font-size:16px; color: #000000;">Nombre</td>
                <td width="44%" height="35"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td width="33%" rowspan="5"  align="center"><img src="admin/registro/defecto.png" alt="imagen" width="112" height="113" style="border:5px solid #FFFFFF; box-shadow: 0px 0px 10px rgba(10,20,30,.3); background:#EFEFEF;"  /></td>
                <td height="33" align="left"  style="font-size:16px; fcolor: #333333; color: #000000;">Apellido</td>
                <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
              </tr>
              <tr>
                <td width="3%" rowspan="5" align="center" valign="middle" >&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Telefono</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
              </tr>
              <tr>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Correo</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
              </tr>
              <tr>
                <td width="33%"  align="center">&nbsp;</td>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Skipe</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['skipe']; ?></td>
              </tr>
            </table>
            <p>
              <?php } else{ ?>
            </p>
      <p>&nbsp; </p>
      <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
            <tr>
              <td width="33%" rowspan="2"  align="center"><img src="img/logo.png" alt="" width="189" height="69"></td>
              
              
              <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
              <td  style="font-size:16px;">&nbsp;</td>
              <td  style="font-size:14px;">&nbsp;</td>
            </tr>
            <tr>
              <td width="20%" height="35" align="left"  style="font-size:16px; color: #000000;">Nombre</td>
              <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
            </tr>
            <tr>
              <td width="33%" rowspan="5"  align="center"><img src="admin/registro/<?php echo $fila['imagen']; ?>" alt="imagen" width="112" height="113" style="border:5px solid #FFFFFF;box-shadow: 0px 0px 10px rgba(10,20,30,.3); background:#EFEFEF;" /></td>
              <td height="35" align="left"  style="font-size:16px; color: #000000;">Apellido</td>
              <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
            </tr>
            <tr>
              <td width="3%" rowspan="5" align="center" valign="middle" >&nbsp;</td>
            </tr>
            <tr>
              <td height="35" align="left" style="font-size:16px; color: #000000;">Cargo</td>
              <td height="35" align="left" style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
            </tr>
            <tr>
              <td height="35" align="left" style="font-size:16px; color: #000000;">Telefono</td>
              <td height="35" align="left" style="font-size:14px;color:#666666; "><?php echo $fila['telefono']; ?></td>
            </tr>
            <tr>
              <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Correo</td>
              <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
            </tr>
            <tr>
              <td width="33%"  align="center">&nbsp;</td>
              <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Skipe</td>
              <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['skipe']; ?></td>            </tr>
          </table>
            <p>
              <?php } }?>
              
          </p>
      <div class="label-warning" ><h2 style="font-family:Verdana, Arial, Helvetica, sans-serif; color:#FFFFFF;
      height:30px;text-shadow:0px 0px 2px #333333;   padding-left:5px; font-size:18px; text-align: left;box-shadow:0px 2px 5px #666;">Personal de Proyectos</h2>
            </div>
      <p>
              <?php 
		   
		  $res=mysql_query("select * from reg_proyecto  ",$link);
		  while($fila=mysql_fetch_array($res))
		  {
	  if($fila['imagen']==''){
		  ?>
            </p>
            
      <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
              <tr>
                <td width="33%" rowspan="2"  align="center"><img src="img/logo.png" alt="" width="189" height="69"></td>
                <td rowspan="3" ><P style="text-align:center; font-weight: bold;">&nbsp;</P></td>
                <td  style="font-size:16px;">&nbsp;</td>
                <td  style="font-size:14px;">&nbsp;</td>
              </tr>
              <tr>
                <td width="20%" height="35" align="left"  style="font-size:16px; color: #000000;">Nombre</td>
                <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
              </tr>
              <tr>
                <td width="33%" rowspan="5"  align="center"><img src="admin/registro/defecto.png" alt="imagen" width="112" height="113" style="border:5px solid #FFFFFF;box-shadow: 0px 0px 10px rgba(10,20,30,.3); background:#EFEFEF;"/></td>
                <td height="33" align="left"  style="font-size:16px; color: #000000;">Apellido</td>
                <td height="33" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
              </tr>
              <tr>
                <td width="3%" rowspan="5" align="center" valign="middle" >&nbsp;</td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Cargo</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['cargo']; ?></td>
              </tr>
              <tr>
                <td height="35" align="left" style="font-size:16px; color: #000000;">Telefono</td>
                <td height="35" align="left"  style="font-size:14px; color:#666666; "><?php echo $fila['telefono']; ?></td>
              </tr>
              <tr>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Correo</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
              </tr>
              <tr>
                <td width="33%"  align="center">&nbsp;</td>
                <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Skipe</td>
                <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['skipe']; ?></td>
              </tr>
            </table>
            <p>
              <?php } else{ ?>
            </p>
      <p>&nbsp; </p>
      <table width="429" border="0" cellpadding="0" cellspacing="0" class="tabla_servicios">
      <tr>
        <td width="33%" rowspan="2"  align="center"><img src="img/logo.png" alt="" width="189" height="69"></td>
        <td rowspan="3" ><p style="text-align:center; font-weight: bold;">&nbsp;</p></td>
        <td  style="font-size:16px;">&nbsp;</td>
        <td  style="font-size:14px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="20%" height="35" align="left"  style="font-size:16px; color: #000000;">Nombre</td>
        <td width="44%" height="35" align="left"  style="font-size:14px; color:#666666;"><?php echo $fila['nombre']; ?></td>
      </tr>
      <tr>
        <td width="33%" rowspan="5"  align="center"><img src="admin/registro/<?php echo $fila['imagen']; ?>" alt="imagen" width="112" height="113" style="border:5px solid #FFFFFF;box-shadow: 0px 0px 10px rgba(10,20,30,.3); background:#EFEFEF;" /></td>
        <td height="35" align="left"  style="font-size:16px; color: #000000;">Apellido</td>
        <td height="35"  style="font-size:14px; color:#666666;"><?php echo $fila['apellido']; ?></td>
      </tr>
      <tr>
        <td width="3%" rowspan="5" align="center" valign="middle" >&nbsp;</td>
      </tr>
      <tr>
        <td height="35" align="left" style="font-size:16px; color: #000000;">Cargo</td>
        <td height="35" style="font-size:14px;color:#666666; "><?php echo $fila['cargo']; ?></td>
      </tr>
      <tr>
        <td height="35" align="left" style="font-size:16px; color: #000000;">Telefono</td>
        <td height="35" align="left" style="font-size:14px; color:#666666;"><?php echo $fila['telefono']; ?></td>
      </tr>
      <tr>
        <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Correo</td>
        <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['correo']; ?></td>
      </tr>
      <tr>
        <td width="33%"  align="center">&nbsp;</td>
        <td height="48" align="left"  style="font-size:16px; text-align:left; padding-right:15px; color: #000000;">Skipe</td>
        <td height="48" align="left"  style="font-size:15px;text-align:left; padding-right:15px; color:#666666;"><?php echo $fila['skipe']; ?></td>
      </tr>
      </table>
      <p>
        <?php } }?>
        </p>
  </div><!--fin central-->
    
	
	<div id="footer"><p style="font-size:13px; margin-top:10px;">DIRECCION:
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p></div>
</div>



</body>
</html>
