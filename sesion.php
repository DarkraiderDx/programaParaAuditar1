<?php
include("../conectarse/conexion.php");
$link=conectarse();
$usuario = $_POST["usu"];   
$password = $_POST["clav"];
if((($usuario=='')||($password==''))){
	$men='debe llenar todos los datos';
	header('location:personal.php?men='.urlencode($men));
	}
else{

$sql=mysql_query("select * from usuarios where correo = '$usuario' and clave='$password'",$link);
$fila=mysql_fetch_assoc($sql);

if($fila)
{     

 	if($fila["clave"] == $password)
 	{

  		session_start();  
  
  			$_SESSION['usuario'] = $usuario;  
   			$_SESSION['pas'] = $usuario;  

  
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