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

<?php


function angulos($A,$B,$C){
	if(is_numeric($A) && is_numeric($B) && is_numeric($C) && ($A)>0 && ($B)>0 && ($C)){
		if((($A)+($B)+($C))==180){
			if($A==90 || $B==90 || $C==90){
				$r='Triángulo rectángulo.';
			}elseif($A>90 || $B>90 || $C>90){
				$r='Triángulo obtusángulo.';
			}else
				$r='Triángulo acutángulo.';
			return $r;
			
		}else
			echo 'Los ángulos de un triángulo han de sumar 180º, revisa que has metido.';
	}else
		echo 'Introduce valores numéricos, por favor.';
	
}


if(isset($_GET['angulo1'], $_GET['angulo2'], $_GET['angulo3'])){
	
	echo angulos(($_GET['angulo1']),($_GET['angulo2']),($_GET['angulo3']));
	
}else
	echo 'Introduce la medida de los angulos del triángulo.';
?>