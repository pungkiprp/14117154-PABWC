<?php
//mencari bilangan prima dari 1-37

for ($a =1; $a <=37; $a++){
	$i=0;
for ($b=1; $b<=$a; $b++){
if ($a % $b == 0){
	$i++;
	}
	} if ($i == 2) {
		echo "$a <br>";
	}
}
?>
	