<?php
include("conexion.php");
$link=conectarse();
$usuario = $_POST["usu"];   
$password = $_POST["clav"];
if((($usuario=='')||($password==''))){
	$men='debe llenar todos los datos';
	header('location:index.php?men='.urlencode($men));
	}
else{

$sql=mysqli_query($link,"select * from administracion where correo = '$usuario' and clave='$password'");
$fila=mysqli_fetch_assoc($sql);

$sql1=mysqli_query($link,"select * from planificacion where correo = '$usuario' and clave='$password'");
$fila1=mysqli_fetch_assoc($sql1);

$sql2=mysqli_query($link,"select * from direccion where correo = '$usuario' and clave='$password'");
$fila2=mysqli_fetch_assoc($sql2);

$sql3=mysqli_query($link,"select * from reg_proyecto where correo = '$usuario' and clave='$password'");
$fila3=mysqli_fetch_assoc($sql3);
	
//$result = mysql_query("SELECT * FROM personal WHERE correo = '$usuario' and clave='$password'",$link);

if($fila)
{     

 	if($fila["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $password;  
			

  
  			header("Location: index.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:index.php?men='.urlencode($men));
            
 		}
}
elseif($fila1)
{
	if($fila1["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $password;   

  
  			header("Location: index.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:index.php?men='.urlencode($men));
            
 		}
}
elseif($fila2)
{
	if($fila2["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $password;   

  
  			header("Location: index.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:index.php?men='.urlencode($men));
            
 		}
}
elseif($fila3)
{
	if($fila3["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $password;   
			

  
  			header("Location: index.php");  
 	}
 	else
 		{
  			//En caso que la contraseña sea incorrecta enviamos un msj 
			  $men='Usuario  o clave Incorrecto ';
			 header('location:index.php?men='.urlencode($men));
            
 		}
}
else{
 //en caso que el nombre  es incorrecto enviamos un msj 
$men='Usuario  o clave Incorrecto ';
 header('location:index.php?men='.urlencode($men));
        
}


mysqli_free_result($result);


mysqli_close();
}
?>