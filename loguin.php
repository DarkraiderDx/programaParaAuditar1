<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel = Stylesheet  href="css/estilo.css" type="text/css"/>


	<style type="text/css">
		form.login {
			font-family:"Agency FB";
			font-size:15px;
	   		background: none repeat scroll 0 0 #F1F1F1;
		    border: 1px solid #DDDDDD;
		    margin: 0 auto;
		    padding: 20px;
		    width: 150px;
}
</style>
</head>

<body>
<p style="font-size:18px; text-align:center;">Iniciar Sesion</p>
<form action="entrar_usuario.php" method="post" class="login">

  <div>
    <label>Usuario:  </label>
    <input name="usu" type="text" >
  </div>
  <div>
    <label>Clave: </label>
    <input name="clav" type="password" >
  </div>
  <div>
    <input name="login" type="submit" class="bot_contactar" value="Enviar">
  </div>
</form>
<p><?php if(!isset($_GET['men']))
{
	
}
else
{
	$men=$_GET['men'];
	echo $men;
	header('Location:personal.php');
}?></p>
</body>
</html>