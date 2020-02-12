<?php

function fun($maquina ,$usuario, $contraseña, $bbdd){
	
	ini_set('display_errors', 0);
	
	$asd=new mysqli ($maquina ,$usuario, $contraseña, $bbdd);
	
	if($asd->connect_error){
		

		
		echo 
		"<link rel='stylesheet' href='Pazos.css'>
		<h2>Ups, algo no furula, el mono no lo aprueba</h2>
		<form action='ConectarBBDD.html' method='post'>
		</br>
		</br>
		<button name='reintentar'>Señor mono, déjeme volver a probar</button>
		</form>";
		die();


		
	}else{
		
		echo 
		"<link rel='stylesheet' href='Pazos.css'>
		<h2>Todo correcto, el mono de seguridad lo aprueba.</h2>
		<form action='Entradaalinfierno.php' method='post'>
		<button name='consultas'>Ir con el mono maestro</button>
		</form>";
	}
	return $asd;
}

?>