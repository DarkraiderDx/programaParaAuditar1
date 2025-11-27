<?php require_once('conexion.php'); ?>
<?php session_start();?>
<!doctype html>
<html>
<head>
<link rel="icon" href="cde.gif" type="image/gif" />
<title>CDE-I Centro de desarrollo y promoción economica integral</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>
<script src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script>

<script language="javascript" src="js/jquery.js" ></script>

<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
<script src="js/direccion.js" type="text/javascript"></script>    
<script language="javascript" src="js/mapa.js" ></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<style type="text/css">
.resaltado {
	color: #990000;
	font-weight: bold;
}
#comentarios div .com #fomColor legend {
	font-family: "Agency FB";
	font-size: 24px;
}
#posiEmpre legend {
	font-family: "Agency FB";
	font-size: 24px;
}
#noti table tr td div {
	font-family: "Agency FB";
	font-size: 18px;
}
</style>
</head>
<body>
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
<div style="clear:both;"></div>
<div class="contenedorMenu">
  <div id="menu">
    <nav>
      <ul class="men">
        <li class="subme" onClick="direccion('index.php')">INICIO</li>
        <li class="subme"onClick="direccion('quienes_somos.php')">QUIENES SOMOS</li>
        <li class="subme"onClick="direccion('proyectos.php')">PROYECTOS</li>
        <li class="subme"onClick="direccion('servicios.php')">SERVICIOS</li>
        <li class="subme"onClick="direccion('noticias.php')">NOTICIAS</li>
        <li class="subme"onClick="direccion('galeria.php')">GALERIA</li>
        <li class="subme"onClick="direccion('contactos.php')">CONTACTENOS</li>
        <li class="subme"onClick="direccion('personal.php')">PERSONAL</li> 
         <li class="subme"onClick="direccion('convocatorias.php')">CONVOCATORIAS</li> 
      </ul>
    </nav>
    <div style="clear:both;"></div>
  </div>
  </div>
  		<!-- slider-holder -->
<div class="slider-holder">
			<div class="shell"><span class="slider-shadow"></span>
				<div class="slider flexslider">
				  <ul class="slides">
						<li >
							<img src="css/images/foto3.png" alt="" />
							<div class="slide-cnt">
								<h2>¿QUE ES CDE-I?</h2>
								<p><strong class="RESALTADO">Es una organización no lucrativa</strong>, dedicada a potenciar capacidades de gestión <span class="RESALTADO"><strong>económica, social, productiva e investigación para implementar procesos de desarrollo local</strong></span> integral en espacios comunales, municipales, regionales, departamentales y nacionales.</p>
								
							</div>
						</li>
						<li >
							<img src="css/images/foto1.png" alt="" />
							<div class="slide-cnt">
								<h2>CDE-I </h2>
								<p>busca la igualdad de oportunidades para todos, sin discriminación de género, raza, religión, creencia política, ocupación o habilidad física. Asimismo, se orienta a desarrollar las potencialidades de las personas para mejorar su calidad de vida. </p>
								
							</div>
						</li>
						<li >
							<img src="css/images/foto6.jpg" alt="" />
							<div class="slide-cnt">
								<h2>Donde Trabajamos</h2>
								<p>El CDE-I ha priorizado, su trabajo institucional en el Departamento de Potosí,  en los municipios que conforman la Mancomunidad Gran Centro Potosí, que agrupa a Municipios de: Potosí, Puna, Caiza “D”, Ckochas, Chaquí, Betanzos, Tacobamba, Yocalla, Tinguipaya, Belén de Urmiri, Tomave, Porco y Mojinete, Son municipios con altos índices de pobreza. </p>
								
							</div>
						</li >
						<li >
							<img src="css/images/foto4.jpg" alt="" />
							<div class="slide-cnt">
								<h2>Nuestro Equipo</h2>
								<p>Nuestro equipo reducido pero profundamente comprometido con el trabajo y con responsabilidad en el logro de los objetivos superando todo tipo de obstáculos para lograr nuestra visión, con la participación activa de nuestros socios para sostener el desarrollo de las comunidades. </p>
								
							</div>
						</li>
						<li >
							<img src="css/images/foto5.jpg" alt="" />
							<div class="slide-cnt">
								<h2>Nuestros Valores</h2>
								<p> El CDE-I desde su constitución ha construido una cultura institucional que pretende constituirla en vanguardia, en la promoción del desarrollo sostenible e integral, la cual está basada en los siguientes valores y competencias: Ética, Respeto, Transparencia, Compromiso, Equidad.</p>
								
							</div>
						</li>
					</ul>
				</div>
			</div>	
		</div>	
		<!-- end of slider-holder -->
 <div style="clear:both;"></div>
<div class="contenedor">
  <header>
	    <span class="resaltado">El CDE-I</span> (Centro de Desarrollo y Promoción Económica Integral),<span class="resaltado"> es una organización no lucrativa, dedicada a potenciar capacidades de gestión económica, social, productiva e investigación</span> para implementar procesos de desarrollo local integral en espacios comunales, municipales, regionales, departamentales y nacionales. </header>
        
<section style=" padding-left:150px;">

	 
    <p>&nbsp;</p> <article contenteditable="false">	
    <div id="noti">    
     <?php 
$inte  = 0;
$t=0;
$num=0;
$aux = 2;
$link=conectarse();
$sql=mysql_query("select * from noticias  order by id_noticias desc limit 2",$link);
$entrada=mysql_num_rows($sql);?>
<div>
  <h3>Noticias Recientes</h3></div>
<table cellpadding="4" >
  
<?php	if($inte==-1)
		echo "error";
	else
	{
		while($inte<=$entrada )
		{	
			
	?>	<tr>
			<?php for($nu=0; $nu<$aux; $nu++)	
			{?>
		  <td >
				
                <?php $fila=mysql_fetch_array($sql);
				$not=substr($fila['texto'],0,70);
				?>
         <div class="index_not"> <img src="img/<?php echo $fila['imagen']; ?>"  ></div>
	    
							
            <div>Titular: <?php echo $fila['titulo'];?></div>
            <div class="texto1">
                        <p>Descripción: <?php echo $not.'...';?></p>
                        
            </div><br><div><p><a href="ver_detalles_not.php?id=<?php echo $fila['id_noticias']; ?>"> <input name="button" type="submit" class="bot_contactar"  value="Leer mas"></a>
</p></div>
        </td>
							
			<?php }?>
			</tr>	
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
</table>

      
     </div>
  </article>
  <div style="clear:both;"></div>  
  
  <br>
            
</section>
  <div style="clear:both;"></div>

    <br><br><br><br><br><br>
<section>
 <div style="text-align:center; font-size: 24px;"><legend>Donde Estamos</legend></div>
      <div>
                    <div id="google_canvas" data-stellar-ratio="2.08">
                        
                    </div>
                </div>
   </section>


             
<div style="clear:both;"></div>        


    
<p><br>
      
    </p>
<div id="comentarios">
	  <div>
        	<div class="com"><form action="comentario.php"
            method="post" id="fomColor">
            <legend>Deje sus comentarios</legend>
            	<table width="150" border="0" class="comentario1">
  <tr >
    <td colspan="2">Por favor llene sus datos</td>
   
  </tr>
  <tr>
    <td width="100">NOMBRE</td>
    <td width="50"><input name="nom" type="text" size="30" maxlength="34" required></td>
  </tr>
  <tr>
    <td>EMAIL</td>
    <td align="left"><input name="email" type="email" size="30" maxlength="35" required></td>
  </tr>
  <tr>
    <td colspan=2><textarea name="come" cols="35" rows="5" tabindex="4" required></textarea></td>
    
  </tr>
  <tr>
    <td colspan=2 align="center"><input name="Enviar" type=submit class="bot_contactar" value=" Comentar"> 
      <input name="Enviar" type=reset class="boton_reset"  value="Limpiar"></td>
    
  </tr>
</table>
            </form>
    </div>
    <div style="clear:both; font-size: 24px;">
      <legend>Comentarios</legend><a href="../admin/borrar_comentarios.php"><button class="boton_act">Borrar Comentarios</button></a>
    </div>
  </div>
   
  <div id="co">
      
<?php

$query=("SELECT * FROM comentario ORDER BY fecha DESC");
$consulta=mysql_query($query,$link);

while($row=mysql_fetch_assoc($consulta))

{

	echo '<div style="background:rgba(204,204,0,0.2); border-radius:5px">';
	
	echo '<font color="#0000CC">'.$row['nombre'].'</font><br />';
	echo '<font style="color:#384572;">'.$row['email'].'</font><br />';

	echo '</div>';
	echo '<p class="texto">';
	echo $row['texto'];
	echo '</p>';
	echo '<div>';

	echo '<font size="-1" color="#666666">Publicado el dia '.$row['fecha'].'</font>';
	
	echo '<hr></div>';

	

	}mysql_free_result($consulta);

?>

</div></div>
    <div style="clear:both;"></div>
	<footer>
	 
</footer>


    <div id="piePagina">
      <p>DIRECCION: 
        Calle. 26 de infantería Nº 107	 entre calles Omiste y Argote<br>
        CORREOS:cde-i@entelnet.bo, cdei_bolivia@yahoo.es<br>
        TELÉFONO/FAX  OFICINA CENTRAL:(591) 2 6120807<BR>
        CELULAR: (591) 71828714</p>
      <p>POTOSI@BOLIVIA</p>
      
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
    </script>
</body>
</html>