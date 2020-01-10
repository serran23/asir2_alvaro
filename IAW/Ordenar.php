<form>
	Primer número 
	<input name="num1" size="4" required /> 
	</br>
	</br>
	Segundo número 
	<input name="num2" size="4" required /> 
	</br>
	</br>
	Tercer número 
	<input name="num3" size="4" required /> 
	</br>
	</br>
	Cuarto número 
	<input name="num4" size="4" required /> 
	</br>
	</br>
	</br>
	<button>Ordenar</button>
	<input type="reset" value="Borrar">
	</br>
	</br>
</form>


<!--Formulario, se meten los valores con los que trabajaremos, tiene cuatro cajitas, un botón para mandar los datos y otro para resetearlos. Lo de siempre, vaya.-->

<?php


if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']) && isset($_GET['num4'])){
	
/*Mensajito de bienvenida habitual para la 1º entrada*/
	
$numeros=[($_GET['num1']),($_GET['num2']),($_GET['num3']),($_GET['num4'])];

/*Metemos los números en 1 array*/

sort($numeros);

/*Le decimos al array que se ordene solo, como tiene que ser*/

echo $numeros[0].', '.$numeros[1].', '.$numeros[2].', '.$numeros[3].'.';

/*E imprimimos las 4 posiciones del array*/

echo '</br>';
echo '</br>';

for($i = 0; $i<(count($numeros)) ; $i++){
	
	echo $numeros[$i];
	
	if($i==(count($numeros)-1)){
		
		echo '.';
	}else{
		echo ', ';
	}
}

/*Otra forma divertida e innecesaria para sacar el resultado*/

}else
	echo 'Introduce las 4 cifras a ordenar.';



?>