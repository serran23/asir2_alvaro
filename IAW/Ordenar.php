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


<!--Formulario, 4 cajitas para meter númeors, 1 botón para lanzarlos, otro para borrar los números de las cajitas y otro para resetear la página--!>

<?php
if(isset($_POST['numr'])){

	$a=(random_int(0, 100));
	$b=(random_int(0, 100));
	$c=(random_int(0, 100));
	$d=(random_int(0, 100));
		
	$_POST['num1']=$a;
	$_POST['num2']=$b;
	$_POST['num3']=$c;
	$_POST['num4']=$d;
	
	
	echo 'Han salido '.$a.', '.$b.', '.$c.', '.$d.'.</br></br>';
	
}
	
//Metemos los números en 1 array.
	
$numeros=[($_POST['num1']),($_POST['num2']),($_POST['num3']),($_POST['num4'])];

//Le decimos al array que se ordene solo, como tiene que ser.

sort($numeros);

//Pero los creacionistas no nos dejan usar este método, así que vamos hacerlo al modo tradicional.

$num1=($_POST['num1']);
$num2=($_POST['num2']);
$num3=($_POST['num3']);
$num4=($_POST['num4']);
$num0=0;

if($num3>$num4){
	
	$num0=$num3;
	$num3=$num4;
	$num4=$num0;
	
}

if($num2>$num3){
	
	$num0=$num2;
	$num2=$num3;
	$num3=$num0;
	
}

if($num1>$num2){
	
	$num0=$num1;
	$num1=$num2;
	$num2=$num0;
	
}

if($num3>$num4){
	
	$num0=$num3;
	$num3=$num4;
	$num4=$num0;
	
}

if($num2>$num3){
	
	$num0=$num2;
	$num2=$num3;
	$num3=$num0;
	
}

if($num3>$num4){
	
	$num0=$num3;
	$num3=$num4;
	$num4=$num0;
	
}

//Metemos un filtro para que no nos saque cosas cuando no hayamos metido valores en las cajitas.

if(($_POST['num1']!='') && ($_POST['num2']!='') && ($_POST['num3']!='') && ($_POST['num4']!='')){
	
//Imprimimos las 4 posiciones del array.
	echo $numeros[0].', '.$numeros[1].', '.$numeros[2].', '.$numeros[3].'.';
	
//E imprimimos las variables de la forma arcaica tambien.
	echo '</br>'.$num1.', '.$num2.', '.$num3.', '.$num4.'.';
	
}

echo '</br>';
echo '</br>';

//Otra forma divertida e innecesaria para sacar el resultado (con el fix)*/
for($i = 0; $i<(count($numeros)) ; $i++){
	
//Buclesito para que no se repitan números.
	$ok=FALSE;
		do {
			$a=(random_int(0, 100));
			if(!IN_ARRAY($a, $numeros)){
				$numeros[$i]=$a;
				$ok=TRUE;
			}
			
		} while ($ok!=TRUE);
	
	echo $numeros[$i];
	
	if(($_POST['num1']!='') && ($_POST['num2']!='') && ($_POST['num3']!='') && ($_POST['num4']!='')){
		if($i==(count($numeros)-1)){
			
			echo '.';
		}else{
			echo ', ';
		}
	}
}
?>
