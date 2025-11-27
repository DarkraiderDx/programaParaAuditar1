<?php 
function depurar_cadena($cadena_origen){
	static $s_a_buscar =     array('^', '$', '&', '(', ')', '<', '>', '`', '\'', '"', '|', ',', '@', '_', '?', '%', '-', '~', '+', '.', '[', ']', '{', '}', ':', '\\', '/', '=', '#', '\'', ';', '!', '¿','!','¡');
	static $s_a_reemplazar = array(' ', ' ', ' ', ' ', ' ', ' ', ' ', '',  '',   ' ', ' ', ' ', ' ', '',  ' ', ' ', '',  ' ',  ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ' , ' ', ' ', ' ', ' ',  ' ', ' ',' ',' ',' ');
	static $p_a_buscar = 	 array(' a ', ' el ', ' la ', ' los ', ' y ', ' o ', ' las ', ' que ', ' mi ', ' de ', ' no ', ' del ',' en ',' font ','img');
	static $p_a_reemplazar = array(' ',   ' ',    ' ',    ' ',     ' ',   ' ',   ' ',     ' ',     ' ',    ' ',    ' ',    ' ',    ' ',   ' ',' ');
	static $l_a_buscar = 	 array(' a ', ' b ', ' c ', ' d ', ' e ', ' f ', ' g ', ' h ', ' i ', ' j ', ' k ', ' l ');
	static $l_a_reemplazar = array(' ',   ' ',   ' ',   ' ',   ' ',   ' ',   ' ',   ' ',   ' ',    ' ',  ' ',   ' ');
	$cadena_origen =  ' ' . strip_tags(strtolower($cadena_origen)) . ' ';
	for($i = 0; $i < count($s_a_buscar); $i++)
	{
	$cadena_origen =  str_replace($s_a_buscar[$i], $s_a_reemplazar[$i], $cadena_origen);
	}
	for($i = 0; $i < count($p_a_buscar); $i++)
	{
		$cadena_origen =  str_replace($p_a_buscar[$i], $p_a_reemplazar[$i], $cadena_origen);
	}
	for($i = 0; $i < count($p_a_buscar); $i++)
	{
		$cadena_origen =  str_replace($l_a_buscar[$i], $l_a_reemplazar[$i], $cadena_origen);
	}
	return trim($cadena_origen);
}
function separar($cadena2){
	//$c_criterio=array();
	$cadaux = split(' ',depurar_cadena($cadena2));
	$newcad = "";
	for($i=0;$i<count($cadaux);$i++)
		{
		if(trim($cadaux[$i]) != ""){
		$newcad.=$cadaux[$i]." ";
				}
		}
	return split(' ',trim($newcad));
}
?>