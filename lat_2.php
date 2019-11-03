<!DOCTYPE html>
<html>
	<h1>Hitung Jumlah Karakter</h1>
	<form method="GET" action="">

	<h3>Masukan nama : </h3>
    <input type="text" name="nama"></input><br/><br/>
	<label for="Color">PILIH WARNA : </label>
		<select name="Color">
		<option value="Blue">Biru</option>
		<option value="Red">Merah</option>
		<option value="Green">Hijau</option>
		<option value="Yellow">Kuning</option>
		</select>
	<br><br>
   <input type="submit" name="Hitung" value="Hitung" /><br><br>
</form>
<?php
   if(isset($_GET['Hitung'])){
	   $a=$_GET['nama'];
	   $b=$_GET['Color'];
	   function hitungKarakter ($nama){
		   if(strlen($nama>20)){
			   return ((strlen($nama))*700);
		   }elseif(strlen($nama>11)){
			   return ((strlen($nama))*500);
		   }else {
			   return((strlen($nama))*300);
		   }
	   }
   
	   echo "<font color='$b'>Nama : $a <br>";
	   echo "<font color='$b'>Total harga bet untuk nama $a adalah ".hitungKarakter($a);
	   
   }
   ?>
   
<html>