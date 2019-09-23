
<?php
if(isset($_GET['email'])){
	if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
		echo 'Hola, usuario ';
		print_r($_GET['email']);
		$f=fopen('suscriptores.txt','a');
		fwrite($f,$_GET['email']."\r\n");
		fclose($f);
	}
}
?>

<form>
	<input name="email"/>
	<button>Suscribirse</button>
</form>

</br>
<a href="http://192.168.0.46/asir2_xanders/index.php" target=_blank>-Xanders-</a>
</br>
<a href="http://192.168.0.46/asir2_xanders/index.php" target=_blank>-De la Sen-</a>
</br>
