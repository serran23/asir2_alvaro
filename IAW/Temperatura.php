<form>
	Temperatura 
	<input name="numerito" size="4" required /> 
	</br>
	<p>Unidad:   
<select name="menu" required >
  <option value="Celsius">Celsius</option>
  <option value=1>Farenheit</option>
  <option value=2>Kelvin</option>
</select>
	</br>
	</br>
	<button>Convertir</button>
	<input type="reset" value="Borrar">
	</br>
	</br>
</form>


<!--Formulario, se meten los valores con los que trabajaremos, tiene una cajita, un menú, un botón para mandar los datos y otro para resetearlos. El required de la caja es para obligar a meter algún valor.-->

<?php

//Inicializamos las variables que usaremos para que no llore.
$c=NULL;
$f=NULL;
$k=NULL;

//Le metemos un filtro que detecte si ya hay algún valor metido, básicamente para que cuando arranquemos la página, si aún no hay nada metido, nos meta el mensaje de introduce el numero y selecciona la unidad.
if(isset($_GET['numerito'])){
//Hacemos un switch que nos compare el valor seleccionado del menú con las 3 posibles respuestas.
	switch ($_GET['menu']){
		
//Ojo con hacer operaciones con números decimales, o metes la conversión a float o error party desu.
		case 0:
			$c=($_GET['numerito']);
			$f=(floatval($c)*9/5)+32;
			$k=floatval($c)+273.15;
			break;
		
		case 1:
			$f=($_GET['numerito']);
			$c=(floatval($f)-32)*5/9;
			$k=floatval($c)+273.15;
			break;
			
		case 2:
			$k=($_GET['numerito']);
			$c=floatval($k)-(273.15);
			$f=(floatval($c)*9/5)+32;
			break;

	}
	
//Imprimimos con el echo los resultados almacenados.
	echo $c.' grados celsius.</br>'.$f.' grados farenheit.</br>'.$k.' grados kelvin.';
	
//Y ya estaría, digo yo.
	
}else
	echo 'Introduce una temperatura y selecciona su unidad.';
?>
