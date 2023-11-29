<?php
/* 
Una función que dado un número de mes y me devuelva la cantidad de días de ese mes
(suponiendo que no es un año bisiesto)
*/

function dias_mes($mes){
	
	switch($mes){
		case 2:
				echo "El mes {$mes} tiene 28 días. ";
		break;
		case 1:
		case 3:
		case 5:	
		case 7:
		case 8:
		case 10:
		case 12:
				echo "El mes {$mes} tiene 31 días. ";
		break;
		case 4:
		case 6:
		case 9:	
		case 11:
				echo "El mes {$mes} tiene 30 días. ";
		break;
		default:
				echo "El mes {$mes} ingresado no es válido.";
	}
	
}

dias_mes(12);

?>