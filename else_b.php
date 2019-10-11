<form>
	<input name="nota"/>
	</br>
	<button>Comprobar</button>
	</br>
</form>

<?php
if (isset($_GET['nota'])){
	if ($_GET['nota']>=0 && $_GET['nota']<=10){
		if ($_GET['nota']<5){
			echo 'Pendiente';
		}elseif ($_GET['nota']>=5 && $_GET['nota']<7){
			echo 'Aprobado';
		}elseif ($_GET['nota']>=7 && $_GET['nota']<8.5){
			echo 'Notable';
		}else {
			echo 'Sobresaliente';
		}
	}else
		echo 'Mete un número del 0 al 10 o no funciono.';
}else
	echo 'Mete una nota arriba del 0 al 10.';
?>