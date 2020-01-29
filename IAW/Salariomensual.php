<form action='Salariomensual.html' method='post'>
	<button>Calcular otra vez</button>
</form>

<?php

$nombre=$_POST['nombre'];
$horas=$_POST['horas'];

if($horas>0 && $horas<=40){
	echo 'El trabajador '.$nombre.' ha trabajado '.$horas.' horas este mes, lo que equivale a que toca pagarle '.(12*$horas).'€. Igual hay que plantearse despedirle, trabaja mu poco.';
	
}
elseif($horas>40){
	echo 'El trabajador '.$nombre.' ha trabajado '.$horas.' horas este mes, lo que equivale a que toca pagarle '.((($horas-40)*16)+(40*12)).'€. Igual hay que plantearse que trabaje menos.';
	
}
else{
	echo 'Nuestros trabajadores no destrabajan horas, eso es en la empresa de al lado.';
}

?>
