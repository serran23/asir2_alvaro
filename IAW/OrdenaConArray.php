<form align="center">
	</br>
	</br>
	<input type="submit" name="boton" value="Comenzar"> 
	</br>
	</br>
</form>


<!--Me cansé del formulario, y paso de meter 10 cajas para meter uno a uno 10 números. Vamos a generarlos aleatoriamente y luego que se ordenen. El botonsito, para empezar y nada más.-->

<?php

if($_GET['boton']){
	ordena();
}

/*Aqui le metemos la orden de ejecutar la función ordena cuando le demos al botón*/

function ordena(){

	echo 'Números seleccionados: ';
	for ($i=1;$i<=10;$i++){
		$numeros[$i]=(random_int(0, 100));
		echo $numeros[$i];
	
		if($i==10){
			
			echo '.';
		}else{
			echo ', ';
		}
		
	}
	
/*Hasta aqui el bucle del ejercicio anterior mas o menos, solo que ahora le decimos que use la $i para seleccionar la posición del array donde meterá cada número. 10 números, 10 posiciones*/
	echo '</br>';
	echo '</br>';
	
	sort($numeros);
	
/*Ordenamos el array otra vez*/

	echo 'Números ordenados: ';

	for($i = 0; $i<(count($numeros)) ; $i++){
	
	echo $numeros[$i];
	
	if($i==(count($numeros)-1)){
		
		echo '.';
	}else{
		echo ', ';
		}
	}
	
/*Lo mismo de antes, pero ahora enseñamos los números ordenados*/

}


?>