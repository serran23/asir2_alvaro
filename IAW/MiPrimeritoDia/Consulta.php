<form method='post'>
	Consulta SQL
	<input name="sql" size="100" value="<?php echo($_POST['sql']);?>" required/> 
	</br>
	</br>
	</br>
	<button>Consultar</button>
	<input type="reset" value="Borrar">
	</br>
	</br>
</form>

<?php

session_start();

$name=$_SESSION['name'];
$pass=$_SESSION['pass'];
$bd=$_SESSION['bd'];
$location=$_SESSION['location'];

$asd=new mysqli ($location ,$name, $pass, $bd);
$sql = $_POST['sql'];

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
}		

?>
