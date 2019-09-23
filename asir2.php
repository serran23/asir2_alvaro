Álvaro Serrano
</br>
<a href="http://192.168.0.93/asir2.php">Me debes 6k pesetas de whisky -Xanders-</a>
</br>
<a href="http://192.168.0.50/asir2.php">-De la Sen-</a>
</br>
<a href="https://m.forocoches.com/foro/forumdisplay.php?f=2">Forocarros</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>