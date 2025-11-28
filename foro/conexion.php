<?php 
function conectarse()
{
    // Crear conexión
    $link = mysqli_connect("localhost", "root", "DarkraiderDx99", "cde_db");

    // Verificar conexión
    if (!$link) {
        echo "Error conectando a la base de datos: " . mysqli_connect_error();
        exit();
    }

    return $link;
}

// Conectar
$link = conectarse();

// Cerrar conexión
mysqli_close($link);
?>
