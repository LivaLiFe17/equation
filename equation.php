<?php 
$a = -1;
$b = 2;
$c = 1;
$delta = $b * $b - 4 * $a * $c;
echo $delta;
if ($delta == 0){
    echo $x = $x2 = - $b / 2 * $a;
}
elseif($delta >0) {
    echo   $x1 = (- $b - sqrt($delta))/ 2 * $a;
    echo $x2 = (- $b + sqrt ($delta)) / 2 * $a;
}
else echo "Pas de solution";

 ?>