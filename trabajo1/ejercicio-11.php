<?php
/* 
Una función que dado el radio de un círculo devuelva el área del círculo
*/

function area_circulo($radio){
	
	$area = 3.141592 * ($radio * $radio);
	echo "El área del círculo es: {$area}";
}

area_circulo(5);

?>