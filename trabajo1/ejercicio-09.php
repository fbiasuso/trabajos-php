<?php
/* 
Una función que dado la longitud de un lado de un cuadrado devuelva la superficie
*/

function superficie_cuadrado($lado){
	
	$superficie = $lado * $lado;
	echo "La superficie del cuadrado es: {$superficie}";
}

superficie_cuadrado(5);

?>