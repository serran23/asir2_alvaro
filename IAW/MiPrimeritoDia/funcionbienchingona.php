<?php

function fun($maquina ,$usuario, $contraseña, $bbdd, $consulta){
	
	
	
	$asd=new mysqli ($maquina ,$usuario, $contraseña, $bbdd);
	
	if($asd->connect_error){
		
		die('No funchona, fallo número '.$asd->connect_errno);
		$b=FALSE;

		
	}else{
		
		if($consulta==""){
			
		echo 'Todo correcto, no hay consulta.';			
			$b=TRUE;
			return $b;
			
		}else{
		
		echo 'Todo correcto, y la consulta da...<br/><br/>';
		
		
		$sql = $consulta;
		
		if (!$resultado = $asd->query($sql)) {
			// ¡Oh, no! La consulta falló. 
			echo "Lo sentimos, este sitio web está experimentando problemas.";

			// De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
			// cómo obtener información del error
			echo "Error: La ejecución de la consulta falló debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $asd->errno . "\n";
			echo "Error: " . $asd->error . "\n";
			exit;
		}else{
			
			$fieldinfo = $resultado->fetch_fields();
			
			echo "<table border = '1'> \n"; 
			echo "<tr>";
			foreach ($fieldinfo as $val){ 
				   echo "<th>".$val -> name."</th>"; 
			} 
			echo "</tr>";

			while ($rowres = $resultado->fetch_row()) {
				echo "<tr>";
				foreach ($rowres as $val){ 
				   echo "<td>".$val."</td>"; 
				} 
				echo "</tr>";
			}
			echo "</table> \n
			﻿<form action='ConectarBBDD.html' method='post'>
			</br>
			</br>
			<button>Otra consulta</button>
			</br>
			</br>
			</form>";
			
			
		}

		
		$b=TRUE;

		
		}
	return $b;
	}
}

?>
