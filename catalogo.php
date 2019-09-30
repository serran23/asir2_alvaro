<form>
Si no apareces en la lista, por favor pega aquí tu link de github:
	<input name="githublink"/>
	</br>
Y aquí tu nombre:	
	<input name="name"/>
	</br>
	<button>Añadir</button>
	</br>
</form>

<?php
if(isset($_GET['githublink'], $_GET['name'])){
	if (filter_var($_GET['githublink'], FILTER_VALIDATE_URL)) {
		echo 'Hola, ';
		print_r($_GET['name']);
		$f=fopen('githubwebs.html','a');
		fwrite($f,'<a href="'.$_GET['githublink'].'">-'.$_GET['name'].'-</a></br>'."\r\n");
		fclose($f);	
	}
}
?>
</br>
</br>
Lista de GitHub ASIR2
</br>
<a href="https://github.com/Junnyper/Asir2_Kimberly">-Kimberly-</a>
</br>
<a href="https://github.com/jameslindemann/asir2_James">-Le James-</a>
</br>
<a href="https://github.com/DanielHernandezCantera/ASIR2-DanielHern-ndezCantera">-Daniel Hernández-</a>
</br>
<a href="https://github.com/kev1nD1az/Asir2_Kevin">-Kevin-</a>
</br>
<a href="https://github.com/Xanders25/asir2_xanders">-Xanders-</a>
</br>
<a href="https://github.com/pabloar23/asir2_pablo">-Pablo-</a>
</br>
<?php
include 'githubwebs.html';
?>