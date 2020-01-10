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

$c=NULL;
$f=NULL;
$k=NULL;

/*Inicializamos las variables que usaremos para que no llore.*/

if(isset($_GET['numerito'])){

/*Le metemos un filtro que detecte si ya hay algún valor metido, básicamente para que cuando arranquemos la página, si aún no hay nada metido, nos meta el mensaje de introduce el numero y selecciona la unidad.*/

	switch ($_GET['menu']){
		case "Celsius":
			$c=($_GET['numerito']);
			$f=($c*9/5)+32;
			$k=$c+273.15;
			break;
		
		case "Farenheit":
			$f=($_GET['numerito']);
			$c=($f-32)*5/9;
			$k=$c+273.15;
			break;

		case "Kelvin":
			$k=($_GET['numerito']);
			$c=$k-273.15;
			$f=($c*9/5)+32;
			break;

/*Hacemos un switch que nos compare el valor seleccionado del menú con las 3 posibles respuestas. En cada case sería bastante mejor llamar a funciones que repetir tantas veces cosas similares, pero es mu tarde y tengo sueño.*/

	}
	echo $c.' grados celsius, '.$f.' grados farenheit y '.$k.' grados kelvin.';
	
/*Imprimimos con el echo los resultados almacenados.*/
	
}else
	echo 'Introduce una temperatura y selecciona su unidad.';



?>