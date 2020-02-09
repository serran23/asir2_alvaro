﻿<?php

	session_start();

?>
<form action='Consulta.php' method='post'>
	Consulta SQL
	<input name="sql" size="100" value='SELECT * FROM emple' required/> 
	</br>
	</br>
	</br>
	<button>Consultar</button>
	<input type="reset" value="Borrar">
	</br>
	</br>
</form>
