<?php

function fun($maquina ,$usuario, $contraseña, $bbdd){
	
	error_reporting(0);
	ini_set('display_errors', 0);
	
	$asd=new mysqli ($maquina ,$usuario, $contraseña, $bbdd);
	
	if($asd->connect_error){
		

		
		echo 
		"<link rel='stylesheet' href='Wooooooooo.css'>
		<h2>Ups, algo no furula, el mono no lo aprueba</h2>
		<form action='ConectarBBDD.html' method='post'>
		<input name='sql' type='hidden' value='' /> 
		</br>
		</br>
		<button>Señor mono, déjeme volver a probar</button>
		</form>";
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		die();


		
	}else{
		
		echo 
		"<link rel='stylesheet' href='Wooooooooo.css'>
		<h2>Todo correcto, el mono lo aprueba</h2>
		<form action='Putamierdadephpmeestaconsumiendolavidaaaaaa.php' method='post'>
		<input name='sql' type='hidden' value='' /> 
		</br>
		</br>
		<button>Señor mono, déjeme hacer consultas</button>
		</form>";
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		
	}
	return $asd;
}

?>
