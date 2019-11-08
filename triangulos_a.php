<form>
	Lado 1    
	<input name="lado1"/>
	</br>
	Lado 2    
	<input name="lado2"/>
	</br>
	Lado 3  
	<input name="lado3"/>
	</br>
	<button>Comprobar</button>
	</br>
	</br>
</form>

<?php

function lados($a,$b,$c){
	
	if(is_numeric($a) && is_numeric($b) && is_numeric($c) && ($a)>0 && ($b)>0 && ($c)>0){

			if($a==$b && $a==$c){
				$r='Triángulo equilátero.';
			}elseif($a==$b || $a==$c || $b==$c){
				$r='Triángulo isósceles.';
			}else
				$r='Triángulo escaleno.';
			return $r;
				
	}else
		echo  'Introduce valores numéricos, por favor.';

}


if(isset($_GET['lado1'], $_GET['lado2'], $_GET['lado3'])){
	echo lados($_GET['lado1'], $_GET['lado2'], $_GET['lado3']);
}else
	echo 'Introduce la medida de los lados del triángulo.';



echo '<br><br>Vectores de test:<br><br>';
echo lados(1,1,1).' ¿equilátero?<br/>';
echo lados(1,2,1).' ¿isósceles?<br/>';
echo lados(1,2,3).' ¿escaleno?<br/>';


?>