<form>
	Nota 
	<input name="nota" size="4" required /> 
	</br>
	</br>
	Nombre del susodicho/a
	<input name="nombre" size="40" required /> 
	</br>
	</br>
	</br>
	<button>Comprobar</button>
	<input type="reset" value="Borrar">
	</br>
	</br>
	David's mode?
	<input type="radio" name="semehacaidounpunto" value="dead"> Ou yeah
	<input type="radio" name="semehacaidounpunto" value="good" checked="checked"> Not today but soon
</form>


<!--Formulario, se meten los valores con los que trabajaremos, tiene dos cajitas, una para la nota y otra para el nombre, un botón para mandar los datos y otro para resetearlos. no se quien ha metido el radio ese de David U.U -->

<?php


if(isset($_GET['nota']) && isset($_GET['nombre'])){
	
/*Comprobamos que tenemos los valores metidos, para que nos tire mensajito amistoso si es la 1º vez que entramos*/
	
	if(is_numeric($_GET['nota']) && ($_GET['nota'])>=0 && ($_GET['nota'])<=10){
		
/*Comprobamos que hemos metido un valor entre 0 y 10 mas que nada para que no explote esto. Si no se cumple, mensajito.*/
		
		if(($_GET['semehacaidounpunto'])=='dead'){
			$_GET['nota']--;
			
/*Muahahahaha*/
			
			if (($_GET['nota'])>=0 && ($_GET['nota'])<2){
				$veredicto='muy deficiente';
				$comentarioinnecesarioperonecesarioalmismotiempo=' ¿seguro que eres alumno mío? No me suenas..';
			}elseif (($_GET['nota'])>=2 && ($_GET['nota'])<5){
			
				$veredicto='suspenso';
				$comentarioinnecesarioperonecesarioalmismotiempo='no te he visto preguntarme las 100 veces necesarias, al pozo.';

			}elseif (($_GET['nota'])>=5 && ($_GET['nota'])<7){
				$veredicto='aprobado';
				$comentarioinnecesarioperonecesarioalmismotiempo='te apruebo porque me da cosa suspenderte, pero vamos...';
			
			}elseif (($_GET['nota'])>=7 && ($_GET['nota'])<9){
				$veredicto='notable';
				$comentarioinnecesarioperonecesarioalmismotiempo='por lo menos no molesta en clase, meh.';
				
			}else{
				$veredicto='sobresaliente';
				$comentarioinnecesarioperonecesarioalmismotiempo='ejercicio rándom el último día de la evaluación apareció.';
		}
				
		echo 'El alumno/a '.($_GET['nombre']).' ha sacado un '.($_GET['nota']).' lo que viene siendo  un '.$veredicto.', '.$comentarioinnecesarioperonecesarioalmismotiempo;
		
/*WTF*/

		}else{
		
			if (($_GET['nota'])>=0 && ($_GET['nota'])<2){
					$veredicto='muy deficiente';
					$comentarioinnecesarioperonecesarioalmismotiempo='lo cual concuerda con la capacidad cerebral del alumno.';
			}elseif (($_GET['nota'])>=2 && ($_GET['nota'])<5){
				
					$veredicto='suspenso';
					$comentarioinnecesarioperonecesarioalmismotiempo='igual hay que dejar de dormir en clase.';

			}elseif (($_GET['nota'])>=5 && ($_GET['nota'])<7){
					$veredicto='aprobado';
					$comentarioinnecesarioperonecesarioalmismotiempo='de milagro.';
				
			}elseif (($_GET['nota'])>=7 && ($_GET['nota'])<9){
					$veredicto='notable';
					$comentarioinnecesarioperonecesarioalmismotiempo='mejorable, but not bad.';
					
			}else{
					$veredicto='sobresaliente';
					$comentarioinnecesarioperonecesarioalmismotiempo='mu bien.';
			}
					
			echo 'El alumno/a '.($_GET['nombre']).' ha sacado un '.($_GET['nota']).' lo que viene siendo  un '.$veredicto.', '.$comentarioinnecesarioperonecesarioalmismotiempo;

/*Hacemos que mediante un if y elseif's vaya buscando en que rango está nuestra nota, y una vez lo encuentra, metemos el veredicto (y un comentario muy salao) en variables. Una vez termina el if, imprimimos el mensajito con los valores obtenidos*/

		}
			
	}else{
		
		echo 'Ese numero no es bien chingón. Entre 0 y 10, por favor.';
		
	}


}else
	echo 'Introduce la nota y el nombre del alumno/a a ajusticiar.';



?>