﻿<?php

function sqlcon($nombre, $contraseña, $basededatos, $servidor){

	$name=$nombre;
	$pass=$contraseña;
	$bd=$basededatos;
	$location=$servidor;

	if(($_POST['sql'])!=""){

	$asd=new mysqli ($location ,$name, $pass, $bd);
	$sql = $_POST['sql'];

		if (!$resultado = $asd->query($sql)) {
	
			echo 'Esa consulta no furula.';

		}else{

			$fieldinfo = $resultado->fetch_fields();

			echo "<table class = 'center'> \n"; 
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

			if(isset($_SESSION['array'])){
			
				array_push($_SESSION['array'], $sql);
			
			}else{
			
				$miarray[]=$sql;
				$_SESSION['array']=$miarray;
			
			}	
		}	
	}
}

?>