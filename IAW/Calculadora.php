<form action='Calculadora.php' method='post'>
	Primer número 
	<input name="num1" size="4" type="number" required /> 
	</br>
	</br>
	Segundo número 
	<input name="num2" size="4" type="number" required /> 
	</br>
	</br>
	<input type="radio" name="calc" value="sum" /required> Sumar
	<input type="radio" name="calc" value="res"> Restar
	<input type="radio" name="calc" value="mul"> Multiplicar
	<input type="radio" name="calc" value="div"> Dividir<br>
	</br>
	<button>Ejecutar (la operación)</button>
	<input type="reset" value="Borrar">
	</br>
	</br>
</form>

<?php

$a=$_POST['num1'];
$b=$_POST['num2'];

switch ($_POST['calc']){
	case 'sum':
		echo $a.'+'.$b.'='.($a+$b);
		break;
	case 'res':
				echo $a.'-'.$b.'='.($a-$b);
		break;
	case 'mul':
				echo $a.'x'.$b.'='.($a*$b);
		break;
	case 'div':
				echo $a.'/'.$b.'='.($a/$b);
		break;
}

?>