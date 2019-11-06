<HTML>
<HEAD>
<title>Simpan Data</title>
</HEAD>
<BODY>
<h1>Simpan Data</h1>
<?php
$nrp = $_POST["nama"];
$nama = $_POST["email"];
$foto = $_POST["komentar"];
&jurusan = $_POST["jurusan"];
$conn=mysqli_connect ("localhost:3307","root","","universitas") or die ("koneksi gagal");
mysqli_select_db($conn,"universitas");
echo "NRP : $nrp <br>";
echo "Nama : $nama <br>";
echo "Foto : $foto <br>";
echo "Jurusan : $jurusan <br>";
$sqlstr="insert into tabel_mahasiswa (nrp,nama,foto,jurusan)
values ('$nrp','$nama','$foto','$jurusan')";
$hasil = mysqli_query($conn,$sqlstr);

header("location:view.php?pesan=hapus");

echo "Data berhasil disimpan";
?>
</BODY>
</HTML>