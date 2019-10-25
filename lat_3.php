<html>
<form action="" method="POST">
<h2> Membuat fungsi untuk menghitung faktorial dari suatu bilangan!</h2>
<br>
  <label> Masukkan bilangan bulat positif: </label>
  <input name="bil" type="text" size="3"><br>

  <input name="faktorial" type="submit" value="Hitung">
</form>

<?php
   $bil=$_POST["bil"];
	if($bil>=1){
		echo "Faktorial :<br>"; 
		for($i=1; $i<= $bil; $i++){
			$faktorial = 1;
			echo $i. "! = ";  
				for($j=$i; $j > 0; $j--){
				if($j == 1){
			echo " 1 = " .$faktorial;
			}
		else{
            echo $j ." x ";      
		}$faktorial*=$j;
		}
			echo "</br>";
		}	
	}
	else if($bil == 0){
		echo "0! = 1";
	}else{
		echo "Anda salah memasukkan bilangan.";
	}
?>
</html>