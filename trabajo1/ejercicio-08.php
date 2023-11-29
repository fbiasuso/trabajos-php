<?php
/* 
Una función que dado la longitud de un lado de un cuadrado devuelva el perímetro
*/

function perimetro_cuadrado($lado){
	
	$perimetro = $lado * 4;
	echo "El perimetro del cuadrado es: {$perimetro}";
}

perimetro_cuadrado(4);

?>