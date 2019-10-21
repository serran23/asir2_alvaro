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
	<button>Comprobar</button>
	</br>
	</br>
</form>

<?php

if(isset($_GET['lado1'], $_GET['lado2'], $_GET['lado3'])){
	if(is_numeric($_GET['lado1']) && is_numeric($_GET['lado2']) && is_numeric($_GET['lado3']) && ($_GET['lado1'])>0 && ($_GET['lado2'])>0 && ($_GET['lado3'])>0){
		function lados(){
			if($_GET['lado1']==$_GET['lado2'] && $_GET['lado1']==$_GET['lado3']){
				$r='Triángulo equilátero.';
			}elseif($_GET['lado1']==$_GET['lado2'] || $_GET['lado1']==$_GET['lado3'] || $_GET['lado2']==$_GET['lado3']){
				$r='Triángulo isósceles.';
			}else
				$r='Triángulo escaleno.';
			return $r;
		}
		echo lados();
	}else
		echo  'Introduce valores numéricos, por favor.';
}else
	echo 'Introduce la medida de los lados del triángulo.';

?>