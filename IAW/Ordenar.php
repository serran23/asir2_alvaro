<form>
	Primer número 
	<input name="num1" size="4" /> 
	</br>
	</br>
	Segundo número 
	<input name="num2" size="4" /> 
	</br>
	</br>
	Tercer número 
	<input name="num3" size="4" /> 
	</br>
	</br>
	Cuarto número 
	<input name="num4" size="4" /> 
	</br>
	</br>
	<input type="submit" name="numr" value="O randomizamos los números">
	</br>
	</br>
	<button>Ordenar</button>
	<input type="reset" value="Borrar">
	<button href="http://localhost/asir2_alvaro/IAW/Ordenar.php?">Poner a 0 los valores.</button>
	</br>
	</br>
	</br>
	</br>
</form>


<!--Formulario, se meten los valores con los que trabajaremos, tiene cuatro cajitas, un botón para mandar los datos y otro para resetearlos. Lo de siempre, vaya.-->

<?php
if(isset($_GET['numr'])){

	$a=(random_int(0, 100));
	$b=(random_int(0, 100));
	$c=(random_int(0, 100));
	$d=(random_int(0, 100));
		
	$_GET['num1']=$a;
	$_GET['num2']=$b;
	$_GET['num3']=$c;
	$_GET['num4']=$d;
	
	
	echo 'Han salido '.$a.', '.$b.', '.$c.', '.$d.'.</br></br>';
	
}



if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']) && isset($_GET['num4'])){
	
/*Mensajito de bienvenida habitual para la 1º entrada*/
	
$numeros=[($_GET['num1']),($_GET['num2']),($_GET['num3']),($_GET['num4'])];
/*Metemos los números en 1 array*/
sort($numeros);
/*Le decimos al array que se ordene solo, como tiene que ser, con el if que fixea el botón de reinicio de la página*/
if(($_GET['num1']!='') && ($_GET['num2']!='') && ($_GET['num3']!='') && ($_GET['num4']!='')){
	echo $numeros[0].', '.$numeros[1].', '.$numeros[2].', '.$numeros[3].'.';
}
/*E imprimimos las 4 posiciones del array*/
echo '</br>';
echo '</br>';

/*Otra forma divertida e innecesaria para sacar el resultado (con el fix)*/
for($i = 0; $i<(count($numeros)) ; $i++){
	
	echo $numeros[$i];
	
	if(($_GET['num1']!='') && ($_GET['num2']!='') && ($_GET['num3']!='') && ($_GET['num4']!='')){
		if($i==(count($numeros)-1)){
			
			echo '.';
		}else{
			echo ', ';
		}
	}
}

}else
	echo 'Introduce las 4 cifras a ordenar.';
?>
