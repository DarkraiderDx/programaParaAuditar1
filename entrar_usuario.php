<?php
include("conexion.php");
$link=conectarse();
$usuario = $_POST["usu"];   
$password = $_POST["clav"];
if((($usuario=='')||($password==''))){
	$men='debe llenar todos los datos';
	header('location:personal.php?men='.urlencode($men));
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
	
//$result = mysql_query("SELECT * FROM personal WHERE correo = '$usuario' and clave='$password'",$link);

if($fila)
{     

 	if($fila["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] =$password;  

  
  			header("Location: ver_informacion.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:personal.php?men='.urlencode($men));
            
 		}
}
elseif($fila1)
{
	if($fila1["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] =$password;    

  
  			header("Location: ver_informacion.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:personal.php?men='.urlencode($men));
            
 		}
}
elseif($fila2)
{
	if($fila2["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] =$password;    

  
  			header("Location: ver_informacion.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:personal.php?men='.urlencode($men));
            
 		}
}
elseif($fila3)
{
	if($fila3["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] =$password;    

  
  			header("Location: ver_informacion.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:personal.php?men='.urlencode($men));
            
 		}
}
else{
 //en caso que el nombre  es incorrecto enviamos un msj 
$men='Usuario  o clave Incorrecto ';
 header('location:personal.php?men='.urlencode($men));
        
}


mysql_free_result($result);


mysql_close();
}
?>