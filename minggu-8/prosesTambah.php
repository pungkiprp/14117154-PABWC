<HTML>
<HEAD>
<title>Simpan Buku Tamu</title>
</HEAD>
<BODY>
<h1>Simpan Buku Tamu MySQL</h1>
<?php
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];
$conn=mysql_connect ("localhost:3307","root","")
or die ("koneksi gagal");
mysql_select_db($conn,"universitas");
echo "Nama : $nama <br>";
echo "Email : $email <br>";
echo "Komentar : $komentar <br>";
$sqlstr="insert into bukutamu (nama,email,komentar)
values ('$nama','$email','$komentar')";
$hasil = mysql_query($conn,$sqlstr);
echo "Simpan bukutamu berhasil dilakukan";
?>
</BODY>
</HTML>