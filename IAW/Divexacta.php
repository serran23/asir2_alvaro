<?php
/*Mítico if para que nos diga cosas la 1º vez que entremos*/
	$a=($_POST['num1']);
	$b=($_POST['num2']);
	
/*Pasamos los valores metidos en las cajitas a variables.*/
	
	if($a%$b==0){
		
		echo ($_POST['num1']).'/'.($_POST['num2']).' da '.intdiv(($_POST['num1']),($_POST['num2'])).', sin resto, o sea, división exacta.';
		
	}else{
		
		$res=$a%$b;
		echo ($_POST['num1']).'/'.($_POST['num2']).' da '.intdiv(($_POST['num1']),($_POST['num2'])).', con un resto de '.$res.' y tal.';
	}
/*Hacemos la operación y según el resultado procedemos: si es par, mensajito y pa casa, si es impar, metemos el resultado en otra variable y se la cantamos por pantalla.*/
?>