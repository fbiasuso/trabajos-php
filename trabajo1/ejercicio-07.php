<?php
/* 
Una función que se denomine imprimirValores que dado un número por parámetro,
imprima cual es el valor siguiente, el doble y el cuadrado
*/

function imprimirValores($numero){
	
	$siguiente = $numero + 1;
	$doble = $numero * 2;
	$cuadrado = $numero * $numero;
	echo "El valor siguiente es {$siguiente} <br> El doble es {$doble} <br> El cuadrado es {$cuadrado}";
}

imprimirValores(4);

?>