<?php 
	if (isset($_POST["submit"])) {
		$nama = $_POST["nama"];
		$alamat = $_POST["alamat"];
		$gender = $_POST["gender"];
		$goldar = $_POST["goldar"];
		$hobi = $_POST["hobi"];
		$keterangan = $_POST["keterangan"];
 ?>

<table border="2">
 	<tr><center>
 		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>JENIS KELAMIN</th>	
 		<th>GOLONGAN DARAH</th>
 		<th>HOBI</th>
		<th>KETERANGAN</th>
		</center>
 	</tr>
 	<tr>
	<center>
 		<td><?php echo $nama; ?></td>
		<td><?php echo $alamat; ?></td>
		<td><?php echo $gender; ?></td>
		<td><?php echo $goldar; ?></td>
 		<td><?php echo $hobi; ?></td>
 		<td><?php echo $keterangan; ?></td>
		</center>
 	</tr>

 	<?php } ?> 