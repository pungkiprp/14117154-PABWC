<?php>
include 'koneksi.php';
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$foto = $_POST['foto'];
$jurusan = $_POST['jurusan'];

mysql_query("INSERT INTO tabel_mahasiswa VALUES('','$nrp','$nama','$foto','$jurusan')");

header("location:view.php?pesan=input");
?>