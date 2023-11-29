<?php
/* 
Una función que dado el radio de un círculo devuelva la circunferencia (perímetro del
círculo)
*/

function perimetro_circulo($radio){
	
	$perimetro = 3.141592 * ($radio * 2);
	echo "El perimetro del círculo es: {$perimetro}";
}

perimetro_circulo(5);

?>