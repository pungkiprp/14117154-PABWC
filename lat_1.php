<?php
function swap(&$a,&$b){
	$c=$a;
	$a=$b;
	$b=$c;;
	
	return 0;
}

$c=0;
$a=1;
$b=3;
echo "Nilai sebelum diswap </br>";
echo "A = 1 </br>"; 
echo "B = 3 </br>";

swap($a,$b);
echo "Nilai Sesudah diswap </br>";
echo "A = $a </br>";
echo "B = $b </br>";
?>

