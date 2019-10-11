
<form>
	<input name="nota"/>
	</br>
	<button>Comprobar</button>
	</br>
</form>

<?php
if (isset($_GET['nota'])){
	if ($_GET['nota']>=0 && $_GET['nota']<=10){
		if ($_GET['nota']>=5){
			echo 'Aprobado';
		}else
			echo 'Suspenso';
	}else
		echo 'Mete un número del 0 al 10 o no funciono.';
}else
	echo 'Mete una nota arriba del 0 al 10.';
?>
