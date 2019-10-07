<?php

function suma($a,$b){


$res=($a+$b);

return $res;

}

function resta($a,$b){


$res=($a-$b);

return $res;

}

function multi($a,$b){


$res=($a*$b);

return $res;

}

function divi($a,$b){


$res=($a/$b);

return $res;

}

echo "Suma: ".suma(4,2);
echo '</br>';
echo "Resta: ".resta(4,2);
echo '</br>';
echo "Multiplicación: ".multi(4,2);
echo '</br>';
echo "División: ".divi(4,2);

?>