<form method='post'>
	Consulta SQL
	<input name="sql" size="100" value="<?php echo($_POST['sql']);?>" required/> 
	</br>
	</br>
	</br>
	<button>Consultar</button>
	</br>
	</br>
</form>
<form method='post'>
	<input name="show" type="hidden" value="show" /> 
	<input name="sql" type="hidden" value="" /> 
	<button>Mostrar lista de consultas realizadas</button>
</form>
<form method='post'>
	<input name="print" type="hidden" value="print" /> 
	<input name="sql" type="hidden" value="" /> 
	<button>Imprimir lista</button>
	</br>
	</br>
</form>
<form method='post'>
	<input name="limpiar" type="hidden" value="limpiar" /> 
	<input name="sql" type="hidden" value="" /> 
	<button>Limpiar lista</button>
	</br>
	</br>
	</br>
</form>

<?php

session_start();

if(isset($_POST['limpiar'])){
	
	$_SESSION['array']=array();
	echo 'Lista eliminada, con lo maja que era...';
}

$name=$_SESSION['name'];
$pass=$_SESSION['pass'];
$bd=$_SESSION['bd'];
$location=$_SESSION['location'];

if(($_POST['sql'])!=""){

$asd=new mysqli ($location ,$name, $pass, $bd);
$sql = $_POST['sql'];

	if (!$resultado = $asd->query($sql)) {

				echo "Lo sentimos, este sitio web está experimentando problemas.";
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

		if(isset($_SESSION['array'])){
		
			array_push($_SESSION['array'], $sql);
		
		}else{
		
			$miarray[]=$sql;
			$_SESSION['array']=$miarray;
		
		}	
	}	
}

if(isset($_POST['show'])){
	if(($_POST['show'])=="show"){
		
		for($i=0;$i<=(count($_SESSION['array'])-1);$i++){
			
			echo $_SESSION['array'][$i]."<br/>";
			
		}
	}
}

if(isset($_POST['print'])){
	
	if(($_POST['print'])=="print"){
		
		fopen("Consultas.txt", "w");
		for($i=0;$i<=(count($_SESSION['array'])-1);$i++){
			
			
			$actual = file_get_contents('Consultas.txt');
			$actual .= $_SESSION['array'][$i]."\n";
			file_put_contents('Consultas.txt', $actual);
			
		}
		echo "Te las he pasado al fichero 'Consultas.txt'. Loveya.";

	}
}


?>