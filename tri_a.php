<?php
function lados($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c)
		$r='isósceles';
	if($a==$b and $b==$c)
		$r='equilátero';
	return $r;
}
function angulo($A,$B,$C){
	$r='acutángulo';
	if($A==90 or $B==90 or $C==90)
		$r='rectángulo';
	if($A>90 or $B>90 or $C>90)
		$r='obtusángulo';
	return $r;
}
function triangulo($t){
	$r=null;
	$r.=lados(
		$t['lados'][0],
		$t['lados'][1],
		$t['lados'][2],
	);
	$r.=' '.angulo(
		$t['angulos'][0],
		$t['angulos'][1],
		$t['angulos'][2],
	);
	return $r;
}
echo triangulo([
	'lados'=>[1,1,sqrt(2)],
	'angulos'=>[45,45,90],
]);