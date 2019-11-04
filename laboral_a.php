<?php
$start=strtotime('2019-09-11');
$end=strtotime('2020-05-29');
$meses=[
	'01'=>'Enero',
	'02'=>'Febrero',
	'03'=>'Marzo',
	'04'=>'Abril',
	'05'=>'Mayo',
	'06'=>'Junio',
	'07'=>'Julio',
	'08'=>'Agosto',
	'09'=>'Septiembre',
	'10'=>'Octubre',
	'11'=>'Noviembre',
	'12'=>'Diciembre',
];
$count=0;

for($i=$start;$i<=$end;$i+=24*60*60){
	
	if ($i==$start){
		
		echo 'Comienzo del curso escolar';
		echo '</br>';
		echo '</br>';
		echo 'Septiembre';
		echo '</br>';
		echo '</br>';
		
	}
	

	
	if (date('d', $i)=='01'){
		
		echo '</br>';
		echo $meses[date('m', $i)];
		echo '</br>';
		echo '</br>';
			
	}
	

			
	echo date('Y/m/d', $i);
	echo '</br>';
	$count++;
	
	
	if ($i==$end){
		
		echo '</br>';
		echo '</br>';
		echo 'Fin del curso escolar';
		echo '</br>';
		echo 'Días lectivos: '.$count;
	
	}
}
 ?>