<?php
//Crear una función que lea notas hasta que ingrese -1 y devuelve el promedio de las notas
//leídas.

$array_notas = [4,6,8,10,1,5,3,9,-1,7,4,3,7,3];

function promedio_notas($array_notas){
	
$suma_notas = 0;
$cantidad = 0;
	foreach($array_notas as $nota){
		$suma_notas+=$nota;
		$cantidad++;	
		if($nota === -1){
		
		$promedio = $suma_notas / $cantidad;
		
		echo "Se leyeron {$cantidad} notas y el promedio de las notas leídas es : ".$promedio;
		}
	}
}

promedio_notas($array_notas);

?>