<?php


function fun($maquina ,$usuario, $contraseña, $bbdd){
	
	session_start();
	
	$asd=new mysqli ($maquina ,$usuario, $contraseña, $bbdd);
	
	if($asd->connect_error){
		
		die('No funchona, fallo número '.$asd->connect_errno);

		
	}else{
		
		echo "Todo correcto.<br/><br/>
		<form action='LaMagia.php'>
		</br>
		</br>
		<button>Ir a Consultas</button>
		</form>";
		
	}
	return $asd;
}

?>
