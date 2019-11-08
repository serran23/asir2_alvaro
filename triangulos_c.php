<form>
	Ángulo 1    
	<input name="angulo1"/>
	</br>
	Ángulo 2    
	<input name="angulo2"/>
	</br>
	Ángulo 3  
	<input name="angulo3"/>
	</br>
	<button>Comprobar</button>
	</br>
	</br>
</form>

<form>
	<button href="http://localhost/asir2_alvaro/triangulos_c.php">Poner a 0 los valores.</button>
	</br>
	</br>
</form>

<?php

function triangulo($a,$b,$c,$A,$B,$C){
	
	$a=$A;
	$b=$B;
	$c=$C;
	
	echo lados($a,$b,$c);
	echo angulos($A,$B,$C);
	
}

function lados($a,$b,$c){
	



	if(is_numeric($a) && is_numeric($b) && is_numeric($c) && ($a)>0 && ($b)>0 && ($c)>0){

			if($a==$b && $a==$c){
				$r='Triángulo equilátero ';
			}elseif($a==$b || $a==$c || $b==$c){
				$r='Triángulo isósceles ';
			}else
				$r='Triángulo escaleno ';
			return $r;
				
	}


}

function angulos($A,$B,$C){
	if(is_numeric($A) && is_numeric($B) && is_numeric($C) && ($A)>0 && ($B)>0 && ($C)){
		if((($A)+($B)+($C))==180){
			if($A==90 || $B==90 || $C==90){
				$r='y rectángulo.';
			}elseif($A>90 || $B>90 || $C>90){
				$r='y obtusángulo.';
			}else
				$r='y acutángulo.';
			return $r;
			
		}else
			echo 'Los ángulos de un triángulo han de sumar 180º, revisa que has metido.';
	}else
		echo 'Introduce valores numéricos, por favor.';
	
}



if(isset($_GET['angulo1'], $_GET['angulo2'], $_GET['angulo3'])){
	
	echo triangulo(1,1,1,($_GET['angulo1']),($_GET['angulo2']),($_GET['angulo3']));
	
}else
	echo 'Introduce la medida de los angulos del triángulo.';

echo '<br><br>Vectores de test:<br><br>';
echo triangulo(1,sqrt(2),1,45,90,45).' ¿rectángulo-isósceles?<br/>';
echo triangulo(1,sqrt(2),1,45,45,90).' ¿rectángulo-isósceles?<br/>';
echo triangulo(1,sqrt(2),1,90,45,45).' ¿rectángulo-isósceles?<br/>';
echo triangulo(1,1,1,60,60,60).' ¿acutángulo-equilátero?<br/>';
echo triangulo(1,1,1,100,40,40).' ¿obtusángulo-isósceles?<br/>';

?>