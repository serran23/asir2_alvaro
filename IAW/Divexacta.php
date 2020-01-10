<form>
	Primer número 
	<input name="num1" size="4" required /> 
	</br>
	</br>
	Segundo número 
	<input name="num2" size="4" required /> 
	</br>
	</br>
	</br>
	<button>Convertir</button>
	<input type="reset" value="Borrar">
	</br>
	</br>
</form>


<!--Formulario, se meten los valores con los que trabajaremos, tiene dos cajitas, un botón para mandar los datos y otro para resetearlos. Inpensable.-->

<?php


if(isset($_GET['num1']) && isset($_GET['num2'])){
	
/*Mítico if para que nos diga cosas la 1º vez que entremos*/

	$a=($_GET['num1']);
	$b=($_GET['num2']);
	
/*Pasamos los valores metidos en las cajitas a variables.*/
	
	if($a%$b==0){
		
		echo 'División exacta, chupi.';
		
	}else{
		
		$res=$a%$b;
		echo 'Hay un resto de '.$res.' y tal.';
	}

/*Hacemos la operación y según el resultado procedemos: si es par, mensajito y pa casa, si es impar, metemos el resultado en otra variable y se la cantamos por pantalla.*/

}else
	echo 'Introduce las 2 cifras a comprobar';



?>