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
if(isset($a1, $a2, $a3)){
	echo 'Ángulo 1: '.$_GET['angulo1'].'</br>';
	echo 'Ángulo 2: '.$_GET['angulo2'].'</br>';
	echo 'Ángulo 3: '.$_GET['angulo3'].'</br>';
	echo '</br>';
}else
?>

<form>
	<button href="http://localhost/asir2_alvaro/triangulos_c.php">Poner a 0 los valores.</button>
	</br>
	</br>
</form>

<?php
function loko($a1,$a2,$a3,$l1,$l2,$l3){
	if(is_numeric($a1) && is_numeric($a2) && is_numeric($a3) && ($a1)>0 && ($a2)>0 && ($a3)>0){
		if((($a1)+($a2)+($a3))==180){
			if($a1==90 || $a2==90 || $a3==90){
				echo 'Triángulo rectángulo.';
			}elseif($a1>90 || $a2>90 || $a3>90){
				echo 'Triángulo obtusángulo.';
			}else
				echo 'Triángulo acutángulo.';
		}else
			echo 'Los ángulos de un triángulo han de sumar 180º, revisa que has metido.';
	}else
		echo 'Introduce valores numéricos positivos, por favor.';

echo '</br>';
echo '</br>';

if(is_numeric($a1) && is_numeric($a2) && is_numeric($a3) && ($a1)>0 && ($a2)>0 && ($a3)>0){
		if((($a1)+($a2)+($a3))==180){
			if($a1==$a2 && $a1==$a3){
				echo 'Triángulo equilátero.';
			}elseif($a1==$a2 || $a1==$a3 || $a2==$a3){
				echo 'Triángulo isósceles.';
			}else
				echo 'Triángulo escaleno.';
		}
	}else
		echo 'Introduce valores numéricos positivos, por favor.';
}
if(isset($_GET['angulo1'], $_GET['angulo2'], $_GET['angulo3'])){
	echo loko($_GET['angulo1'],$_GET['angulo2'],$_GET['angulo3'],1,1,1);
}
?>