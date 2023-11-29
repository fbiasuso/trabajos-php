<?php
//Realizar una función, a la que se le pase como parámetro un número N, y muestre por
//consola N veces, el siguiente mensaje: “Bienvenidos al curso Full Stack”
function repetidor_mensaje($veces){
	for($i=0;$i<$veces;$i++){

		echo $i." - Bienvenidos al curso Full Stack <br>";
	
	}	
}

repetidor_mensaje(6);

?>