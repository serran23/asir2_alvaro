<?php

//Comprobamos que tenemos los valores metidos, para que nos tire mensajito amistoso si es la 1º vez que entramos

if(isset($_POST['nota']) && isset($_POST['nombre'])){
	
//Comprobamos que hemos metido un valor entre 0 y 10 mas que nada para que no explote esto. Si no se cumple, mensajito.
	
	if(is_numeric($_POST['nota']) && ($_POST['nota'])>=0 && ($_POST['nota'])<=10){
		
/*Muahahahaha*/
		
		if(($_POST['semehacaidounpunto'])=='dead'){
			$_POST['nota']--;
			

			
			if (($_POST['nota'])>=0 && ($_POST['nota'])<2){
				$veredicto='muy deficiente';
				$comentarioinnecesarioperonecesarioalmismotiempo=' ¿seguro que eres alumno mío? No me suenas..';
			}elseif (($_POST['nota'])>=2 && ($_POST['nota'])<5){
			
				$veredicto='suspenso';
				$comentarioinnecesarioperonecesarioalmismotiempo='no te he visto preguntarme las 100 veces necesarias, al pozo.';
			}elseif (($_POST['nota'])>=5 && ($_POST['nota'])<7){
				$veredicto='aprobado';
				$comentarioinnecesarioperonecesarioalmismotiempo='te apruebo porque me da cosa suspenderte, pero vamos...';
			
			}elseif (($_POST['nota'])>=7 && ($_POST['nota'])<9){
				$veredicto='notable';
				$comentarioinnecesarioperonecesarioalmismotiempo='por lo menos no molesta en clase, meh.';
				
			}else{
				$veredicto='sobresaliente';
				$comentarioinnecesarioperonecesarioalmismotiempo='ejercicio rándom el último día de la evaluación apareció.';
		}
				
			echo 'Nota original: '.(($_POST['nota'])+1).', peeeero...</br>'.'Al final, el alumno/a '.($_POST['nombre']).' ha sacado un '.($_POST['nota']).', lo que viene siendo un '.$veredicto.', '.$comentarioinnecesarioperonecesarioalmismotiempo;
		
//Esto pasa cuando tomas mucho monster.
//Hacemos que mediante un if y elseif's vaya buscando en que rango está nuestra nota, y una vez lo encuentra, metemos el veredicto (y un comentario muy salao) en variables. Una vez termina el if, imprimimos el mensajito con los valores obtenidos

		}else{
		
			if (($_POST['nota'])>=0 && ($_POST['nota'])<2){
					$veredicto='muy deficiente';
					$comentarioinnecesarioperonecesarioalmismotiempo='lo cual concuerda con la capacidad cerebral del alumno.';
			}elseif (($_POST['nota'])>=2 && ($_POST['nota'])<5){
				
					$veredicto='suspenso';
					$comentarioinnecesarioperonecesarioalmismotiempo='igual hay que dejar de dormir en clase.';
			}elseif (($_POST['nota'])>=5 && ($_POST['nota'])<7){
					$veredicto='aprobado';
					$comentarioinnecesarioperonecesarioalmismotiempo='de milagro.';
				
			}elseif (($_POST['nota'])>=7 && ($_POST['nota'])<9){
					$veredicto='notable';
					$comentarioinnecesarioperonecesarioalmismotiempo='mejorable, but not bad.';
					
			}else{
					$veredicto='sobresaliente';
					$comentarioinnecesarioperonecesarioalmismotiempo='mu bien.';
			}
			
//Imprimimos toda la cadena, donde metemos el nombre del condenado y su nota ajusticiadora.
			
			echo 'El alumno/a '.($_POST['nombre']).' ha sacado un '.($_POST['nota']).', lo que viene siendo un '.$veredicto.', '.$comentarioinnecesarioperonecesarioalmismotiempo;

		}
			
	}else{
		
//Mensaje por si no sabemos ni meter la nota bien.
		
		echo 'Ese numero no es bien chingón. Entre 0 y 10, por favor.';
		
	}
}else
	echo 'Introduce la nota y el nombre del alumno/a a ajusticiar.';
?>