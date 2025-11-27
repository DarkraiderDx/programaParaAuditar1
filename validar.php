<?php
function requerido($valor)
{
     $valor=trim($valor);
     if(empty($valor))
     {
          return true; // Error significa que el campo esta vació
     }
     else
     {
          return false; // el campo tiene un valor
     }
}
?> 