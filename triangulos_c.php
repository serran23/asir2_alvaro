<form>
	Ángulo 1    
	<input name="angulo1"/>
	</br>
	Ángulo 2    
	<input name="angulo2"/>
	</br>
	Ángulo 3  
	<input name="angulo3"/>
	</br>
	<button>Comprobar</button>
	</br>
	</br>
</form>

<?php
if(isset($_GET['angulo1'], $_GET['angulo2'], $_GET['angulo3'])){
	if(is_numeric($_GET['angulo1']) && is_numeric($_GET['angulo2']) && is_numeric($_GET['angulo3']) && ($_GET['angulo1'])>0 && ($_GET['angulo2'])>0 && ($_GET['angulo3'])>0){
		if((($_GET['angulo1'])+($_GET['angulo2'])+($_GET['angulo3']))==180){
			if($_GET['angulo1']==90 || $_GET['angulo2']==90 || $_GET['angulo3']==90){
				echo 'Triángulo rectángulo.';
			}elseif($_GET['angulo1']>90 || $_GET['angulo2']>90 || $_GET['angulo3']>90){
				echo 'Triángulo obtusángulo.';
			}else
				echo 'Triángulo acutángulo.';
		}else
			echo 'Los ángulos de un triángulo han de sumar 180º, revisa que has metido.';
	}else
		echo 'Introduce valores numéricos, por favor.';
}else
	echo 'Introduce la medida de los angulos del triángulo.';

echo '</br>';
echo '</br>';

if(isset($_GET['angulo1'], $_GET['angulo2'], $_GET['angulo3'])){
	if(is_numeric($_GET['angulo1']) && is_numeric($_GET['angulo2']) && is_numeric($_GET['angulo3']) && ($_GET['angulo1'])>0 && ($_GET['angulo2'])>0 && ($_GET['angulo3'])>0){
		if((($_GET['angulo1'])+($_GET['angulo2'])+($_GET['angulo3']))==180){
			if($_GET['angulo1']==$_GET['angulo2'] && $_GET['angulo1']==$_GET['angulo3']){
				echo 'Triángulo equilátero.';
			}elseif($_GET['angulo1']==$_GET['angulo2'] || $_GET['angulo1']==$_GET['angulo3'] || $_GET['angulo2']==$_GET['angulo3']){
				echo 'Triángulo isósceles.';
			}else
				echo 'Triángulo escaleno.';
		}
	}
}
?>