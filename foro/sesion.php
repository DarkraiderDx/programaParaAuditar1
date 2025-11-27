<?php
include("conexion.php");
$link=conectarse();
$usuario = $_POST["login"];   
$password = $_POST["pass"];
if((($usuario=='')||($password==''))){
	$men='debe llenar todos los datos';
	header('location:usuario.php?men='.urlencode($men));
	}
else{

$sql=mysql_query("select * from administracion where correo = '$usuario' and clave='$password'",$link);
$fila=mysql_fetch_assoc($sql);

$sql1=mysql_query("select * from planificacion where correo = '$usuario' and clave='$password'",$link);
$fila1=mysql_fetch_assoc($sql1);

$sql2=mysql_query("select * from direccion where correo = '$usuario' and clave='$password'",$link);
$fila2=mysql_fetch_assoc($sql2);

$sql3=mysql_query("select * from reg_proyecto where correo = '$usuario' and clave='$password'",$link);
$fila3=mysql_fetch_assoc($sql3);

$sql4=mysql_query("select * from usuarios where correo = '$usuario' and clave='$password'",$link);
$fila4=mysql_fetch_assoc($sql4);
	
//$result = mysql_query("SELECT * FROM personal WHERE correo = '$usuario' and clave='$password'",$link);

if($fila)
{     

 	if($fila["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $password;  
			$_SESSION['MM_UserGroup']='5';   
		
  
  			header("Location:index.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:usuario.php?men='.urlencode($men));
            
 		}
}
elseif($fila1)
{
	if($fila1["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $usuario;  
$_SESSION['MM_UserGroup']='5';
  
  			header("Location: index.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:usuario.php?men='.urlencode($men));
            
 		}
}
elseif($fila2)
{
	if($fila2["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $usuario;  
$_SESSION['MM_UserGroup']='5';
  
  			header("Location: index.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:usuario.php?men='.urlencode($men));
            
 		}
}
elseif($fila3)
{
	if($fila3["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $pas;  

  $_SESSION['MM_UserGroup']='5';
  			header("Location: index.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:usuario.php?men='.urlencode($men));
            
 		}
}

elseif($fila4)
{
	if($fila4["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $pas;  

  $_SESSION['MM_UserGroup']='5';
  			header("Location: index.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:usuario.php?men='.urlencode($men));
            
 		}
}
else{
 //en caso que el nombre  es incorrecto enviamos un msj 
$men='Usuario  o clave Incorrecto ';
 header('location:usuario.php?men='.urlencode($men));
        
}


mysql_free_result($sql);
mysql_free_result($sql1);
mysql_free_result($sql2);
mysql_free_result($sql3);
mysql_free_result($sql4);

mysql_close();
}
?>