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

$hmodulos=[
	'01'=>['ASO',150],
	'02'=>['SRI',110],
	'03'=>['IAW',95],
	'04'=>['ASG',60],
	'05'=>['SAD',95],
	'06'=>['EIE',60],
	'07'=>['PASIR',30],
	'08'=>['FCT',410]
];

$hclase=[
	'01'=>['Mon',['SRI',3],['ASO',3]],
	'02'=>['Tue',['ASG',2],['EIE',2],['SAD',2]],
	'03'=>['Wen',['EIE',1],['IAW',3],['ASG',3]],
	'04'=>['Thu',['ASO',2],['IAW',2]],
	'05'=>['Fri',['ASG',1],['SAD',3],['SRI',3]]
];



$festivos=['2019-10-28','2019-10-29','2019-10-30','2019-10-31','2019-11-01','2019-12-06','2019-12-09','2019-12-23','2019-12-24','2019-12-25','2019-12-26','2019-12-27','2019-12-30','2019-12-31','2020-01-01','2020-01-02','2020-01-03','2020-01-06','2020-01-07','2020-02-24','2020-02-25','2020-02-26','2020-02-27','2020-02-28','2020-04-09','2020-04-10','2020-04-13','2020-04-14','2020-04-15','2020-04-16','2020-04-17','2020-05-01'];

$count=0;
$finde=[];



for($i=$start;$i<=$end;$i+=24*60*60){
	if (date('D', $i)=='Sat' || date('D', $i)=='Sun'){
		$finde[]=(date('Y/m/d', $i));
	}
}


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
	

	if (!IN_ARRAY(date('Y/m/d', $i), $finde) and !IN_ARRAY(date('Y-m-d', $i), $festivos)){
		echo date('Y/m/d', $i);
		echo '</br>';
		$count++;
	}
	
	
	if ($i==$end){
		
		echo '</br>';
		echo '</br>';
		echo 'Fin del curso escolar';
		echo '</br>';
		echo 'Días lectivos: '.$count;
	
	}
}
 ?>