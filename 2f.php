<?php

$meses=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');	

echo '</br>Meses con for:</br>';
for($i = 0; $i < count($meses); ++$i){
    echo $meses[$i].'</br>';
}

echo '</br>Meses con foreach:</br>';
foreach($meses as $mes){
    echo $mes.'</br>';
}
echo '</br>Meses con función (enero):</br>';
function mes($n){
	global $meses;
	return $meses[$n-1];
}
echo mes(1);

?>