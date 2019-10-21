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
	</br>
	<button>Comprobar</button>
	</br>
	</br>
	<button href="http://localhost/asir2_alvaro/triangulos_c.php">Poner a 0 los valores.</button>
	</br>
	</br>
</form>



<?php

function operaciones($a,$b,$c){
	$x=($a**2-$b**2+$c**2)/(2*$c);
	$h=sqrt($a**2-$x**2);
	$A=round(atan($h/($c-$x))*360/(2*pi()),2);
	$B=round(atan($h/$x)*360/(2*pi()),2);
	$C=180-($A+$B);
	

	$angulos=[$A,$B,$C];
	
	$angulos;
	
	return $angulos;

}
operaciones($_GET['lado1'],$_GET['lado2'],$_GET['lado3']);

function lados(){
	$r='escaleno';
	if($a==$b or $b==$c) $r='isósceles';
	if($a==$b and $b==$c) $r='equilátero';
	
	return $r;
}

function angulos(){
	$r='acutángulo';
	if($A>90 or $B>90 or $C>90) $r='obtusángulo';
	if($A==90 or $B==90 or $C==90) $r='rectángulo';
	
	return $r;
}


$res=[
		'angulos'=>[$r[0],$r[1],$r[2]],
		'tipo_lados'=>[lados()],
		'tipo_angulos'=>[angulos()],
	];



echo 'Es un triángulo '.lados($_GET['lado1'],$_GET['lado2'],$_GET['lado3']).' y '.angulos($angulos['tipo_angulos'][0],$angulos['tipo_angulos'][0],$angulos['tipo_angulos'][0]).'.';

?>