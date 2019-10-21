Álvaro Serrano
</br>
<a href="http://192.168.0.93/asir2.php">-Xanders-</a>
</br>
<a href="http://192.168.0.50/asir2.php">-De la Sen-</a>
</br>
</br>
<a href="http://192.168.0.104/asir2_alvaro/catalogo.php">*Catálogo*</a>
</br>


<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR'].' '.date("h:i:sa")."\r\n");
fclose($f)
?>