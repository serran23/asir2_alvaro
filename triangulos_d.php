<form>
	Lado 1    
	<input name="lado1"/>
	</br>
	Lado 2    
	<input name="lado2"/>
	</br>
	Lado 3  
	<input name="lado3"/>
	</br>
	</br>
	Ángulo 1    
	<input name="angulo1"/>
	</br>
	Ángulo 2    
	<input name="angulo2"/>
	</br>
	Ángulo 3  
	<input name="angulo3"/>
	</br>
	</br>
	<button>Comprobar</button>
	</br>
	</br>
	<button href="http://localhost/asir2_alvaro/triangulos_c.php">Poner a 0 los valores.</button>
	</br>
	</br>
</form>

<?php
if(isset($_GET['angulo1'],$_GET['angulo2'],$_GET['angulo3'],$_GET['lado1'],$_GET['lado2'],$_GET['lado3'])){
	if(($_GET['angulo1']!='') && ($_GET['angulo2']!='') && ($_GET['angulo3']!='') && ($_GET['lado1']!='') && ($_GET['lado2']!='') && ($_GET['lado3']!='')){
		if(is_numeric($_GET['angulo1']) && is_numeric($_GET['angulo2']) && is_numeric($_GET['angulo3']) && ($_GET['lado1'])>0 && ($_GET['lado2'])>0 && ($_GET['lado3'])>0){
			
			function triangulo($t){
				$r=null;
				$r.=lados(
					$t['angulos'][0],
					$t['angulos'][1],
					$t['angulos'][2],
				);
				$r.=angulos(
					$t['angulos'][0],
					$t['angulos'][1],
					$t['angulos'][2],
				);
				return $r;
			}
				
			function angulos($a1,$a2,$a3){
			
			$r=NULL;
				if((($a1)+($a2)+($a3))==180){
					if($a1==90 || $a2==90 || $a3==90){
						$r=' y rectángulo.';
					}elseif($a1>90 || $a2>90 || $a3>90){
						$r=' y obtusángulo.';
					}else
						$r=' y acutángulo.';
				}else
					echo 'Los ángulos de un triángulo han de sumar 180º, revisa que has metido.';

			return $r;
			}
			
			function lados($A1,$A2,$A3){
				
			$r=NULL;		
				if((($A1)+($A2)+($A3))==180){
					if($A1==$A2 && $A1==$A3){
						$r='Triángulo equilátero';
					}elseif($A1==$A2 || $A1==$A3 || $A2==$A3){
						$r='Triángulo isósceles';
					}else
						$r='Triángulo escaleno';
				}
			return $r;
			}
		echo triangulo([
		'lados'=>[$_GET['lado1'],$_GET['lado2'],$_GET['lado3']],
		'angulos'=>[$_GET['angulo1'],$_GET['angulo2'],$_GET['angulo3']]
		]);


			}else
				echo 'Mete números positivos, por favor.';
		}else
			echo 'Mete los números en las cajitas.';
	}else 
		echo 'Mete los números en las cajitas.';
?>