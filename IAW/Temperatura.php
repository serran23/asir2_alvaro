<?php

//Inicializamos las variables que usaremos para que no llore.
$c=NULL;
$f=NULL;
$k=NULL;

//Hacemos un switch que nos compare el valor seleccionado del menú con las 3 posibles respuestas.
	switch ($_POST['menu']){
		
//Ojo con hacer operaciones con números decimales, o metes la conversión a float o error party desu.
		case 0:
			$c=($_POST['numerito']);
			$f=(floatval($c)*9/5)+32;
			$k=floatval($c)+273.15;
			break;
		
		case 1:
			$f=($_POST['numerito']);
			$c=(floatval($f)-32)*5/9;
			$k=floatval($c)+273.15;
			break;
			
		case 2:
			$k=($_POST['numerito']);
			$c=floatval($k)-(273.15);
			$f=(floatval($c)*9/5)+32;
			break;

	}
	
//Imprimimos con el echo los resultados almacenados.
	echo $c.' grados celsius.</br>'.$f.' grados farenheit.</br>'.$k.' grados kelvin.';
	
//Y ya estaría, digo yo.
?>