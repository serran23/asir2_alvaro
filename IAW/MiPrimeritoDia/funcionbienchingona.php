<?php

function fun($maquina ,$usuario, $contraseña, $bbdd){
		
	$asd=new mysqli ($maquina ,$usuario, $contraseña, $bbdd);
	
	if($asd->connect_error){
		
		die('No funchona, fallo número '.$asd->connect_errno);

		
	}else{
		
		echo "Todo correcto.
		<form action='Putamierdadephpmeestaconsumiendolavidaaaaaa.php' method='post'>
		<input name='sql' type='hidden' value='' /> 
		</br>
		</br>
		<button>Ir a Consultas</button>
		</form>";
		
	}
	return $asd;
}

?>
