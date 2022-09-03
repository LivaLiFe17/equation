<?php 
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$delta = $b * $b - 4 * $a * $c;
echo "Delta =" .$delta ."<br>";
if ($delta == 0){
    echo "x1 = x2 =" .$x = $x2 = - $b / 2 * $a;
}
elseif($delta >0) {
    echo "x1 =" .$x1 = (- $b - sqrt($delta))/ 2 * $a ."<br>";
    echo "x2 =" .$x2 = (- $b + sqrt ($delta)) / 2 * $a;
}
else{
    echo "Pas de solution";

} 
 ?>