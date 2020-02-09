<?php

function imprimir($a){

	fopen("Consultas.txt", "w");
	for($i=0;$i<=(count($a)-1);$i++){
		
		
		$actual = file_get_contents('Consultas.txt');
		$actual .= $a[$i]."\n";
		file_put_contents('Consultas.txt', $actual);
		
	}
	echo "Te las he pasado al fichero 'Consultas.txt'. Loveya.";

}

?>