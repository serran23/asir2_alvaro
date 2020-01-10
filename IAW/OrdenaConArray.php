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

	echo dandolotodo($numeros);
}
//Y lo imprimimos otra vez, pero ahora ordenado.

function dandolotodo($numeros){

//Otra función fruto del aburrimiento, para mostrar los números ordenados en una tabla

	echo '</br>';
	echo '</br>';
//Vamos a ir metiendo en la variable html lo que es una tabla en html, línea a línea, para que luego la imprima.
    $html = '<table border=1>';
    // Aquí creamos la fila de cabecera (los numericos de orden)
    $html .= '<tr>';
    foreach($numeros as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key+1).'º' . '</th>';
        }
    $html .= '</tr>';

//Y aquí metemos cada valor del array en la celda correspondiente de la tabla. Como ya están ordenados, básicamente vamos rellenando la tabla de menor a mayor, y nos van a coincidir

        $html .= '<tr>';
        foreach($numeros as $value){
            $html .= '<td>' . htmlspecialchars($value) . '</td>';
        }
        $html .= '</tr>';


    $html .= '</table>';
	
//Se acabó, ahora metemos la tabla en el return y a llamarlo dentro de la otra función. Easy.

    return $html;
}


?>
