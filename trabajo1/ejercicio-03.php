<?php
//Crear una función que se llame promedio3, que reciba como parámetro tres valores y
//devuelva el promedio de los mismos
function promedio3($num1, $num2, $num3){
	$promedio = ($num1+$num2+$num3) / 3;
	
	echo " El promedio de los 3 números es: ".$promedio;
	
}

promedio3(1,5,10);

?>