<HTML>
    <HEAD>
        <title>Mencari Data</title>
    </HEAD>
    <BODY>
        <h1>Mencari Data</h1>
        <?php
        include 'koneksi.php';
        $carinama = $_GET['nama'];

        $mysql_query("SELECT * FROM tabel_mahasiswa WHERE nama LIKE '%$carinama%'")or die ($mysql_error());
        $jumlah=mysql_num_rows($mysql_query);
        echo "<h3>Data Hasil Pencarian : $jumlah</h3>";
        while($record=mysql_fetch_row($mysql_query){
            echo "NRP : $record[0]";<br/>
            echo "Nama : $record[1]";<br/>
            echo "Foto : $record[2]";<br/>
                $mysql_query="SELECT nama FROM jurusan WHERE id_jurusan='$record[3]'";
                $jur=mysql_fetch_row($mysql_query);
            echo "Jurusan : $jur[0]";<br/>
        }
        ?>
        <a href="view.php">Lihat Data Mahasiswa</a>
    </BODY>
</HTML>