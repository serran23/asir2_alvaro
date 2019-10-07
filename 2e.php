<?php

function tablas(){
	for($x=0;$x<=10;$x++){		
			echo '</br>Tabla del '.$x.'</br></br>';
		for($y=0;$y<=10;$y++){
			echo $x.'x'.$y.'='.($x*$y).'</br>';
		}
	}
}
tablas();

?>