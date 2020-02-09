<form method='post'>
	Consulta SQL
	<input name="sql" size="100" value="<?php echo($_POST['sql']);?>" required/> 
		<input name="consultasql" type="hidden" value="consultasql" /> 
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

include ("ImprimirLista.php");
include ("ListaConsultas.php");
include ("ConsultaSQL.php");
include ("LimpiarLista.php");

if(isset($_POST['consultasql'])){
	
	sqlcon($_SESSION['array'], $_SESSION['name'], $_SESSION['pass'], $_SESSION['bd'], $_SESSION['location']);
}

if(isset($_POST['show'])){
		
	listar($_SESSION['array']);
		
}

if(isset($_POST['print'])){
	
	imprimir($_SESSION['array']);

}

if(isset($_POST['limpiar'])){
	
	limpiar($_SESSION['array']);
}

?>