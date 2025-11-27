<?php require_once('conexion.php'); $link=conectarse();?>
<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<!-- -->
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel = Stylesheet  href="css/slider.css" type="text/css"/>
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script>
<script language="javascript" src="js/jquery.js" ></script>


<script src="js/direccion.js" type="text/javascript"></script>    

<link href="css/jquery.css" rel="stylesheet" type="text/css" media="screen">
<script src="js/jquery1.js" type="text/javascript"></script>

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>

 
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
    



<style type="text/css">
.e {
	color: #FF8000;
	text-align:left;
	margin-left:5px;
	margin-bottom:10px;
}
</style>
</head>
<body>

<div id="content">
	<div id="header">
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
        <li class="subme "onClick="direccion('index.php')" id="active1">INICIO<br><i class="icon1-home"></i></li>
        <li class="subme"onClick="direccion('quienes_somos.php')">QUIENES SOMOS<br><i class="icon1-question-sign"></i></li>
        <li class="subme"onClick="direccion('proyectos.php')">PROYECTOS<br><i class="icon1-briefcase "></i></li>
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS<br><i class="icon1-shopping-cart"></i></li>
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
  
	    

  </div><div id="column-left" >
  <?php if(isset($_SESSION['pas'])){?>
             
                <div style=" border-radius:4px; color:#000000; font-size:12px;">Bienvenido..<?php  $pas=$_SESSION['pas'];$sqll=mysql_query("select * from usuarios where clave='$pas'",$link); $f=mysql_fetch_array($sqll);echo $f['nombre'];  ?>..</div><?php echo'<a style="color:#FF0000; font-size:12px;"  href="cerrar session.php"> Cerrar Sesión</a>';?>
             
			 <?php }else{ ?>
             
               <div align="center"></div><?php }?>
  
  <div style="box-shadow: 0 2px 5px #666666; margin-left:5px; border-radius:4px; width:170px; padding-left:30px; padding-right:20px; padding-bottom:20px; margin-bottom:5px; text-align:left; padding-top:20px;"><div class="label-warning" style=" height:25px;margin-top:10px; color:#FFFFFF; text-align:center;

">Iniciar Session  </div><form action="entrar_usuario1.php"  method="post" class="login">
            
            
              <label style="text-align:left; font-size:12px;">Usuario: </label><br>
              <input class="input" style="width:150px;"name="usu" type="text" ><br>
              
                <label style="text-align:left; font-size:12px;">Clave: </label><br>
                <input class="input" style="width:150px;" name="clav" type="password" ><br>
             
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
  <?php 
$inte  = 0;
$t=0;
$num=0;
$aux = 2;

$sql=mysql_query("select * from noticias  order by id_noticias desc limit 2",$link);
$entrada=mysql_num_rows($sql);
if($inte==-1)
		echo "error";
	else
	{
		while($inte<=$entrada )
		{	for($nu=0; $nu<$aux; $nu++)	
			{?>
<DIV style=" box-shadow: 0 2px 5px #666666; border-radius:4px; border:1px solid #999999; background:#FFFFFF; margin-bottom:10px; margin-top:"><center><div class="label-warning" style=" margin-left:8px; margin-right:8px; height:25px;margin-top:10px; color:#FFFFFF;">
Ultimas Noticias
</div></center>
<?php $fila=mysql_fetch_array($sql);
				$not=substr($fila['texto'],0,70);
				?>
        <div class="index_not"> <img src="admin/noticias/<?php echo $fila['imagen']; ?>"  style="border:5px solid #FFF;"></div>
        <div style=" margin-left:5px;font-family:Verdana, Arial, sans-serif; text-align:left;word-wrap: break-word; font-size:16px; width:210px; "><h2 style="color:#933;">Titular:</h2><p style=" font-size:12px;color:#060; text-shadow:#000000; text-align:justify;"><?php echo $fila['titulo'];?></p></div>
        <div class="texto1">
                        <h2 style="color:#933;">Descripción:</h2> <p style="color:#333333;"> <?php echo $not.'...';?></p>
                        
            </div><br><div style="width:200px; text-align:left; margin-left:5px; margin-bottom:5px;"><p><a href="ver_detalles_not.php?id=<?php echo $fila['id_noticias']; ?>" style="color:#CE7317;"><button class="btn btn-success"> Leer Mas..</button> </a>
</p></div></div>
<?php }?>
<?php $inte=$inte+2;
			$t = $entrada-$inte;
				if($t<2)
					{	
						$aux=$t;
					}
				else
					$aux = 2;	
		}
	}?> 
  <div style=" box-shadow: 0 2px 5px #666666; border:1px solid #999999; border-radius:4px; background:#FFFFFF; margin-bottom:10px; margin-top:">
  <form action="comentario.php"
            method="post"  class="form" name="form">
       <div class="label-warning" style=" height:25px;margin-top:10px; color:#FFFFFF; text-align:center;">Deje un Comentario</div>
            	<table width="210" border="0"  bgcolor="">
  <tr >
    <td width="204" style=" text-align:left;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px;color:#333333;">Por favor llene sus datos</td>
   
  </tr>
  <tr >
    <td  align="left" style=" background: #b9cf6a;
background: rgba(255,255,255,.3);
border-color: #e3ebc3;
border-color: rgba(255,255,255,.6);
border-style: solid;
border-width: 5px;

-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
line-height: 10px;
list-style: none;
padding: 2px 4px;
margin-bottom: 2px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;color:#333333;"><p style=" color:#000000;">Nombre</p>
      <p>
  <input class="input" name="nom" type="text" size="30" maxlength="34" required placeholder="Introduzaca su Nombre">
      </p></td>
    </tr>
  <tr>
    <td align="left" style="  background: #b9cf6a;
background: rgba(255,255,255,.3);
border-color: #e3ebc3;
border-color: rgba(255,255,255,.6);
border-style: solid;
border-width: 5px;

-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
line-height: 10px;
list-style: none;
padding: 2px 4px;
margin-bottom: 2px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;color:#333333;"><p style=" color:#000000;">Email</p>
      <p>
  <input  class="input" name="email" type="email" size="30" maxlength="35" required placeholder="Introduzaca su Email">
      </p></td>
    </tr>
  <tr>
    <td style=" background: #b9cf6a;
background: rgba(255,255,255,.3);
border-color: #e3ebc3;
border-color: rgba(255,255,255,.6);
border-style: solid;
border-width: 5px;

-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
line-height: 10px;
list-style: none;
padding: 2px 4px;
margin-bottom: 2px;"><p style=" color:#000000; margin-bottom:2px;">Comentario</p>
      <p>
        <textarea class="textarea1"name="come" cols="30" rows="5" tabindex="4" required placeholder="Introduzaca su Mensaje"></textarea>
      </p></td>
    
  </tr>
  <tr>
    <td align="center"><input name="Enviar" type="button"  value=" Comentar" class="btn btn-small"onClick="VerDatos()"> 
      <input name="Enviar" type=reset class="btn btn-small"  value="Limpiar"></td>
    
  </tr>
</table>
      </form>
  </div>


 
  </div><!--fin lef-->

  
	<div id="central" style="margin-bottom:10px;">
    
    <!-- slider-holder -->
    <center><div class="flexslider">
     <?php 
			$sql_sl="select * from opciones_generales ";
			$resultado_sl=mysql_query($sql_sl,$link);
			$fil_sl=mysql_fetch_array($resultado_sl);
			$sql3="select * from opciones_generales ";
			$resultado1=mysql_query($sql3,$link);
			$fil=mysql_fetch_array($resultado1);
			?>
      <ul class="slides">
        <li> <img alt="" src="admin/images/slider/<?php echo $fil_sl['ima1'];?>" />
          <h2 class="flex-caption" style=" margin-left:30px; margin-bottom:16px; text-align:justify; "><?php echo $fil_sl['ima1_des']; ?></h2>
        </li>
        <li> <img alt="" src="admin/images/slider/<?php echo $fil_sl['ima2'];?>" />
           <h2 class="flex-caption" style=" margin-left:30px; margin-bottom:16px;text-align:justify;padding-bottom:5px;"> <?php echo $fil_sl['ima2_des']; ?></h2>
        </li>
        <li> <img alt="" src="admin/images/slider/<?php echo $fil_sl['ima3'];?>" />
           <h2 class="flex-caption" style=" margin-left:30px; margin-bottom:16px;text-align:justify;padding-bottom:5px;"><?php echo $fil_sl['ima3_des']; ?></h2>
        </li>
        <li> <img alt="" src="admin/images/slider/<?php echo $fil_sl['ima4'];?>" />
           <h2 class="flex-caption" style=" margin-left:30px; margin-bottom:16px;text-align:justify;padding-bottom:5px;"><?php echo $fil_sl['ima4_des']; ?></h2>
        </li>
        <li> <img alt="" src="admin/images/slider/<?php echo $fil_sl['ima5'];?>" />
           <h2 class="flex-caption" style=" margin-left:30px; margin-bottom:16px;text-align:justify; padding-bottom:5px;"><?php echo $fil_sl['ima5_des']; ?></h2>
        </li>
      </ul>
    </div></center>
    <!-- end of slider-holder -->
    
    <div style="width:100%; height:40px; padding-top:7px; text-align:left; padding-left:10px;  float:right; font-size: 20px; " class="titulo_donde" >Donde Estamos</div>
    <div style="clear:both;"></div>
<center><div id="google_canvas"  data-stellar-ratio="2.08">
                        
    </div></center>
<div class="donde4" style="font-size:20px;  float:right; margin-right:4px; margin-top:1px;  color:#FFFFFF; font-family:Verdana, Arial, sans-serif; ">Comentarios</div>
<div id="co">
      
<?php

$query=("SELECT * FROM comentario ORDER BY id_comentario DESC");
$consulta=mysql_query($query,$link);

while($row=mysql_fetch_assoc($consulta))

{

	echo '<div class="alert-info" style="border-radius:5px;  >';
	
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

    </div>
    </div><!--fin central-->
    
	<footer>
	<div id="footer"><p>DIRECCION:
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p>
</div>

    <script src="js/jquery.flexslider.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>  
 
</body>
</html>
