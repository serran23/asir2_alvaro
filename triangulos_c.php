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
if(isset($_GET['angulo1'],$_GET['angulo1'],$_GET['angulo1'])){
	if(is_numeric($_GET['angulo1']) && is_numeric($_GET['angulo1']) && is_numeric($_GET['angulo1']) && ($_GET['angulo1'])>0 && ($_GET['angulo1'])>0 && ($_GET['angulo1'])>0){
		echo 'Ángulo 1: '.$_GET['angulo1'].'</br>';
		echo 'Ángulo 2: '.$_GET['angulo2'].'</br>';
		echo 'Ángulo 3: '.$_GET['angulo3'].'</br>';
		echo '</br>';
}
}
?>

<form>
	<button href="http://localhost/asir2_alvaro/triangulos_c.php">Poner a 0 los valores.</button>
	</br>
	</br>
</form>

<?php
if(isset($_GET['angulo1'], $_GET['angulo2'], $_GET['angulo3'])){
	if(is_numeric($_GET['angulo1']) && is_numeric($_GET['angulo2']) && is_numeric($_GET['angulo3']) && ($_GET['angulo1'])>0 && ($_GET['angulo2'])>0 && ($_GET['angulo3'])>0){
		function lados(){
			if($_GET['angulo1']==$_GET['angulo2'] && $_GET['angulo1']==$_GET['angulo3']){
				$r='equilátero';
			}elseif($_GET['angulo1']==$_GET['angulo2'] || $_GET['angulo1']==$_GET['angulo3'] || $_GET['angulo2']==$_GET['angulo3']){
				$r='isósceles';
			}else
				$r='escaleno';
			return $r;
		}
		
		
		
		function angulos(){
			if($_GET['angulo1']==90 || $_GET['angulo2']==90 || $_GET['angulo3']==90){
				$r='rectángulo';
			}elseif($_GET['angulo1']>90 || $_GET['angulo2']>90 || $_GET['angulo3']>90){
				$r='obtusángulo';
			}else
				$r='acutángulo';
			return $r;
			}
			
			echo 'Es un triángulo '.lados().' y '.angulos().'.';
		
	}else
		echo  'Introduce valores numéricos, por favor.';
}else
	echo 'Introduce la medida de los lados del triángulo.';

?>