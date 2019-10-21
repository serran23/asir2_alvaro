<<form>
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
	<button>Comprobar</button>
	</br>
	</br>
	<button href="http://localhost/asir2_alvaro/triangulos_c.php">Poner a 0 los valores.</button>
	</br>
	</br>
</form>



<?php
if(isset($_GET['lado1'],$_GET['lado2'],$_GET['lado3'])){
	if(($_GET['lado1']!='') && ($_GET['lado2']!='') && ($_GET['lado3']!='')){
		if(is_numeric($_GET['lado1']) && is_numeric($_GET['lado2']) && is_numeric($_GET['lado3']) && ($_GET['lado1'])>0 && ($_GET['lado2'])>0 && ($_GET['lado3'])>0){
		$r=null;
		function colosal($a,$b,$c){
			
			$r=null;
			$l=[$a,$b,$c];
			
			$x=($l[0]**2-$l[1]**2+$l[2]**2)/(2*$l[2]);
			$h=sqrt($a**2-$x**2);
			$A=round(atan($h/($c-$x))*360/(2*pi()),2);
			$B=round(atan($h/$x)*360/(2*pi()),2);
			$C=180-($A+$B);

			$angulo=null;
				if($r[0][0]==90 || $r[0][1]==90 || $r[0][2]==90){
					$angulo='rectángulo';
				}elseif($a>90 || $b>90 || $c>90){
					$angulo='obtusángulo';
				}else
					$angulo='acutángulo';

			
			
			$lado=null;
				if($r[0][0]==$r[0][1] && $r[0][0]==$r[0][2]){
					$lado='equilátero';
				}elseif($r[0][0]==$r[0][1] || $r[0][0]==$r[0][2] || $r[0][1]==$r[0][2]){
					$lado='isósceles';
				}else
					$lado='escaleno';
				
			$r=['angulos'=>[0=>$A,1=>$B,2=>$C],
				'tipo_lados'=>[0=>$lado],
				'tipo_angulos'=>[0=>$angulo],
			];
			
			$res = 'Es un triángulo de lados A='.($r['angulos'][0]).', B='.($r['angulos'][1]).', C='.($r['angulos'][2]).', '.($r['tipo_lados'][0]).' y '.($r['tipo_angulos'][0]).'.';
				
			return $res;
			
		}


		echo colosal($_GET['lado1'],$_GET['lado2'],$_GET['lado3']);
		
		}else
			echo 'Introduce números, y que sean positivos, por favor.';
	}else
		echo 'Introduce los lados del triángulo en las cajitas, please.';
}else
	echo 'Introduce los lados del triángulo en las cajitas, please.';

?>