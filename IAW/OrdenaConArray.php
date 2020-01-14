<form align="center">
	</br>
	</br>
	<input type="submit" name="boton" value="Randomize that s..t"> 
	</br>
	</br>
</form>


<!--Me cansé del formulario, y paso de meter 10 cajas para meter uno a uno 10 números. Vamos a generarlos aleatoriamente y luego que se ordenen. El botonsito, para empezar y nada más.-->

<?php
//Aqui le metemos la orden de ejecutar la función ordena cuando le demos al botón
if(isset($_GET['boton'])){
	ordena();
}
//Y aquí comienza la magia y nuestra función.

function ordena(){
	
	$numeros=[];
	
	echo 'Números seleccionados: ';
	for ($i=1;$i<=10;$i++){
		
//Metemos un bonito bucle d-while para que no nos repita números, básicamente se queda generando números hasta que comprueba que el número generado no exista ya en el array. ¿Necesario? Si, totalmente, bueno un poco...No.
		$ok=FALSE;
		do {
			$a=(random_int(0, 100));
			if(!IN_ARRAY($a, $numeros)){
				$numeros[$i]=$a;
				$ok=TRUE;
			}
			
		} while ($ok!=TRUE);
		
//Imprimimos el número que acabamos de meter al array (el nuevo número, vaya).		
		echo $numeros[$i];
		
//Añadimos guarraperamente las comas para separar los números, y el punto cuando acabe.
		if($i==10){
			
			echo '.';
		}else{
			echo ', ';
		}
		
	}
	
//Ahora le decimos que ordene los números que hemos metido al array.
	echo '</br>';
	echo '</br>';
	
	sort($numeros);
	
//Y los vamos cantando con un bonito for.
	echo 'Números ordenados: ';
	for($i = 0; $i<(count($numeros)) ; $i++){
	
	echo $numeros[$i];
	
	if($i==(count($numeros)-1)){
		
		echo '.';
	}else{
		echo ', ';
		}
	}
//Aquí llamamos a una funcion vital y que será del disfrute de todos (sacaremos los resultados en una tabla, wiiiiii)
	echo dandolotodo($numeros);
}

//La susodicha función.
function dandolotodo($numeros){

	echo '</br>';
	echo '</br>';
//Vamos a ir metiendo en la variable html lo que es una tabla en html, línea a línea, para que luego la imprima.
    $html = '<table border=1 text-align: center>';
    // Aquí creamos la fila de cabecera (los numericos de orden) y centramos los valores.
	$html .= '<tr>';
    foreach($numeros as $key=>$value){
            $html .= '<th text-align: center>' . htmlspecialchars($key+1).'º' . '</th>';
        }
    $html .= '</tr>';
//Y aquí metemos cada valor del array en la celda correspondiente de la tabla. Como ya están ordenados, básicamente vamos rellenando la tabla de menor a mayor, y nos van a coincidir
        $html .= '<tr>';
        foreach($numeros as $value){
            $html .= '<td text-align: center>' . htmlspecialchars($value) . '</td>';
        }
        $html .= '</tr>';
    $html .= '</table>';
	
//Se acabó, ahora metemos la tabla en el return y a llamarlo dentro de la otra función. Easy.
    return $html;
}
?>
