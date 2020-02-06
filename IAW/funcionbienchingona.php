<?php

function fun($maquina ,$usuario, $contraseña, $bbdd){
	
	
	
	$asd=new mysqli($maquina ,$usuario, $contraseña, $bbdd);
	
	if($asd->connect_error){
		
		die('No funchona, fallo número '.$asd->connect_errno);
		
	}else{
		
		echo 'Conectado desde la funchón. Mu bien.';
		
	}
	
}

?>