<?php
//Diseñar una función que tenga como parámetros dos números, y que calcule el máximo
function maximo($num1, $num2){
	if($num1==$num2){

		echo " Ambos números son iguales.";
	
	} elseif($num1>$num2){
			echo " El valor maximo  es ".$num1;
		} else{
				echo " El valor maximo  es ".$num2;
			  }		
}

maximo(5,5);

?>