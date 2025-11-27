<?php require_once('conexion.php');
$link=conectarse(); ?>
<?php session_start();?>
<!DOCTYPE HTML>
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
function comprueba_extension(formulario, archivo) {
   extensiones_permitidas = new Array("doc", ".pdf",".docx");
   mierror = "";
   if (!archivo) {
      //Si no tengo archivo, es que no se ha seleccionado un archivo en el formulario
       mierror = "No has seleccionado ningún archivo";
   }else{
      //recupero la extensión de este nombre de archivo
      extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
      //alert (extension);
      //compruebo si la extensión está entre las permitidas
      permitida = false;
      for (var i = 0; i < extensiones_permitidas.length; i++) {
         if (extensiones_permitidas[i] == extension) {
         permitida = true;
         break;
         }
		 
		 
      }
      if (!permitida) {
         mierror = "Comprueba la extensión de los archivos a subir. \nSólo se pueden subir archivos con extensiones: " + extensiones_permitidas.join();
		 
       }else{
          //submito!
//         alert ("Todo correcto.");
         formulario.submit();
         return 1;
       }
   }
   //si estoy aqui es que no se ha podido submitir
   alert (mierror);
   return 0;
} 
</script>
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
<link rel="stylesheet" href="admin/prettyPhoto/css/prettyPhoto.css" type="text/css">
<script type="text/javascript" src="admin/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
$(document).ready(function()
{	
$("a[rel^='prettyPhoto_GaleriaFotos']").prettyPhoto({theme:'facebook'});
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
        <li class="subme"onClick="direccion('personal.php')">PERSONAL<br><i class="icon1-user"></i></li> 
         <li class="subme"onClick="direccion('convocatorias.php')"id="active1">CONVOCATORIAS<br><i class="icon1-file"></i></li> 
      
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
  
	    

  </div>
  </div>


  

	<div id="central3" style="width:95%;  margin-left:20px;  " >
 	
    <div style="height:100%;">
              <?php
			  
$n=0;
$n1=1;

$sql=mysql_query("select * from convocatorias order by id_convocatorias desc",$link);

?> <?php if(!isset($_GET['men'])){
				
				}else{
					echo '<div class="alert">'.$_GET['men'].'</div>';
				}?>
      <h3 class="h1 "> Convocatorias</h3><h6 class="h6" style="color:#3C3C3C; margin-bottom:5px; font-size:16px;">Si se ecuentra Interesado en alguna de las convocatorias  publicadas puede mandar su curriculun viatae por la casilla que se encuentra a la  derecha de cada convocatosria Solo (Archivos word y pdf tamaño maximo menos de 2 megas)</h6>
      <table width="100%" border="0" bordercolor="#FFCC00;" align="center" cellpadding="0" cellspacing="2" class="comentario4"  >
                  <td width="27" align="center" class="titulo"><h3>Nº</h3></td>
                <td width="304" align="center" class="titulo"><h3>Convocatoria</h3></td>
                <td class="titulo" align="center"><h3>Fecha de publicacion</h3></td>
                <td align="center" class="titulo"><h3>Fecha Limite</h3></td>
                <td align="center" class="titulo"><h3> Archivo</h3></td>
                <td class="titulo" align="center"><h3>Enviar Curriculum Vitae</h3></td>
              </tr>
              <?php 
			  $n=1;
while($fila=mysql_fetch_array($sql)){
?>
                <tr>
                

    <?php
    $archi = $fila['nombre_archi']; 
    $trozos = explode(".", $archi); 
    $extension = end($trozos); 
    
    ?>


               <td height="49"  class="f1"><?php echo $n++;?></td>
                <td align="left"  class="f1" ><div style="word-wrap: break-word; width:320px;"><?php echo $fila['convocatorias']; ?></div></td>
                <td width="74" align="left"  class="f1"><?php echo $fila['fecha_inicial']; ?></td>
                <td width="64" align="left"  class="f1"><?php echo $fila['fecha_final']; ?></td>
                <?php if($extension=="xlsx")
				{?>
				<td width="50" align="left"  class="f1"><a style="color:#DC0A48;" href="<?php echo "bajar_convocatoria.php?id=".$fila['id_convocatorias']?>"><img src="admin/img/ICONOS_x.png"  /><br>Descargar</a></td>
				 <?php } elseif($extension=="docx"||$extension=="doc")
                 
				{?>
				<td width="50" align="left"  class="f1"><a style="color:#DC0A48;" href="<?php echo "bajar_convocatoria.php?id=".$fila['id_convocatorias']?>"><img src="admin/img/ICONOS_w.png"  /><br>Descargar</a></td>
				 <?php }elseif($extension=="pdf") {?>
                 
				
				<td width="50" align="left"  class="f1"><a href="<?php echo "bajar_convocatoria.php?id=".$fila['id_convocatorias']?>" style="color:#DC0A48;"><img src="admin/img/ICONOS_p.png"  /><br>Descargar</a></td>
				 <?php } ?>
            
                <td width="244"align="center"valign="top=10px" bgcolor="#333333"    style="background:#F3F3F3; font-size:11px;">
                  <form name="form1" enctype="multipart/form-data" method="post" action="enviar_convo.php">
               
                 
                  <input name="convo" type="hidden" value="<?php echo $fila['convocatorias']; ?>"><input name="id_convo" type="hidden" value="<?php echo $fila['id_convocatorias'];?>">
                <div><div class="custom-input-file" style="float:left;"><input name="archivo" type="file"   class="input-file" size="20" /></div>


                <div><input type="button" class="btn"onclick="comprueba_extension(this.form, this.form.archivo.value)" value="Enviar"></div></div></form></td>
              
              <?php }?>
        </table>
           
	</div>
  <div style="height:100px;">
    
    </div>
  </div></center><!--fin central-->
    
	
	<div id="footer"><p>DIRECCION:
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p></div>
</div>
<div id="popup" style="display: none;">
    <div class="content-popup">
        <div class="close"><a href="#" id="close"><img src="images/close.png"></a></div>
        <div>Contenido VENTANA 1</div>
    </div>
</div>
<div id="popup2" style="display: none;">
    <div class="content-popup">
        <div class="close"><a href="#" id="close2"><img src="images/close.png"></a></div>
        <div>Contenido VENTANA 2</div>
    </div>
</div>
</body>
</html>
