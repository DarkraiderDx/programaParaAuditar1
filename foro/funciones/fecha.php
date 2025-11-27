<?php 

function fecha_numtext($fecha, $m_anio){
	/* DIVIDIMOS LA FECHA */
	list($anio, $mes, $dia) = split('[/.:-]', $fecha);
	/* CONVERTIMOS AÑO Y MES EN TEXTO */
	switch ($mes) {
    case "01":
      $mes_texto="Enero";
      break;    
    case "02":
      $mes_texto="Febrero";
      break;    
    case "03":
      $mes_texto="Marzo";
      break;    
    case "04":
      $mes_texto="Abril";
      break;    
    case "05":
      $mes_texto="Mayo";
      break;    
    case "06":
      $mes_texto="Junio";
      break;    
    case "07":
      $mes_texto="Julio";
      break;    
    case "08":
      $mes_texto="Agosto";
      break;    
    case "09":
      $mes_texto="Septiembre";
      break;    
    case "10":
      $mes_texto="Octubre";
      break;    
    case "11":
      $mes_texto="Noviembre";
      break;    
    case "12":
      $mes_texto="Diciembre";
      break;    
  }
  
$diat=date("l", mktime(0,0,0,$mes,$dia,$anio));  
 switch ($diat) {
    case "Sunday":
      $dia_texto="Domingo";
      break;    
    case "Saturday":
      $dia_texto="Sábado";
      break;    
    case "Friday":
      $dia_texto="Viernes";
      break;    
    case "Thursday":
      $dia_texto="Jueves";
      break;    
    case "Wednesday":
      $dia_texto="Miércoles";
      break;    
    case "Tuesday":
      $dia_texto="Martes";
      break;    
    case "Monday":
      $dia_texto="Lunes";
      break;    
  } 
$f_texto = $dia_texto." ".date("j", mktime(0,0,0,$mes,$dia,$anio))." de ".$mes_texto;
if($m_anio == TRUE)
	{
	$f_texto.= " de ".$anio;
	}
	return($f_texto);
}
function fecha_numtextsd($fecha, $m_anio){
	/* DIVIDIMOS LA FECHA */
	list($anio, $mes, $dia) = split('[/.:-]', $fecha);
	/* CONVERTIMOS AÑO Y MES EN TEXTO */
	switch ($mes) {
    case "01":
      $mes_texto="Enero";
      break;    
    case "02":
      $mes_texto="Febrero";
      break;    
    case "03":
      $mes_texto="Marzo";
      break;    
    case "04":
      $mes_texto="Abril";
      break;    
    case "05":
      $mes_texto="Mayo";
      break;    
    case "06":
      $mes_texto="Junio";
      break;    
    case "07":
      $mes_texto="Julio";
      break;    
    case "08":
      $mes_texto="Agosto";
      break;    
    case "09":
      $mes_texto="Septiembre";
      break;    
    case "10":
      $mes_texto="Octubre";
      break;    
    case "11":
      $mes_texto="Noviembre";
      break;    
    case "12":
      $mes_texto="Diciembre";
      break;    
  }
$f_texto = date("j", mktime(0,0,0,$mes,$dia,$anio))." de ".$mes_texto;
if($m_anio == TRUE)
	{
	$f_texto.= " de ".$anio;
	}
	return($f_texto);
}
?>