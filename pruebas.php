<?php

// array enumerado
$mesesA=[
	'enero',
	'febrero',
];

// array asociativo
$mesesB=[
	'primero'=>'enero',
	'segundo'=>'febrero',
];

$meses=[
	[
		'enero',
		'invierno',
		31,
	],[
		'febrero',
		'invierno',
		'28/29',
	],[
		[
			'marzo','Marzo',
		],
		'invierno/primavera',
		31
	],
];
echo $meses[2][0][1];

echo '<pre>';
print_r($mesesA);
print_r($mesesB);
echo $mesesA[0];
echo $mesesB;
echo '</pre>';