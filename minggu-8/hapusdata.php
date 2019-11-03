<HTML>
    <HEAD>
        <title>Hapus Data</title>
    </HEAD>
    <BODY>
        <h1>Hapus Data</h1>
        <?php
        include 'koneksi.php';
        $delnrp = $_GET['nrp'];

        $mysql_query("DELETE FROM tabel_mahasiswa WHERE nrp='$delnrp'")or die ($mysql_error());
    
        header("location:view.php?pesan=delete")
        ?>
        <a href="view.php">Lihat Data Mahasiswa</a>
    </BODY>
</HTML>
