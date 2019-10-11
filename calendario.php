<form>
	<input name="dia"/>
	</br>
	<button>Comprobar día</button>
	</br>
</form>

<?php
$calendario=[
['Enero',31,'invierno'],
['Febrero','28/29','invierno'],
['Marzo',31,'Invierno/Primavera'],
['Abril',30,'Primavera'],
['Mayo',31,'Primavera'],
['Junio',30,'Primavera/Verano'],
['Julio',31,'Verano'],
['Agosto',31,'Verano'],
['Septiembre',30,'Verano/Otoño'],
['Octubre',31,'Otoño'],
['Noviembre',30,'Otoño'],
['Diciembre',31,'Otoño/Invierno'],
];

if (isset($_GET['dia'])){
	if ($_GET['dia']>=1 && $_GET['dia']<=12){
		echo '<pre>';
		echo 'Mes: '.$calendario[($_GET['dia'])+1][0].'</br>';
		echo 'Días: '.$calendario[($_GET['dia'])+1][1].'</br>';
		echo 'Estación: '.$calendario[($_GET['dia'])+1][2].'</br>';
		echo '</pre>';
	}else
		echo 'Número no válido.';
}else
	echo 'Mete un número de mes (1-12).';
?>