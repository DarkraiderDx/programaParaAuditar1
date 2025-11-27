<?php 
	session_start();
	include_once "conexion.php";
	include_once "funciones.php";
	$link=conectarse();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Control de Entrada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	box-shadow: 0 1px 2px rgba(0,0,0,.05);
	text-align: center;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>
<?php $sel=mysql_query("select * from opciones_generales",$link);
	
	 //$fila_logo=mysql_fetch_array($sel);?>
    <div class="container">
	  <form name="form1" method="post" action="" class="form-signin">
      <!--	<center><img src="images/<?php echo $fila_logo['logo']; ?>" width="306" height="99"></center><br>-->
      	<center><img  src="img/logo.png" width="306" height="99"></center><br>
      	<?php 
	  	if(!empty($_POST['usu']) and !empty($_POST['con'])){ 
			
			$usu=$_POST['usu'];
			$con=$_POST['con'];
			$pa=mysql_query("SELECT * FROM usuarios  WHERE correo='$usu' and clave='$con'",$link);				
			

			if($row=mysql_fetch_array($pa)){
					$nombre=$row['nombre'];
					$nombre=explode(" ", $nombre);
					$nombre=$nombre[0];
					$_SESSION['user_name']=$nombre;
					$_SESSION['tipo_user']=$row['tipo_user'];
					$_SESSION['cod_user']=$usu;
					$_SESSION['clave']=$con;
					if($row['tipo_user']=='a'){
						echo mensajes('Bienvenido Admin<br>'.$row['nombre'].'','verde').'<br>';
						echo '<center><img src="images/ajax-loader.gif"></center><br>';
						echo header('Location:index.php');
					}
				else{
					echo mensajes('Usted no se encuentra Activo en la base de datos<br>Consulte con su Administrador de Sistema','rojo');	
				}
			}
			else{
				echo mensajes('Usuario y/o Contraseña Incorrecto<br>','rojo');
				echo '<center><a href="index.php" class="btn"><strong>Intentar de Nuevo</strong></a></center>';
				
			}
		}else{
			echo '	<input type="text" name="usu" class="input-block-level" placeholder="Usuario" autocomplete="off" required>
					<input type="password" name="con" class="input-block-level" placeholder="Contraseña" autocomplete="off" required>
					<div align="right"><button class="btn btn-large btn-primary" type="submit"><strong>Entrar</strong></button></div>';		
		}
	  ?>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
