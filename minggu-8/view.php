<!doctype html>
<html>

    <?php
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
        echo "Data berhasil ditambahkan";

    }else if($pesan == "delete"){
        echo "Data berhasil dihapus";
    }
}
?>

<h2>Data yang Tersimpan</h2>
<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>NRP</th>
        <th>Nama/th>
        <th>Foto</th>
        <th>Jurusan</th>
        <th>Hapus</th>
    </tr>

<?php
include "koneksi.php";
$query_mysql = mysql_query("SELECT * FROM tabel_mahasiswa")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
?>
    <tr>
        <td><?php Echo $nomor++;?></td>
        <td><?php Echo $data['nrp'];?></td>
        <td><?php Echo $data['nama'];?></td>
        <td><?php Echo $data['foto'];?></td>
        <td><?php Echo $data['jurusan'];?></td>
        <td>
            <a class="hapus" href="hapusdata.php?id=<?php echo $data['id'];?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
    </table>
    </html>
