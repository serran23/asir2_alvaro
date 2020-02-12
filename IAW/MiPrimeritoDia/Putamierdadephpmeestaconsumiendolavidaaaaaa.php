<html>

<head>
  <title>Dándolo Todo</title>
  <link rel="stylesheet" href="Wiiiiii.css">
</head>

<body>

	<form name='ConsultaSQL' method='post'>
		<h1 align="center">Consulta SQL</h1>
		<h2 align="center">Introduzca su consulta SQL:</h2>
		<input align="center" name="sql" size="100" value="<?php echo($_POST['sql']);?>" required/> 
			<input name="consultasql" type="hidden" value="consultasql" /> 
		</br>
		</br>
		</br>
		<button name="Consultar">Consulte señor mono</button>
		</br>
		</br>
	</form>
	<form name='EnseñaconsultasSQL' method='post'>
		<input name="show" type="hidden" value="show" /> 
		<input name="sql" type="hidden" value="" /> 
		<button name="MostrarLista">Mostrar lista de consultas realizadas</button>
	</form>
	<form name='ImprimeconsultasSQL' method='post'>
		<input name="print" type="hidden" value="print" /> 
		<input name="sql" type="hidden" value="" /> 
		<button name="ImprimirLista">Imprimir lista</button>
	</form>
	<form name='BorraconsultasSQL' method='post'>
		<input name="limpiar" type="hidden" value="limpiar" /> 
		<input name="sql" type="hidden" value="" /> 
		<button name="LimpiarLista">Limpiar lista</button>
	</form>
		<form action='Entradaalinfierno.php'>
		<button name="volver">Volver</button>
	</form>
</body>


<?php

session_start();

include ("ImprimirLista.php");
include ("ListaConsultas.php");
include ("ConsultaSQL.php");
include ("LimpiarLista.php");

if(isset($_POST['consultasql'])){
	
	if(!(isset($_SESSION['array']))){
	
		$miarray[]=$POST['sql'];
		$_SESSION['array']=$miarray;
	
	}			

	sqlcon($_SESSION['name'], $_SESSION['pass'], $_SESSION['bd'], $_SESSION['location']);
}

if(isset($_POST['show'])){
		
	listar($_SESSION['array']);
		
}

if(isset($_POST['print'])){
	
	imprimir($_SESSION['array']);

}

if(isset($_POST['limpiar'])){
	
	if(!(isset($_SESSION['array']))){
	
		$miarray[]=$POST['sql'];
		$_SESSION['array']=$miarray;
	
	}	
	
	limpiar($_SESSION['array']);
}

?>
